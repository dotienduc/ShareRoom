<?php
namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use App\Room;
use App\Favorite;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProductResponse implements Responsable
{
    private $search;
    private $page;
    private $roomPerPage = 9;
    private $sort;
    private $check;

    public function __construct($search, $page, $sort, $check){
        $this->search = $search;
        $this->page = $page;
        $this->sort = $sort;
        $this->check = $check;
    }

    public function toResponse($request)
    {
        $rooms = "";
        $roomsFavorite = [];
        if(Auth::check()){
            $idUser = Auth::user()->id;
            if($this->search != null) {
                $type = $this->search['type'];
                $id = $this->search['id'];
                if($type == "city") {
                    $rooms = User::find($idUser)->rooms()->where('city_id', $id)->offset($this->fromLoad($this->page))->
                    limit($this->roomPerPage)->orderBy('price_per_month', $this->sort)->get();
                }elseif($type == "district"){
                    $rooms = User::find($idUser)->rooms()->where('district_id', $id)->offset($this->fromLoad($this->page))
                    ->limit($this->roomPerPage)->orderBy('price_per_month', $this->sort)->get();
                }else{
                    $rooms = User::find($idUser)->rooms()->where('street_id', $id)->offset($this->fromLoad($this->page))
                    ->limit($this->roomPerPage)->orderBy('price_per_month', $this->sort)->get();
                }
            }else{
                $rooms = User::find($idUser)->rooms()->offset($this->fromLoad($this->page))
                        ->limit($this->roomPerPage)->orderBy('price_per_month', $this->sort)->get();
            }
            $roomsFavorite = Favorite::where('user_id', Auth::user()->id)->get();
        }else{
            if($this->search != null) {
                $type = $this->search['type'];
                $id = $this->search['id'];
                if($type == "city") {
                    $rooms = Room::where('city_id', $id)->offset($this->fromLoad($this->page))->
                    limit($this->roomPerPage)->orderBy('price_per_month', $this->sort)->get();
                }elseif($type == "district"){
                    $rooms = Room::where('district_id', $id)->offset($this->fromLoad($this->page))
                    ->limit($this->roomPerPage)->orderBy('price_per_month', $this->sort)->get();
                }else{
                    $rooms = Room::where('street_id', $id)->offset($this->fromLoad($this->page))
                    ->limit($this->roomPerPage)->orderBy('price_per_month', $this->sort)->get();
                }
            }else{
                $rooms = Room::offset($this->fromLoad($this->page))
                        ->limit($this->roomPerPage)->orderBy('price_per_month', $this->sort)->get();
            }
        }
        return view('front_end.components.product')
                    ->with('rooms', $rooms)
                    ->with('roomsFavorite', $roomsFavorite)
                    ->with('checkId', $this->check);
    }

    public function fromLoad($page)
    {
        return ($this->page - 1)*$this->roomPerPage;
    }

}