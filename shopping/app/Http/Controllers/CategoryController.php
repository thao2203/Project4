<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Components\Recusive;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


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
    	$categories = $this->category;
    	$categories = DB::table('categories')->simplePaginate(5);
    	return view( 'category.index', compact('categories'));
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

    public function edit($id)
    {
    	
    }

    public function delete($id)
    {
    	
    }
}
