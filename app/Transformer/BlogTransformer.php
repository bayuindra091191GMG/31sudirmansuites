<?php


namespace App\Transformer;


use App\Models\Blog;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class BlogTransformer extends TransformerAbstract
{
    public function transform(Blog $blog){
        $date = Carbon::parse($blog->created_at)->toIso8601String();

        $action = "<a class='btn btn-xs btn-info' href='admin-users/edit/".$user->id."' data-toggle='tooltip' data-placement='top'><i class='icon-mode_edit'></i></a>";
        $action .= "<a class='delete-modal btn btn-xs btn-danger' data-id='". $user->id ."' ><i class='icon-delete'></i></a>";

        return[
            'created_at'    => $date,
            'title'         => $blog->title,
            'category'      => $blog->category->name,
            'read'          => $blog->read_count,
            'status'        => $blog->status->description,
            'action'        => $action
        ];
    }
}