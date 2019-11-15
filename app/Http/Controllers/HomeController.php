<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front_end.home')
                ->with('totalPage', $this->countPage());
    }

    public function countPage()
    {
        $roomPerPage = 9;
        $totalRoom = Room::get()->count();

        $totalPage = (int) ceil($totalRoom/$roomPerPage);
        return $totalPage;
    }
}
