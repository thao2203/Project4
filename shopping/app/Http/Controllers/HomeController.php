<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use App\Models\Bestseller;
use Illuminate\Http\Request;
use App\Components\Recusive;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
class HomeController extends Controller
{
    private $product;
    private $supplier;
    private $category;

    public function __construct(Category $category,Product $product, Supplier $supplier, Blog $blog)
    {$this->category = $category;
        $this->product = $product;
        $this->supplier = $supplier;
        $this->blog = $blog;
       
    }

    public function index()
    {
        
        $products = DB::table('products')
            ->orderBy('created_at', 'desc')
            ->get();

        $products_bestSeller =Bestseller::all();
        
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

        $new_blogs = DB::table('blogs')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
       
        return view('client.home', compact('products', 'products_bestSeller', 'categories','new_blogs', 'datas','detail_products'));
            
    }

    public function detail($id)
    {
        $detail_products = $this->product
            ->join('suppliers', 'products.supplier_id', '=', 'suppliers.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('categories.name','products.*','suppliers.name as sup_name')
            ->find($id);

        $related_products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('products.category_id', '=', $detail_products->category_id)
            ->select('products.*')
            ->get();
        $datas = Category::where('parent_id', 0)->get(); 
        return view('client.detail', compact('detail_products', 'related_products','datas'));
    }

    public function search($key)
    {
        
        $datas = Category::where('parent_id', 0)->get(); 
        $all_suppliers = DB::table('suppliers')
        ->select('suppliers.id','suppliers.name')
        ->get();
        
            $allcate = DB::table('categories')
            ->select('categories.id','categories.name')
            ->get();
            $datapro=DB::table("products")
            ->where("name","like","%".$key."%")->select("*")
            ->paginate(12);
              
           //  dd( $data);
            return view('client.searchProduct', compact('datapro','allcate','datas','all_suppliers'));
    }


    public function category($id)
    {
        $all_suppliers = DB::table('suppliers')
            ->select('suppliers.id','suppliers.name')
            ->get();
            
        $allcate = DB::table('categories')
            ->select('categories.id','categories.name')
            ->get();

        $category_products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('products.category_id', '=', $id)
            ->select('products.*', 'categories.name as cate_name')
            ->paginate(12);
        
            $datas = $this->category->all();//Lấy ra tất cả các data
    	$recusive = new Recusive($datas);
    	$htmlOption = $recusive->categoryRecusiveUpdatewithlink(0);
    	
        return view('client.categories', compact('category_products','datas','allcate','htmlOption','all_suppliers'));
    }
    public function category_supplier($id)
    {
        $all_suppliers = DB::table('suppliers')
        ->select('suppliers.id','suppliers.name')
            ->get();
            
        $allcate = DB::table('categories')
        ->select('categories.id','categories.name')
            ->get();

        $category_products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('suppliers', 'products.supplier_id', '=', 'suppliers.id')
            ->where('products.category_id', '=', $id ,'suppliers.id', '=' ,'products.id')
            ->select('products.*', 'suppliers.name as cate_name')
            ->paginate(12);
        $datas = Category::get();  
        return view('client.categories', compact('category_products','allcate','datas','all_suppliers'));
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

    public function blog(){
        $datas = Category::where('parent_id', 0)->get(); 
        $star_blogs = DB::table('blogs')
        ->select('blogs.avt','blogs.name', 'blogs.view','blogs.created_at','blogs.id')
        ->orderBy('view', 'desc')
        ->take(5)
        ->get();
        $detail_blogs = DB::table('blogs')
            ->join('users', 'blogs.userID', '=', 'users.id')
            ->select('blogs.*','users.name as user_name')
            ->orderBy('created_at', 'desc')
            ->paginate(6);
        return view('client.blog', compact('datas','detail_blogs','star_blogs'));
    }

    public function blogDetail($id){
        $datas = Category::where('parent_id', 0)->get(); 
        $star_blogs = DB::table('blogs')
            ->select('blogs.avt','blogs.name', 'blogs.view','blogs.created_at','blogs.id')
            ->orderBy('view', 'desc')
            ->take(15)
            ->get();
        $blogs = DB::table('blogs')
            ->find($id);
        $related_blogs = DB::table('blogs')
            ->join('users', 'blogs.userID', '=', 'users.id')
            ->where('blogs.id','=',$blogs->id)
            ->select('blogs.*','users.name as user_name')
            ->paginate(6);
        return view('client.blogDetail', compact('datas','blogs','star_blogs','related_blogs'));
    }

    public function blogSearch($key){
        $datas = Category::where('parent_id', 0)->get(); 
        $star_blogs = DB::table('blogs')
        ->select('blogs.avt','blogs.name', 'blogs.view','blogs.created_at','blogs.id')
        ->orderBy('view', 'desc')
        ->take(5)
        ->get();
        $detail_blogs = DB::table('blogs')
            ->join('users', 'blogs.userID', '=', 'users.id')
            ->select('blogs.*','users.name as user_name')
            ->where('blogs.name','like','%'.$key.'%')
            ->orWhere('blogs.content','like','%'.$key.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(6);
        return view('client.blogSearch', compact('datas','detail_blogs','star_blogs',"key"));
    }
   
    
}
