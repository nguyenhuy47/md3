<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\SliderModel as MainModel;
class SliderController extends Controller
{

    public function index(){
        $mainModel = MainModel::all();
       dd($mainModel);
//        $items = $mainModel->listItems(null,['task'=>'admin-list-items']);
//        foreach ($items as $item)
//            echo $item->name;
//        return view('slider.list',compact('slider'));
    }

}
