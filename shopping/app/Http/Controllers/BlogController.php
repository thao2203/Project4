<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogController extends Controller
{
	//Class khi new 1 MenuController khi nó trỏ đến phương thức index hoặc create thì đã chứa biến menuRecusive của class MenuRecusive
	//$this->menuRecusive có thể truy cập đc tất cả các biến trong class MenuRecusive

	private $blog; //Là instant của class Menu
	// 
	public function __construct( Blog $blog)
	{
		$this->blog = $blog;
	}

    public function index()
    {
    	$blogs = $this->blog->orderBy('created_at', 'desc')->get();
    	return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
    	//$optionSelect = $this->menuRecusive->menuRecusiveAdd();
    	return view('admin.blogs.add');
    }

    public function store(Request $request)
    {
		if (!$request->hasFile('avt')) {
			return "Mời chọn file cần upload";
		}
		// Nếu có thì thục hiện lưu trữ file vào public/images
		$image = $request->file('avt');
		$storedPath = $image->move('images', $image->getClientOriginalName());
	
    	$this->blog->create([
    		'name' => $request->name,
			'content'=>$request->content,
    		'userID' => 1,
			'avt' =>$storedPath->getFilename(),
			'view'=>$request->view
    	]);
    	return redirect()->route('blogs.index');
    }
	
    public function edit($id, Request $request)
    {
    	$blog = $this->blog->find($id);
    	// $optionSelect = $this->menuRecusive->menuRecusiveEdit($menuFollowIdEdit->parent_id);
    	return view('admin.blogs.edit', compact('blog'));
    }

    public function update($id, Request $request)
    {
		if (!$request->hasFile('avt')) {
			return "Mời chọn file cần upload";
		}
    	// Nếu có thì thục hiện lưu trữ file vào public/images
		$image = $request->file('avt');
		$storedPath = $image->move('images', $image->getClientOriginalName());
	
    	$this->blog->find($id)->update([
    		'name' => $request->name,
			'content'=>$request->content,
    		'userID' => 1,
			'avt' =>$storedPath->getFilename(),
			'view'=>$request->view
    	]);
    	return redirect()->route('blogs.index');
    }

    public function delete($id)
    {
    	$this->blog->find($id)->delete();
    	return redirect()->route('blogs.index');
    }
}
