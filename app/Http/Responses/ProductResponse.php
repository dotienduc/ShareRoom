<?php
namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use App\Room;
use App\Favorite;
use Illuminate\Support\Facades\Auth;

class ProductResponse implements Responsable
{
    private $search;
    private $page;

    public function __construct($search, $page){
        $this->search = $search;
        $this->page = $page;
    }

    public function toResponse($request)
    {
        $rooms = "";
        if($this->search != null) {
            $type = $this->search['type'];
            $id = $this->search['id'];
            if($type == "city") {
                $rooms = Room::where('city_id', $id)->get();
            }elseif($type == "district"){
                $rooms = Room::where('district_id', $id)->get();
            }else{
                $rooms = Room::where('street_id', $id)->get();
            }
        }else{
            $rooms = Room::get();
        }
        $roomsFavorite = [];
        if(Auth::check()){
            $roomsFavorite = Favorite::where('user_id', Auth::user()->id)->get();
        }
        return view('front_end.components.product')
                    ->with('rooms', $rooms)
                    ->with('roomsFavorite', $roomsFavorite);
    }

}