<?php


namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function example(){
        return view('frontend.search-result');
    }

    public function search(Request $request){
        $keyword = $request->keyword;

        if(empty($keyword)){
            return redirect()->back();
        }

        $results = Blog::where('status_id', 4)
            ->where(function($q) use ($keyword){
                $q->where('title', 'LIKE', '%'. $keyword. '%')
                    ->orWhere('subtitle', 'LIKE', '%'. $keyword. '%')
                    ->orWhere('description', 'LIKE', '%'. $keyword. '%');
            })
            ->get();

        $data = [
            'keyword'   => $keyword,
            'results'   => $results
        ];

        return view('frontend.search-result')->with($data);
    }
}