<?php

namespace App\Http\Controllers\Admin;

use App\Excel\SubscribeExport;
use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use App\Transformer\SubscribeTransformer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SubscribeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getIndex(Request $request){
        $users = Subscribe::query();
        return DataTables::of($users)
            ->setTransformer(new SubscribeTransformer)
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.subscribe.index');
    }

    public function download(){
        return Excel::download(new SubscribeExport(), 'subscribers.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
//        try{
//            $now = Carbon::now('Asia/Jakarta');
//            $email = $request->input('email');
//            $name = $request->input('name');
//
//            if(!empty($email) && !empty($name)){
//                $newSubscribe = Subscribe::create([
//                    'email'    => $email,
//                    'name'      => $name,
//                    'created_at'         => $now->toDateTimeString()
//                ]);
//            }
//
//            return Response::json(array('success' => 'VALID'));
//        }
//        catch(\Exception $ex){
//            return Response::json(array('errors' => 'INVALID' . $request->input('id')));
//        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $deletedSubscribeId = $request->input('deleted_subscribe_id');

        $subscribe = Subscribe::find($deletedSubscribeId);
        if(empty($subscribe)){
            return redirect()->back();
        }

        $subscribe->delete();

        Session::flash('success', 'Berhasil Hapus Subscriber!');
        return redirect()->route('admin.subscribes.index');
    }
}
