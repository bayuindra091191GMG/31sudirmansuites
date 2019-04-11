<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\Subscribe;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
        return view('frontend.home');
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
        return view('frontend.news');
    }

    public function newsdetail()
    {
        return view('frontend.news-detail');
    }

    public function ourway()
    {
        return view('frontend.ourway');
    }

    public function ecosystem()
    {
        return view('frontend.ecosystem');
    }

    public function credentials()
    {
        return view('frontend.credentials');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function district()
    {
        return view('frontend.district');
    }

    public function masterplan()
    {
        return view('frontend.masterplan');
    }

    public function partners(){
        return view('frontend.partners');
    }

    public function introduction(){
        return view('frontend.introduction');
    }

    public function location(){
        return view('frontend.location');
    }

    public function developer(){
        return view('frontend.developer');
    }

    public function planMaster(){
        return view('frontend.plan-master');
    }

    public function planFloor(){
        return view('frontend.plan-floor');
    }

    public function planUnit(){
        return view('frontend.plan-unit');
    }

    public function features(){
        return view('frontend.features');
    }

    public function contactUs(){
        return view('frontend.contact-us');
    }

    public function saveContactUs(Request $request){
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

        Session::flash('success', 'Pesan Anda berhasil diterima!');

        return redirect()->route('frontend.contact_us');
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
