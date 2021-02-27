<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MenuController;
use App\Components\MenuRecusive;
use App\Models\Menu;

class MenuController extends Controller
{
	//Class khi new 1 MenuController khi nó trỏ đến phương thức index hoặc create thì đã chứa biến menuRecusive của class MenuRecusive
	//$this->menuRecusive có thể truy cập đc tất cả các biến trong class MenuRecusive
	private $menuRecusive;
	// 
	public function __construct(MenuRecusive $menuRecusive)
	{
		$this->menuRecusive = $menuRecusive;
	}

    public function index()
    {
    	return view('menus.index');
    }

    public function create()
    {
    	$optionSelect = $this->menuRecusive->menuRecusiveAdd();
    	return view('menus.add', compact('optionSelect'));
    }
}
