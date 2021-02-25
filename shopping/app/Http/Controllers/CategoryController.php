<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Components\Recusive;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
	private $category;

	public function __construct(Category $category)
	{
		//Gán biến category = insitant của 1 'Category $category' để sd các phương thức ở trong categoryModel
		$this->category = $category;
	}
    public function create()
    {

    	$data = $this->category->all();//Lấy ra tất cả các data
    	$recusive = new Recusive($data);
    	$htmlOption = $recusive->categoryRecusive();
    	return view('category.add', compact('htmlOption'));
    }

    public function index()
    {
    	return view('category.index');
    }

    public function store(Request $request)
    {
    	$this->category->create([
    		'name' => $request->name,
    		'parent_id' => $request->parent_id,
    		'slug' => Str::slug($request->name)
    	]);

    	return redirect()->route('categories.index');
    }
}
