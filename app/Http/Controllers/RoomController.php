<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Responses\ProductResponse;

use App\Room;
use App\User;
use App\Category;
use Illuminate\Support\Facades\Auth;
use App\Favorite;

class RoomController extends Controller
{
    public function loadData(Request $request) {
        return new ProductResponse($request->search, $request->page,
                                     $request->sort, $request->check,
                                     $request->namePage );
    }

    public function rent($id = 0) 
    {
        if($id > 0){
            $rooms = User::find($id)->rooms;
            return view('front_end.rent')
                    ->with('rooms', $rooms)
                    ->with('totalPage', $this->countPage());
        }else{
            return back();
        }
    }

    public function roomDetail($id) {
        $room = Room::findOrFail($id);

        // dd(explode(",", $room->images));
        return view('front_end.room_detail')
                ->with('room', $room)
                ->with('categoryRoom', $room->category->category)
                ->with('ownerRoom', $room->user)
                ->with('roomRelation', $this->roomRelation($room->category_id, $room->id));
    }

    public function roomRelation($category, $roomCurrent)
    {
        $rooms = Room::where('category_id', $category)->get();
        $roomRelation = $rooms->filter(function($room) use ($roomCurrent){
            return $room->id != $roomCurrent;
        });
        return $roomRelation;
    }

    public function hienthiRoom()
    {
        return view('front_end.pages.room_register')
                ->with('categories', Category::get());
    }

    public function storeRoom(Request $request)
    {
        $nameImage = "";
        if($request->hasFile('image')){
            $nameImage = $this->getImages($request->file('image'));
        }
        $room = new Room;
        $room->category_id = $request->category;
        $room->city_id = $request->city;
        $room->district_id = $request->district;
        $room->street_id = $request->street;
        $room->title = $request->title;
        $room->address_detail = $request->address_detail;
        $room->acreage = $request->acreage;
        $room->user_id = Auth::user()->id;
        $room->floor = $request->floor;
        $room->tenant = $request->tenant;
        $room->content = $request->content;
        $room->price_per_month = $request->price_per_month;
        $room->bed = $request->bed;
        $room->bathroom = $request->bathroom;
        $room->parking = $request->parking;
        $room->amount = $request->amount;
        $room->joint_owner = $request->joint_owner;
        $room->year_built = $request->year_built;
        $room->water_price = $request->water_price;
        $room->images = $nameImage;
        $room->electricity_price = $request->electricity_price;
        $room->save();

        if($room->id)
        {
            $message = ['success' => true, 'url' => 'http://localhost/ShareRoom/public/rent/'.Auth::user()->id ];
        }else{
            $message = ['error' => "Đã xảy ra lỗi!!"];
        }
        return $message;
    }

    public function show($id)
    {
        $room = Room::findOrFail($id);
        return view('front_end.pages.room_edit')
                ->with('room', $room)
                ->with('city', $room->city)
                ->with('district', $room->district)
                ->with('street', $room->street)
                ->with('category', $room->category)
                ->with('categories', Category::get());
    }

    public function update(Request $request)
    {
        $nameImage ="";
        if($request->hasFile('image'))
        {
            $nameImage = $this->getImages($request->file('image'));
        }else{
            $nameImage = $request->imageHidden;
        }

        $room = Room::findOrFail($request->room);
        $room->category_id = $request->category;
        $room->city_id = $request->city;
        $room->district_id = $request->district;
        $room->street_id = $request->street;
        $room->title = $request->title;
        $room->address_detail = $request->address_detail;
        $room->acreage = $request->acreage;
        $room->user_id = Auth::user()->id;
        $room->floor = $request->floor;
        $room->tenant = $request->tenant;
        $room->content = $request->content;
        $room->price_per_month = $request->price_per_month;
        $room->bed = $request->bed;
        $room->bathroom = $request->bathroom;
        $room->parking = $request->parking;
        $room->amount = $request->amount;
        $room->joint_owner = $request->joint_owner;
        $room->year_built = $request->year_built;
        $room->water_price = $request->water_price;
        $room->images = $nameImage;
        $room->electricity_price = $request->electricity_price;
        $room->save();

        if($room->id)
        {
            $message = ['success' => true, 'url' => 'http://localhost/ShareRoom/public/'];
            $response = response()->json($message, 200);
        }else{
            $message = ['error' => "Đã xảy ra lỗi!!"];
            $response = response()->json($message, 200);
        }
        return $response;
    }

    public function destroy($id)
    {
        $room = Room::destroy($id);

        return back();
    }

    public function save($id)
    {
        $rooms = Favorite::where('user_id', Auth::user()->id)->get();
        if($rooms->count() > 0){
            if(Favorite::where([['user_id', Auth::user()->id], ['room_id', $id]])->count() == 0){
                $favorite = new Favorite;
                $favorite->user_id = Auth::user()->id;
                $favorite->room_id = $id;
                $favorite->save();
            }else{
                $room = Favorite::where([
                    'user_id' => Auth::user()->id,
                    'room_id' => $id
                ])->first();
                $room->delete();
            }
        }else{
            $favorite = new Favorite;
                $favorite->user_id = Auth::user()->id;
                $favorite->room_id = $id;
                $favorite->save();
        }

        return back();
    }

    public function favorite()
    {
        $roomsFavorite = [];
        if(Auth::check()){
            $roomsFavorite = Favorite::where('user_id', Auth::user()->id)->get();
        }
        $rooms = [];
        foreach ($roomsFavorite as $key => $r) {
            $rooms[$key] = $r->room;
        }
        return view('front_end.favorite')
                ->with('roomsFavorite', $rooms);
    }

    public function delete($id)
    {
        $room = Favorite::where([
            'user_id' => Auth::user()->id,
            'room_id' => $id
        ])->first();
        $room->delete();

        return back();
    }

    public function countPage()
    {
        $roomPerPage = 9;
        $totalRoom = Room::get()->count();

        $totalPage = (int) ceil($totalRoom/$roomPerPage);
        return $totalPage;
    }

    public function getImages($images)
    {
        $nameImages = [];
        foreach($images as $key => $image)
        {
            $nameImages[$key] = rand() . '.'.$image->getClientOriginalName();
            $image->move(public_path('front_end/images'), $nameImages[$key]);
        }
        return implode(",", $nameImages);
    }
}
