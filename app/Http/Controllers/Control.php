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


    public function submit(){
        $sum = 0;
        $flag2 = 0;
        for ($i = 1; $i<10; $i+=2)
        {
            $flag1 = 0;
            for ($j = 1; $j<5; $j++)
            {
                if (!empty($_POST['respuesta'.$i.$j])) 
                {
                    $sum+=$_POST['respuesta'.$i.$j];
                    $flag1++;
                }
            }
            if ($flag1==0)
            {
                echo '<script> alert("Please answer all the questions"); </script>';
                echo '<script> window.history.back();</script>';
                $flag2 = 1;
                break;
            }
        }
        if (empty($_POST['pregunta2']) || empty($_POST['pregunta4']) || empty($_POST['pregunta6']) || empty($_POST['pregunta8']) || empty($_POST['pregunta10']))
        {
            echo '<script> alert("Please answer all the questions"); </script>';
            echo '<script> window.history.back();</script>';
        }
        $sum+= $_POST['pregunta2'] + $_POST['pregunta4'] + $_POST['pregunta6'] + $_POST['pregunta8'] + $_POST['pregunta10'];
        echo $sum;
        if ($flag2==0)
        {
            return redirect('results')->with('sum', $sum);
        }
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