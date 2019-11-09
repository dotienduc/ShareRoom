<?php
namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use App\Room;

class CommentResponse implements Responsable 
{
    private $room;
    public function __construct($room){
        $this->room = $room;
    }

    public function toResponse($request)
    {
        $comments = Room::find($this->room)->comments()->orderBy('id', 'desc')->get();
        return view('front_end.components.comment')
                ->with('comments', $comments);
    }
}