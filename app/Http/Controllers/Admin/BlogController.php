<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Transformer\BlogTransformer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Webpatser\Uuid\Uuid;
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

    public function create(){
        return view('admin.blog.create');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'title'              => 'required',
            'content'            => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $dateTimeNow = Carbon::now('Asia/Jakarta');

        $user = Auth::user();
        $newBlog = Blog::create([
            'title'         => $request->input('title'),
            'img_path'      => $request->input('img'),
            'description'   => $request->input('content'),
            'read_count'    => 0,
            'status_id'     => 3,
            'created_at'    => $dateTimeNow->toDateTimeString(),
            'created_by'    => $user->id,
        ]);

        Session::flash('message', 'Berhasil buat news baru!');

        return redirect()->route('admin-blog-list');
    }
}