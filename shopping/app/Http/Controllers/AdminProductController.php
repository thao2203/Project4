<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\Recusive;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Product;
use Illuminate\Support\Str;
//use App\Http\Controllers\AdminProductController;

class AdminProductController extends Controller
{
	private $category;
	private $supplier;
	private $product;
	public function __construct(Category $category, Product $product, Supplier $supplier)
	{
		$this->category = $category;
		$this->product = $product;
		$this->supplier = $supplier;
		$this->htmlSelect = '';
		$this->htmlSupplier = '';
	}
    public function index()
    {
		$products = $this->product->orderBy('created_at', 'desc')->get();
    	return view('admin.product.index', compact('products'));
    }

    public function create()
    {
    	$htmlOption = $this->getCategory($parentId = '');
		$htmlSupplier = $this->getSupplier($supplierid = '');
		
    	return view('admin.product.add', compact('htmlOption','htmlSupplier'));
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
			'content'=>$request->content,
			'supplier_id'=>$request->supplier_id,
			'quantity'=>$request->quantity,
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

	public function getSupplier($supplierid)
    {
   		$data = $this->supplier->all();//Lấy ra tất cả các data
		   
    	$recusive = new Recusive($data);
    	$htmlOptionSupplier = $recusive->categoryRecusiveSupplier($supplierid);
    	return $htmlOptionSupplier;
    }

	public function edit($id)
    {
    	$product = $this->product->find($id); //Lấy danh mục theo id
 		$htmlOption = $this->getCategory($product->category_id);
		$htmlSupplier = $this->getSupplier($product->supplier_id);
		
    	return view('admin.product.edit', compact('product', 'htmlOption','htmlSupplier'));
    }

    public function update($id, Request $request)
    {
		if (!$request->hasFile('feature_image_path')) {
			$this->product->find($id)->update([
				'name' => $request->name,
				'category_id' => $request->category_id,
				'supplier_id'=>$request->supplier_id,
				'quantity'=>$request->quantity,
				'slug' => Str::slug($request->name),
				'content' => $request->content,
				'user_id' => 1,
			
				'price' => $request->price,
			]);
			return redirect()->route('product.index');
		}
		$image = $request->file('feature_image_path');
		$storedPath = $image->move('images', $image->getClientOriginalName());
    	$this->product->find($id)->update([
    		'name' => $request->name,
    		'category_id' => $request->category_id,
			'supplier_id'=>$request->supplier_id,
			'quantity'=>$request->quantity,
    		'slug' => Str::slug($request->name),
			'content' => $request->content,
			'user_id' => 1,
			'feature_image_path'=> $storedPath->getFilename(),
			'price' => $request->price,
    	]);
    	return redirect()->route('product.index');
    }

    public function delete($id)
    {  	
    	$this->product->find($id)->delete();
    	return redirect()->route('product.index');
    }
}
