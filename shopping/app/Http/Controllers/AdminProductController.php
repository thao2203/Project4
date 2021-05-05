<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\Recusive;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
//use App\Http\Controllers\AdminProductController;

class AdminProductController extends Controller
{
	private $category;
	private $product;
	public function __construct(Category $category, Product $product)
	{
		$this->category = $category;
		$this->product = $product;
		$this->htmlSelect = '';
	}
    public function index()
    {
		$products = $this->product->get();
    	return view('admin.product.index', compact('products'));
    }

    public function create()
    {
    	$htmlOption = $this->getCategory($parentId = '');
    	return view('admin.product.add', compact('htmlOption'));
    }
	public function store(Request $request)
    {
		if (!$request->hasFile('feature_image_path')) {
			return "Mời chọn file cần upload";
		}
		// Nếu có thì thục hiện lưu trữ file vào public/images
		$image = $request->file('feature_image_path');
		$storedPath = $image->move('images', $image->getClientOriginalName());

    	$this->product->create([
    		'name' => $request->name,
			'feature_image_path'=>$storedPath->getFilename(),
    		'category_id' => $request->category_id,
			'price' => $request->price,
			'user_id'=> 1,
			'content' => $request->content,
    	]);

    	return redirect()->route('product.index');
    }

	
    public function getCategory($parentId)
    {
   		$data = $this->category->all();//Lấy ra tất cả các data
    	$recusive = new Recusive($data);
    	$htmlOption = $recusive->categoryRecusiveUpdate($parentId);
    	return $htmlOption;
    }

	public function edit($id)
    {
    	$product = $this->product->find($id); //Lấy danh mục theo id
 		$htmlOption = $this->getCategory($product->category_id);
    	return view('admin.product.edit', compact('product', 'htmlOption'));
    }

    public function update($id, Request $request)
    {
		if (!$request->hasFile('feature_image_path')) {
			return "Mời chọn file cần upload";
		}
		$image = $request->file('feature_image_path');
		$storedPath = $image->move('images', $image->getClientOriginalName());
    	$this->product->find($id)->update([
    		'name' => $request->name,
    		'category_id' => $request->category_id,
    		'slug' => Str::slug($request->name),
			'content' => $request->content,
			'user_id' => 1,
			'feature_image_path'=> $storedPath->getFilename(),
    	]);
    	return redirect()->route('product.index');
    }

    public function delete($id)
    {  	
    	$this->product->find($id)->delete();
    	return redirect()->route('product.index');
    }
}
