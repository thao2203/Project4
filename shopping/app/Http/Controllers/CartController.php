<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\MenuRecusive;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function save_cart(Request $request)
    {
        $data = $this->product->find($request->id);
        $session_id = substr(md5(microtime()),rand(0,26),5); //sinh mã id cho session, mỗi 1 product trong cart có 1 id session khác nhau
        $cart = Session::get('cart');
        if($cart){
            $ischeck = 0;
            foreach($cart as $key => $item){
                if($item['product_id']==$request->id){
                    $ischeck++;
                    $cart[$key]['product_count'] = $item['product_count'] + $request->count;    
                }
                unset($cart);
            }
            if($ischeck == 0){
                $cart[] = array(
                    "session_id" => $session_id,
                    "product_id" => $data['id'],
                    "product_name" => $data['name'],
                    "product_price" => $data['price'],
                    "product_img" => $data['feature_image_path'],
                    "product_count" => $request->count,
                );
                Session::put('cart',$cart);
            }            
            
        }
        else{
            $cart[] = array(
                "session_id" => $session_id,
                "product_id" => $data['id'],
                "product_name" => $data['name'],
                "product_price" => $data['price'],
                "product_img" => $data['feature_image_path'],
                "product_count" => $request->count,
            );
            Session::put('cart',$cart);
        }
        Session::save();
        print_r(Session::get('cart'));
    }
}