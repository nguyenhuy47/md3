<?php

namespace App\Http\Controllers;

use App\Model\CalenderModel;
use App\Model\HousesModel;
use App\Model\KindEvaluateModel;
use App\Model\StatisicalModel;
use App\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class UserController extends RetrievesllDataController
{
    public function showCalendar($id)
    {
        $calenders = CalenderModel::where('id_user', $id)->orderBy('id', 'desc')->get();
        $user = $this->user($id);
        return view('collection.user.calendar', compact('calenders', 'user'));
    }

    public function showStatistics($id)
    {
        $price = 0;

        $user = $this->user($id);

        $statistics = HousesModel::where('id_user', $id)->get();

        foreach ($statistics as $statistic) {
            if ($statistic->status == '1') {
                $price = $statistic->price + $price;
            }
        }
        return view('collection.user.statistics', compact('user', 'statistics', 'price'));
    }

    public function feedback(Request $request, $id)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $conten = $request->input('conten');
        $kindEvaluate = new KindEvaluateModel();
        $kindEvaluate->id_house = $id;
        $kindEvaluate->conten = $conten;
        $kindEvaluate->phone = $phone;
        $kindEvaluate->email = $email;
        $kindEvaluate->name = $name;
        $kindEvaluate->save();
        return redirect(route('seeDetails', $id));
    }

    public function calendar(Request $request, $idHouses, $idUser)
    {
        $house = HousesModel::find($idHouses);
        $user = User::find($idUser);
        $information = $request->input('information');
        $calender = $request->input('calender');
        $name = $request->input('name');
        $phone = $request->input('phone');
        $calendar = new CalenderModel();
        $calendar->id_house = $idHouses;
        $calendar->name = $name;
        $calendar->calender = $calender;
        $calendar->information = $information;
        $calendar->phone = $phone;
        $calendar->id_user = $idUser;
        $calendar->save();
        return view('collection.user.dashboard', compact('house', 'user'))->with(['messenger' => ' Bạn đã đặt lịch thành công']);

    }



    public function deleteCalender(Request $request, $id)
    {
        $calenders = CalenderModel::find($id);

        $user = User::find($calenders->id_user);

        $calender = strtotime($calenders->calender);

        $date = strtotime(date('Y-m-d'));

        $time = $calender - $date;

        if ($time <= 86400) {
            $request->session()->flash('calender', 'Hủy lịch thất bại');
            return redirect(route('showCalendar', $user->id));
        } else {
            $calender = CalenderModel::where('id', $id)->delete();
            return redirect(route('showCalendar', $user->id))->with(['calender'=>
                'Hủy lịch thành công']);;
        }
    }

    public function BockCalendar(Request $request, $id_house )
    {
        $id_user = $_POST['id_user'];
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $date = $request->input('date');
        $calendar = new CalenderModel();
        $calendar->name = $name;
        $calendar->phone = $phone;
        $calendar->email = $email;
        $calendar->calender = $date;
        $calendar->id_house = $id_house;
        $calendar->id_user = $id_user;
        $calendar->save();
        return redirect()->route('listBockHouse');

    }
}
