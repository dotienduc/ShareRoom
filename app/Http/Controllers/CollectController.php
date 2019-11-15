<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Responses\CategoryResponse;

class CollectController extends Controller
{
    public function loadCity(Request $request) {
        return new CategoryResponse($request->result, "", "", $request->city_id);
    }

    public function loadCategory(Request $request) {
        return new CategoryResponse($request->result, $request->action, $request->value);
    }
}
