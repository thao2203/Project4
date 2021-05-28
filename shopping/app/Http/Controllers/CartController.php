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

    public function  gio_hang(Request $request)
    {
        $meta_desc = "Giỏ hàng của bạn";
        $meta_keywords = "Giỏ hàng";
        $meta_title = "Giỏ hàng";

    }
    public function save_cart(Request $request)
    {
        $data = $this->product->find($request->id);
        $session_id = substr(md5(microtime()),rand(0,26),5); //sinh mã id cho session, mỗi 1 product trong cart có 1 id session khác nhau
        $cart = Session::get('cart');
        if($cart){
            $is_avaible= 0;
            foreach($cart as $key => &$val){
                if($val['product_id'] == $request->id){
                    $is_avaible = 1;
                    $cart[$key] = array(
                        'session_id' => $val['session_id'],
                        'product_name' => $val['product_name'],
                        'product_id' => $val['product_id'],
                        'product_img' => $val['product_img'],
                        'product_count' => $val['product_count']+ $request->count,
                        'product_price' => $val['product_price'],
                    );
                    Session::put('cart',$cart);
                }
            }
            if($is_avaible == 0){
                $cart[] = array(
                    "session_id" => $session_id,
                    "product_id" => $data['id'],
                    "product_name" => $data['name'],
                    "product_price" => $data['price']*10/100, //em lấy giá chứ có giá giảm đâu bé
                    "product_img" => $data['feature_image_path'],
                    "product_count" => $request->count,
                );
                Session::put('cart',$cart);
            }            
             vvg7777777gg7exs
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
        print_r(true);
    }

}