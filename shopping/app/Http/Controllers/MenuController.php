<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\MenuRecusive;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MenuController extends Controller
{
	//Class khi new 1 MenuController khi nó trỏ đến phương thức index hoặc create thì đã chứa biến menuRecusive của class MenuRecusive
	//$this->menuRecusive có thể truy cập đc tất cả các biến trong class MenuRecusive
	private $menuRecusive;
	private $menu; //Là instant của class Menu
	// 
	public function __construct(MenuRecusive $menuRecusive, Menu $menu)
	{
		$this->menuRecusive = $menuRecusive;
		$this->menu = $menu;
	}

    public function index()
    {
    	$menus = $this->menu->where('deleted_at','=',NULL)->get();

    	return view('admin.menus.index', compact('menus'));
    }

    public function create()
    {
    	$optionSelect = $this->menuRecusive->menuRecusiveAdd();
    	return view('admin.menus.add', compact('optionSelect'));
    }

    public function store(Request $request)
    {
    	$this->menu->create([
    		'name' => $request->name,
    		'parent_id' => $request->parent_id,
    		'slug' => Str::slug($request->name)
    	]);
    	return redirect()->route('menus.index');
    }

    public function edit($id, Request $request)
    {
    	$menuFollowIdEdit = $this->menu->find($id);
    	$optionSelect = $this->menuRecusive->menuRecusiveEdit($menuFollowIdEdit->parent_id);
    	return view('admin.menus.edit', compact('optionSelect', 'menuFollowIdEdit'));
    }

    public function update($id, Request $request)
    {
    	$this->menu->find($id)->update([
    		'name' => $request->name,
    		'parent_id' => $request->parent_id,
    		'slug' => Str::slug($request->name)
    	]);
    	return redirect()->route('menus.index');
    }

    public function delete($id)
    {
    	$this->menu->find($id)->delete();
    	return redirect()->route('menus.index');
    }
}
