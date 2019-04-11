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
use Intervention\Image\Facades\Image;
use Webpatser\Uuid\Uuid;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        return view('admin.blog.index');
    }

    public function getIndex(Request $request){

        $blogs = Blog::join('statuses', 'statuses.id', '=', 'blogs.status_id')
            ->select('blogs.*', 'statuses.description');

        error_log($blogs->count());

        return DataTables::of($blogs)
            ->setTransformer(new BlogTransformer)
            ->make(true);
    }

    public function show($id){
        $blog = Blog::find($id);
        return view('admin.blog.show', compact('blog'));
    }

    public function create(){
        return view('admin.blog.create');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'title'              => 'required|max:100',
            'content'            => 'required'
        ],[
            'title.required'        => 'Judul artikel wajib diisi!',
            'content.required'      => 'Konten berita wajib diisii!'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if($request->file('featured-image') == null){
            return redirect()->back()->withErrors('Gambar utama wajib upload!', 'default')->withInput($request->all());
        }

        $dateTimeNow = Carbon::now('Asia/Jakarta');

        $user = Auth::guard('admin')->user();
        //dd($user);
        $newBlog = Blog::create([
            'title'         => $request->input('title'),
            'subtitle'      => $request->input('subtitle') ?? null,
            'description'   => $request->input('content'),
            'read_count'    => 0,
            'status_id'     => 4,
            'created_at'    => $dateTimeNow->toDateTimeString(),
            'created_by'    => $user->id,
        ]);

        // Save featured image
        $folderPath = 'uploads/blogs';
        $img = Image::make($request->file('featured-image'));
        $ext = explode('/', $img->mime(), 2);
        $fileName = 'FEATURED_'. $newBlog->id. '_'. $dateTimeNow->format('Ymdhms'). '.'. $ext[1];

        $path = $request->file('featured-image')->storeAs(
            $folderPath, $fileName, 'public_uploads'
        );

        $newBlog->img_path = $folderPath. '/'. $fileName;
        $newBlog->save();

        Session::flash('message', 'Berhasil buat Artikel baru!');

        return redirect()->route('admin.blog.show', ['id' => $newBlog->id]);
    }

    public function edit($id){
        $blog = Blog::find($id);
        if(empty($blog)){
            return redirect()->back();
        }
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id){

        $validator = Validator::make($request->all(),[
            'title'              => 'required|max:100',
            'content'            => 'required'
        ],[
            'title.required'        => 'Judul artikel wajib diisi!',
            'content.required'      => 'Konten berita wajib diisii!'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        //dd($id);

//        if($request->file('featured-image') == null){
//            return redirect()->back()->withErrors('Gambar utama wajib upload!', 'default')->withInput($request->all());
//        }

        $dateTimeNow = Carbon::now('Asia/Jakarta');

        $user = Auth::guard('admin')->user();
        //dd($user);

        $blog = Blog::find($id);
        if(empty($blog)){
            return redirect()->back();
        }

        $blog->title = $request->input('title');
        $blog->subtitle = $request->input('subtitle');
        $blog->description = $request->input('content');
        $blog->updated_by = $user->id;
        $blog->updated_at = $dateTimeNow->toDateTimeString();

        if($request->file('featured-image') != null){
            // Delete old featured image
            $deletedPath = public_path($blog->img_path);
            if(file_exists($deletedPath)) unlink($deletedPath);

            // Save featured image
            $folderPath = 'uploads/blogs';
            $img = Image::make($request->file('featured-image'));
            $ext = explode('/', $img->mime(), 2);
            $fileName = 'FEATURED_'. $id. '_'. $dateTimeNow->format('Ymdhms'). '.'. $ext[1];

            $path = $request->file('featured-image')->storeAs(
                $folderPath, $fileName, 'public_uploads'
            );

            $blog->img_path = $folderPath. '/'. $fileName;
        }

        $blog->save();

        Session::flash('message', 'Berhasil ubah Artikel!');

        return redirect()->route('admin.blog.show', ['id' => $id]);
    }

    public function destroy(Request $request){
        $blogId = $request->input('deleted-blog-id');
        $blog = Blog::find($blogId);
        if(empty($blog)){
            return redirect()->back();
        }

        if(!empty($blog->img_path)){
            $deletedPath = public_path($blog->img_path);
            if(file_exists($deletedPath)) unlink($deletedPath);
        }

        $blog->delete();

        Session::flash('message', 'Berhasil Hapus Artikel!');
        return redirect()->route('admin.blog.index');
    }

    public function unpublishBlog($id){
        $blog = Blog::find($id);
        if(empty($blog)){
            return redirect()->back();
        }

        $blog->status_id = 3;
        $blog->save();

        Session::flash('message', 'Berhasil Tutup Artikel!');
        return redirect()->back();
    }

    public function publishBlog($id){
        $blog = Blog::find($id);
        if(empty($blog)){
            return redirect()->back();
        }

        $blog->status_id = 4;
        $blog->save();

        Session::flash('message', 'Berhasil Buka Artikel!');
        return redirect()->back();
    }
}