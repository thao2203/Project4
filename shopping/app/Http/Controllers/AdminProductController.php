<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\Recusive;
use App\Models\Category;
//use App\Http\Controllers\AdminProductController;

class AdminProductController extends Controller
{
	private $category;
	public function __construct(Category $category)
	{
		$this->category = $category;
	}
    public function index()
    {
    	return view('admin.product.index');
    }

    public function create()
    {
    	$htmlOption = $this->getCategory($parentId = '');
    	return view('admin.product.add', compact('htmlOption'));
    }

    public function getCategory($parentId)
    {
   		$data = $this->category->all();//Lấy ra tất cả các data
    	$recusive = new Recusive($data);
    	$htmlOption = $recusive->categoryRecusive($parentId);
    	return $htmlOption;
    }
}
