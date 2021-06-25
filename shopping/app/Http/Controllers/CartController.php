<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\MenuRecusive;
use App\Models\Product;
use App\Models\Order;
use App\Models\Category;
use App\Models\Order_Detail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Cookie;
class CartController extends Controller
{
    public function __construct(Product $product, Order $order, Order_Detail $orderdetail)
    {
        $this->product = $product;
        // tạo model orderdetail
        $this->orderdetail = $orderdetail;
        $this->order = $order;
    }

    public function chiTietGioHang()
    {
        $datas = Category::where('parent_id', 0)->get(); 
        return view('client.cart', compact('datas'));
    }
    public function thanhToan()
    {
        $datas = Category::where('parent_id', 0)->get(); 
        $orders = Order::get();
        return view('client.checkOut', compact('datas','orders'));
    }

    
    public function add_cart_ajax(Request $request)
    {
        $data = $request -> all();
        $session_id = substr(md5(microtime()),rand(0,26),5); //sinh mã id cho session, mỗi 1 product trong cart có 1 id session khác nhau
        $cart = Session::get('cart'); //Tạo sess ktra xem có tồn tại ses hay chưa
        if($cart==true){
            $is_avaible = 0;//có tồn tại hay chưa
            //nếu tồn tại r
            foreach($cart as $key => $val){
                //nếu giá trị id bằng vs data của cart dã có chưa
                if($val['product_id']==$data['product_id']){
                    $is_avaible++;
                    //nếu có r tăng 1
                }
            }
            if($is_avaible == 0)//đã xong vòng lặp vận =0, ko có cart trùng
            {
                //tạo ra 1 cart mới
                $cart[] = array(
                    'session_id' => $session_id,
                    'product_name' => $data['cart_product_name'],
                    'product_id' => $data['cart_product_id'],
                    'product_img' => $data['cart_product_img'],
                    'product_count' => $data['cart_product_qty'],
                    'product_price' => $data['cart_product_price']
                );
                Session::put('cart', $cart);
            }
        }
        else{
            //Chưa tồn tại
            $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_img' => $data['cart_product_img'],
                'product_count' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price']
            );
        }
        Session::put('cart', $cart);
        //Mỗi lần ckick thì mặc định lấy all ra r sau đó thêm và foreach sẽ lấy ra
        Session::save();
        print_r(true);
    }

    public function save_cart(Request $request)
    {
        $data = $this->product->find($request->id);
        $session_id = substr(md5(microtime()),rand(0,26),5); //sinh mã id cho session, mỗi 1 product trong cart có 1 id session khác nhau
        $cart = Session::get('cart');
        if($cart){
            $is_avaible= 0;
            foreach($cart as $key => $val){
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
        print_r(true);
    }
    public function save_cart_home(Request $request)
    {
        $data = $this->product->find($request->id);
        $session_id = substr(md5(microtime()),rand(0,26),5); //sinh mã id cho session, mỗi 1 product trong cart có 1 id session khác nhau
        $cart = Session::get('cart');
        if($cart){
            $is_avaible= 0;
            foreach($cart as $key => $val){
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
        print_r(true);
    }

    public function delete_product($session_id)
    {
        $cart = Session::get('cart');
       
        if($cart==true){
            foreach($cart as $key => $val){
                if($val['session_id']==$session_id){
                    unset($cart[$key]);
                }
            }
            Session::put('cart',$cart);
            return redirect()->back()->with('message','Xóa sản phẩm thành công!!!');
        } else{
            return redirect()->back()->with('message','Xóa sản phẩm thất bại');
        }
    } 

    public function update_cart(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $cart = Session::get('cart');
        if($cart==true){
            foreach($data['cart_qty'] as $keys => $qty){
                foreach($cart as $session => $val){
                    if($val['session_id']==  $keys){
                        $cart[$session]['product_count'] = $qty;
                    }
                }
            }
            Session::put('cart',$cart);
            return redirect()->back()->with('message','Cập nhật số lượng thành công!!!');
        } 
        else{
            return redirect()->back()->with('message','Cập nhật số lượng thất bại!!!');
        }
    }

    public function delete_all_product(){
        $cart = Session::get('cart');
        if($cart == true){
            // Session::destroy(); //Xóa hết sạch các session
            Session::forget('cart');
            return redirect()->back()->with('message','Xoá hết giỏ thành công!!!');
        }
    }
    public function check_coupon(Request $request)
    {
        $data = $request->all();
        print_r ($data);
    }

    public function save_thanhToan(Request $request)
    {
       
        $data = Session::get('cart');
        
        if ($data) {
            $order = new Order();
            $order->name = $request->name;           
            $order->email = $request->email;
            $order->phone = $request->phone;
            $order->note = $request->note;
            $order->address = $request->address;
            $order->status = 0;
            $order->total = 0;
            $order->guild_id=Cookie::get('id');
            $order->save();

            $totalMoney = 0;
            foreach ($data as $item) {
                
                $this->orderdetail->insert([
                    'orderID' => $order->id,
                    'productID' => $item['product_id'],
                    'quantity' => $item['product_count'],
                    'img_pro' => $item['product_img'],
                    'name_pro' => $item['product_name'],
                    'sumPrice_pro' => $item['product_price']*90/100*$item['product_count']
                ]);
               
                $totalMoney = $totalMoney + ((int)$item['product_price']*90/100 * (int)$item['product_count']);
            }
            $this->order->find($order->id)->update([
                'total' => $totalMoney
            ]);
            Session::forget('cart');
            return redirect()->back()->with('message','Thêm đơn hàng thành công!!!');
        } 
        else {
            return redirect()->back()->with('message','Thêm đơn hàng thất bại!!!');
        }
    }
}