<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User;

class Control extends Controller{
    
    public function home(){
        return view('home');
    }

    public function test(){
        return view('test');
    }

    public function xd(){
        return view('xd');
    }

    public function submit(){
        echo "Latitude: ".$_POST['latitude']." Longitude: ".$_POST['longitude'];
        /*$sum = 0;
 
        $flag1 = 0;
        for ($j = 1; $j<=12; $j++){
            if (!empty($_POST['respuesta6'.$j])) {
                $sum+=$_POST['respuesta6'.$j];
                $flag1++;
            }
        }
        if ($flag1==0 || $_POST['pregunta1']==NULL || $_POST['pregunta2']==NULL || $_POST['pregunta3']==NULL || $_POST['pregunta4']==NULL || $_POST['pregunta5']==NULL){
            echo '<script> alert("Please answer all the questions"); </script>';
            echo '<script> window.history.back();</script>';
        }

        $sum+= $_POST['pregunta1'] + $_POST['pregunta2'] + $_POST['pregunta3'] + $_POST['pregunta4'] + $_POST['pregunta5'];
        //echo $sum;

        $ip = file_get_contents('http://v4v6.ipv6-test.com/api/myip.php');
        $status = ($sum>70? 1: 0);

        DB::table('testresults')->insert([
            'ip' => $ip,
            'latitude' => file_get_contents('https://ipapi.co/'.$ip.'/latitude'),
            'longitude' => file_get_contents('https://ipapi.co/'.$ip.'/longitude'),
            'points' => $sum,
            'status' => $status
        ]);

        if($sum<=50) $message = "Vas bien";
        else if($sum<=100) $message = "Vete a tu casa";
        else $message = "Vete alv";

        return redirect('results')->with('message', $message);*/
    }

    public function blog(){
        return view('blog');
    }

    public function results(){
        return view('results');
    }

    public function certificate(){
        return view('certificate');
    }

    public function map(){
        $points = DB::select('select latitude,longitude from testresults');
        $locations = array();
        foreach ($points as $point){
            $location = [
                "latitude" => $point->latitude, 
                "longitude" => $point->longitude
            ];
            array_push($locations, $location);
        }
        return view('map')->with('locations',$locations);
    }
}