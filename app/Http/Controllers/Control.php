<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User;

class Control extends Controller{
    
    public function welcome(){
        return view('welcome');
    }

    public function test(){
        return view('test');
    }

    public function submit(){
        $_POST['id'];
    }

    public function map(){
        $puntos = DB::select('select ip from testresults');
        $locations = array();
        foreach ($puntos as $punto){
            $ip = file_get_contents('http://v4v6.ipv6-test.com/api/myip.php');
            $latlong = file_get_contents('https://ipapi.co/'.$punto->ip.'/latlong');
            //echo $latlong;
            $location = explode(",", $latlong);
            array_push($locations, $location);
            //echo "Latitude: ".$location[0]." Longitude: ".$location[1];
            sleep (.5);    
        }
        return view('map')->with('locations',$locations);
    }
}