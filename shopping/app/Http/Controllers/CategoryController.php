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

    	$htmlOption = $this->getCategory($parentId = '');
    	return view('admin.category.add', compact('htmlOption'));
    }

    public function index()
    {
    	$categories = $this->category;
    	$categories = DB::table('categories')->where('deleted_at','=',NULL)->latest()->simplePaginate(5);
    	return view( 'admin.category.index', compact('categories'));	
    		
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

    public function getCategory($parentId)
    {
   		$data = $this->category->all();//Lấy ra tất cả các data
    	$recusive = new Recusive($data);
    	$htmlOption = $recusive->categoryRecusive($parentId);
    	return $htmlOption;
    }

    public function edit($id)
    {
    	$category = $this->category->find($id); //Lấy danh mục theo id
 		$htmlOption = $this->getCategory($category->parent_id);
    	return view('admin.category.edit', compact('category', 'htmlOption'));
    }

    public function update($id, Request $request)
    {
    	$this->category->find($id)->update([
    		'name' => $request->name,
    		'parent_id' => $request->parent_id,
    		'slug' => Str::slug($request->name)
    	]);
    	return redirect()->route('categories.index');
    }

    public function delete($id)
    {  	
    	$this->category->find($id)->delete();
    	return redirect()->route('categories.index');
    }
}
