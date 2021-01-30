<?php

namespace App\Http\Controllers;

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
        $ip = file_get_contents('http://v4v6.ipv6-test.com/api/myip.php');
        $location = [
            "latitude" => file_get_contents('https://ipapi.co/'.$ip.'/latitude'),
            "longitude" => file_get_contents('https://ipapi.co/'.$ip.'/longitude')
        ];
        //echo "Latitude: ".$location['latitude']." Longitude: ".$location['longitude'];

        return view('map')->with('location',$location);
    }
}