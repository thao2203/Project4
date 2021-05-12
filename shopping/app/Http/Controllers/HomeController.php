<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Components\Recusive;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private $product;
    private $supplier;

    public function __construct(Product $product, Supplier $supplier){
		$this->product = $product;
        $this->supplier = $supplier;
	}

    public function index()
    {
        $products = DB::table('products')->get();
            
        return view('client.home', compact('products'));
    }

    public function detail($id){
        $detail_products = DB::table('products')
                          ->join('suppliers', 'products.supplier_id', '=', 'suppliers.id')
                          ->where('products.id', '=', $id)
                          ->select('products.*', 'suppliers.*')
                          ->get();
        //dd($detail_products[0]->Name);
        return view('client.detail', compact('detail_products'));
    }

    
}
