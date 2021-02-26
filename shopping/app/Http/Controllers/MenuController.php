<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MenuController;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
    	return view('menus.index');
    }

    public function create()
    {
    	return view('menus.add');
    }
}
