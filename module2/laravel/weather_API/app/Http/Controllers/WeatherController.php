<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index(Request $request){
        $cityId = 1581130;
        $cityName = "Hà Nội";
        $cityInput = $request->cityName;
        $cityJson = file_get_contents('js/cityvn.json');
        $cities = json_decode($cityJson);
        foreach ($cities as $key => $city){
            if($city->name == $cityInput){
                $cityId = $city->id;
                $cityName = $city->name;
            }
        }
        switch ($cityName){
            case "Ha Long":
                $imageName = "halong";
                break;
            case "Thanh pho Ho Chi Minh":
                $imageName = "hcm";
                break;
            case "Haiphong":
                $imageName = "haiphong";
                break;
            case "Nha Trang":
                $imageName = "nhatrang";
                break;
            default:
                $imageName = "hanoi";
        }
            $client = new Client();
        $rsp = $client->request('GET',"http://api.openweathermap.org/data/2.5/weather?id=$cityId&appid=864d6baefd019b9633bcd4b963ce8bd4");
        $dataJson = $rsp->getBody();
        $data = json_decode($dataJson);
        return view('Home',compact('data', 'cityName', 'imageName'));


    }
}
