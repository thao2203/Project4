<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Components\Recusive;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private $product;
    private $supplier;

    public function __construct(Product $product, Supplier $supplier)
    {
        $this->product = $product;
        $this->supplier = $supplier;
    }

    public function index()
    {
        $products = DB::table('products')
            ->orderBy('created_at', 'desc')
            ->take(15)
            ->get();
        $categories = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('categories.id', 'categories.name', 'products.feature_image_path', DB::raw('SUM(products.quantity) as quantity'))
            ->groupBy('categories.id', 'categories.name', 'products.feature_image_path')
            ->get();
        $detail_products = DB::table('products')
            ->join('suppliers', 'products.supplier_id', '=', 'suppliers.id')
            ->where('products.id','=',$products[0]->id)
            ->select('products.*','suppliers.Name')
            ->get(); 
        $datas = Category::where('parent_id', 0)->get(); 


        return view('client.home', compact('products', 'categories', 'datas','detail_products'));
    }

    public function detail($id)
    {
        $detail_products = $this->product
            ->join('suppliers', 'products.supplier_id', '=', 'suppliers.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('categories.name','products.*')
            ->find($id);

        $related_products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('products.category_id', '=', $detail_products->category_id)
            ->select('products.*')
            ->get();

        $datas = Category::where('parent_id', 0)->get(); 
        return view('client.detail', compact('detail_products', 'related_products','datas'));
    }
    public function category($id)
    {
        $all_suppliers = DB::table('suppliers')
            ->select('suppliers.id','suppliers.name')
            ->get();

        $products = DB::table('products')
            ->orderBy('created_at', 'desc')
            ->take(15)
            ->get();

        $allcate = DB::table('categories')
            ->get();

        $category_products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('products.category_id', '=', $id)
            ->select('products.*')
            ->get();
        $datas = Category::where('parent_id', 0)->get();  
        return view('client.categories', compact('category_products','allcate','datas','products','all_suppliers'));
    }
    
    public function aboutUs()
    {
        $datas = Category::where('parent_id', 0)->get(); 
        return view('client.aboutUs', compact('datas'));
    }
    public function contactUs()
    {
        $datas = Category::where('parent_id', 0)->get(); 
        return view('client.contactUs', compact('datas'));
    }

    public function chiTietGioHang()
    {
        $datas = Category::where('parent_id', 0)->get(); 
        return view('client.cart', compact('datas'));
    }
}
