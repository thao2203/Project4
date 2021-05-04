<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Components\Recusive;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private $product;

    public function __construct(Product $product){
		$this->product = $product;
	}

    public function index()
    {
        $products = DB::table('products')->get();
        
        return view('home.home', compact('products'));
    }

    public function LoadImg(Request $r)
    {
        // $fileName = time().'_'. $r->file->getClientOriginalName();
        // $file= $r->file->storeAs('upload/file/'.session()->get('id'), $fileName, 'public');
    }
}
