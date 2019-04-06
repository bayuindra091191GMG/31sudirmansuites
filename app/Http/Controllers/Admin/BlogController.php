<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Transformer\BlogTransformer;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    public function index(){
        return view('admin.blog.index');
    }

    public function getIndex(Request $request){
        $blogs = Blog::join('categories', 'categories.id', '=', 'blogs.category_id')
            ->join('statuses', 'statuses.id', '=', 'blogs.status_id')
            ->select('blogs.*', 'categories.name', 'statuses.description');

        return DataTables::of($blogs)
            ->setTransformer(new BlogTransformer)
            ->make(true);
    }
}