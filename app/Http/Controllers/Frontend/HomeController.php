<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMessageMail;
use App\Models\Blog;
use App\Models\ContactMessage;
use App\Models\Subscribe;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whatsappNoArr = ([
            '628111737031',
            '6281299414088',
            '6281275683180',
            '6281281944770',
            '6285255323280',
            '6285360926500',
            '6281343982215',
            '6282329777759',
            '6281343854525',
            '6281244923507',
            '6281807407308',
        ]);

        $randIndex = rand(0, 10);
        $randomNumber = $whatsappNoArr[$randIndex];

        $news = Blog::where('status_id', 4)
            ->orderBy('created_at', 'desc')
            ->take(2)
            ->get();

        return view('frontend.home', compact('news', 'randomNumber'));
    }

    public function privilegecard()
    {
        return view('frontend.privilegecard');
    }

    public function apartments()
    {
        return view('frontend.apartments');
    }

    public function hotel()
    {
        return view('frontend.hotel');
    }

    public function news()
    {
        $news = Blog::where('status_id', 4)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('frontend.news', compact('news'));
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }


    public function newsdetail($slug)
    {
        $new = Blog::where('slug', $slug)->first();
        //dd($new);
        if(empty($new)){
            return redirect()->back();
        }

        $news = Blog::where('status_id', 4)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $years = Blog::where('status_id', 4)
            ->orderBy('created_at', 'desc')
            ->get()
            ->groupBy(function ($val) {
                return Carbon::parse($val->created_at)->format('Y');
            });

        $data = [
            'article'       => $new,
            'news'          => $news,
            'years'         => $years
        ];

        return view('frontend.news-detail')->with($data);
    }

    public function partners(){
        return view('frontend.partners');
    }

    public function location(){
        return view('frontend.location');
    }

    public function contactUs(){

        return view('frontend.contact-us');
    }

    public function saveContactUs(Request $request){
        try{
            $validator = Validator::make($request->all(),[
                'name'          => 'required|max:50',
                'email'         => 'required|email|max:50',
                'phone'         => 'required|max:25',
                'case'          => 'required|max:200'
            ],[
                'name.required'         => 'Nama wajib diisi!',
                'email.required'        => 'Email wajib diisii!',
                'phone.required'        => 'Nomor Ponsel wajib diisii!',
                'case.required'         => 'Case wajib diisii!',
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            $now = Carbon::now('Asia/Jakarta');

            $newMessage = ContactMessage::create([
                'name'          => $request->input('name'),
                'email'         => $request->input('email'),
                'phone'         => $request->input('phone'),
                'address'       => $request->input('address') ?? null,
                'message'       => $request->input('case'),
                'created_at'    => $now->toDateTimeString(),
            ]);

            Mail::to("info@31sudirmansuites.com")->send(new ContactMessageMail($newMessage));
            Session::flash('success', 'Pesan Anda berhasil diterima!');

            return redirect()->route('frontend.contact_us');
        }
        catch (\Exception $ex){
            Log::error("HomeController - saveContactUs error: ". $ex);
        }
    }

    public function saveSubscribe(Request $request){

        $now = Carbon::now('Asia/Jakarta');

        $newSubscribe = Subscribe::create([
            'email'         => $request->input('email'),
            'created_at'    => $now->toDateTimeString(),
        ]);

        return Response::json(array('success' => 'VALID'));
    }

    public function downloadCatalogue(){
        return response()->download(public_path('marc-catalogue.pdf'));
    }
}
