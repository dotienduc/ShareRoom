<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function custom(Request $request)
    {
        dd($request->file('images'));
    }
}
