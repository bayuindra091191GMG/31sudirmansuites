<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
//        dd(Carbon::now('Asia/Jakarta')->toDateTimeString());
        $data = ContactMessage::create([
            'name'          => $request->input('name'),
            'email'         => $request->input('email'),
            'subject'         => $request->input('subject'),
            'message'       => $request->input('message'),
            'created_at'    => Carbon::now('Asia/Jakarta')->toDateTimeString()
        ]);

        Session::flash('success', 'Thank you for Contacting us!');
        return redirect()->route('contact_us');
    }

    public function downloadCatalogue(){
        return response()->download(public_path('marc-catalogue.pdf'));
    }
}
