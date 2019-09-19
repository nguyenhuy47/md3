<?php

namespace App\Http\Controllers;

use App\Model\AddressModel;
use App\Model\CalenderModel;
use App\Model\HistoryModel;
use App\Model\HousesModel;
use App\Model\ImageModel;
use App\Model\KindEvaluateModel;
use App\Model\KindHouseModel;
use App\Model\PostModel;
use App\Model\StatisicalModel;
use App\User;
use Illuminate\Http\Request;

abstract class RetrievesllDataController extends Controller
{
    public function houses() {
        $houses = HousesModel::all();
    }

    public function address() {
        $address = AddressModel::all();
        return $address;
    }

    public function calender() {
        $calender = CalenderModel::all();
        return $calender;
    }

    public function history() {
        $history = HistoryModel::all();
        return $history;
    }

    public function image() {
        $image = ImageModel::all();
        return $image;
    }

    public function kindEvaluate(){
        $kindEvakuatee = KindEvaluateModel::all();
        return $kindEvakuatee;
    }

    public function kindHouse() {
        $kindHouse = KindHouseModel::all();
        return $kindHouse;
    }

    public function post() {
        $posts = PostModel::all();
        return $posts;
    }

    public function statisical() {
        $statisical = StatisicalModel::all();
        return $statisical;
    }

    public function user($id){
        $user = User::find($id);
        return $user;
    }
}
