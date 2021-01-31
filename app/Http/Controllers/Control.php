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

        if($sum<=50) $message = "You have nothing to worry about! It is unlikely that you contracted the virus. However, we are still going through a global pandemic and you should keep following the appropriate hygiene measures, such as using face masks, washing your hands, and practicing social distancing.";
        else if($sum<=100) $message = "There is a chance that you are not properly protecting yourself from COVID-19. You should consider strengthening your hygiene measures, such as using face masks and washing your hands more regularly, as well as practicing social distancing. It is also advisable that you stay at home and avoid unnecessary social contact.";
        else $message = "You are at a high risk of being infected with COVID-19. It is highly advisable that you stay at home and get in contact with a doctor as soon as possible for the proper follow-up to your case; you might be asked to get tested for the disease.";

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

    public function release(){
        return view('release');
    }

    public function sign(){
    
        if($_POST['name'] == NULL)
        {
    
            echo '<script> alert("Please answer all the questions"); </script>';
            echo '<script> window.history.back();</script>';
    
        }
    
        $name = $_POST['name'];
        return redirect('release')->with('name', $name);
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