<?php
namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use App\City;
use App\District;
use App\Street;

class CategoryResponse implements Responsable 
{
    private $action = "";
    private $query;
    private $result;

    public function __construct($result = "", $action = "", $query = ""){
        $this->action = $action;
        $this->query = $query;
        $this->result = $result;
    }

    public function toResponse($request) {
        $action = $this->action;
        $cities = City::get();
        if($action != "") {
            $this->loadCategory($action, $this->query);
            return view('front_end.components.city_option')
                ->with('cities', $cities)
                ->with('result', $this->result)
                ->with('data', $this->loadCategory($action, $this->query));
        }else{
            return view('front_end.components.city_option')
                    ->with('cities', $cities)
                    ->with('result', $this->result);
        }
    }

    public function loadCategory($action, $query) {
        if($action == 'city') {
            return District::where('city_id', $query)->get();
        }else if($action == 'district') {
            return Street::where('district_id', $query)->get();
        }
    }
}