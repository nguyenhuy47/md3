<?php

namespace App\Http\Controllers;

use App\Model\HistoryModel;
use App\Model\HousesModel;
use App\Model\KindEvaluateModel;
use App\User;
use Illuminate\Http\Request;

class HousesController extends RetrievesllDataController
{
    public function showHouses(Request $request)
    {
        $address = $this->address();
        $houses = HousesModel::orderBy('id', 'desc')->paginate(9, ['*'], 'trang');
        return view('index.list-bock-house', compact('houses', 'address'));
    }

    public function seeDetails($id)
    {
        $Comments = KindEvaluateModel::where('id_house', $id)->get();

        $seeDetailHouses = HousesModel::find($id);

        $user = $this->user($seeDetailHouses->id_user);
        $priceHouses = HousesModel::where('price', $seeDetailHouses->price)->get();
        $address = $this->address();
        return view('index.information-house', compact('seeDetailHouses', 'user', 'priceHouses', 'address', 'Comments'));
    }

    public function search()
    {
        $addresss = $this->address();

        $query = HousesModel::with('address');

        if (isset($_GET['price'])) {
            $getPrice = $_GET['price'];
            $price = explode('-', $getPrice);
            $houses = $query->whereBetween('price', [$price[0], $price[1]]);
        }

        if (!empty($_GET['address'])) {
            $address = $_GET['address'];
            $houses = $query->where('id_address', $address);
        }

        if (!empty($_GET['number_room'])) {
            $numberRoom = $_GET['number_room'];
            $houses = $query->where('number_room', $numberRoom);
        }

        if (!empty($_GET['number_bathroom'])) {
            $numberBathroom = $_GET['number_bathroom'];
            $houses = $query->where('number_bathroom', $numberBathroom);
        }

        if ($_GET['month'] != "0-11111111111111111") {
            $getMonth = $_GET['month'];
            $month = explode('-', $getMonth);
            $houses = $query->where('number_bathroom', $month);
        }
        $houses = $query->get();
        return view('index.search', compact('houses', 'addresss'));
    }

    public function showUpdatedHomeStatus($id)
    {
        $houses = HousesModel::where('id_user', $id)->get();
        $user = User::find($id);
        return view('collection.user.show-updated-home-status', compact('houses', 'user'));
    }

    public function updatedHomeStatus(Request $request)
    {
        $id = $request->nameHouse;
        $status = $request->status;
        $updateHouseStatus = HousesModel::find($id);
        $updateHouseStatus->status = $status;
        $updateHouseStatus->save();

        $insertHistory = new HistoryModel();
        $insertHistory->id_house = $updateHouseStatus->id;
        $insertHistory->name = $request->name;
        $insertHistory->phone = $request->phone;
        $insertHistory->email = $request->email;
        $insertHistory->save();

        $user = User::find($updateHouseStatus->id_user);
        $request->session()->flash('updateHouses', 'Bạn dã cập nhật trạng thái nhà thành công');
        return redirect(route('showUpdatedHomeStatus', "$user->id"));
    }

    public function showHouse()
    {
        $houses = HousesModel::all();

        return view('collection.userPostHouse.dashboard', compact('houses'));
    }

}
