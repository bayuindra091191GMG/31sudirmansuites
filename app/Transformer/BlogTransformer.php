<?php


namespace App\Transformer;


use App\Models\Blog;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class BlogTransformer extends TransformerAbstract
{
    public function transform(Blog $blog){
        $date = Carbon::parse($blog->created_at)->toIso8601String();

        $urlShowBlog = route('admin.blog.show', ['id' => $blog->id]);
        $action = "<a class='btn btn-xs btn-info' href='". $urlShowBlog."' data-toggle='tooltip' data-placement='top'><i class='icon-document-text'></i></a>";
        //$action .= "<a class='delete-modal btn btn-xs btn-danger' data-id='". $user->id ."' ><i class='icon-delete'></i></a>";

        return[
            'created_at'    => $date,
            'title'         => $blog->title,
            'category'      => $blog->category->name ?? "-",
            'read_count'    => $blog->read_count,
            'status'        => $blog->status->description,
            'action'        => $action
        ];
    }
}