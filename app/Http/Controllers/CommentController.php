<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Responses\CommentResponse;

use App\Comment;

class CommentController extends Controller
{
    public function loadComment(Request $request)
    {
        return new CommentResponse($request->idPost);
    }

    public function comment(Request $request)
    {
        $comment = new Comment;
        $comment->name = $request->name;
        $comment->content = $request->content;
        $comment->room_id = $request->idPost;
        $comment->save();
        if($comment->id)
        {
            $message = ['success' => true, 'name' => $request->name];
            $response = response()->json($message, 200);
        }else{
            $message = ['error' => "Đã xảy ra lỗi!!"];
            $response = response()->json($message, 200);
        }
        return $response;
    }
}
