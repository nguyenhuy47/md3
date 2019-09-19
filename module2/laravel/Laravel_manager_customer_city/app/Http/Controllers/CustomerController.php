<?php

namespace App\Http\Controllers;

use App\City;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(3);
        $cities = City::all();
        return view('customers.list', compact('customers', $cities));
    }

    public function create()
    {
        $cities = City::all();
        return view('customers.create', compact('cities'));

    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->age = $request->input('age');
        $customer->email = $request->input('email');
        $customer->city_id = $request->input('city_id');
        $customer->save();
        Session::flash('success', 'Tạo mới khách hàng thành công');
        return redirect()->route('customers.index');
    }

    public function edit($id){
        $customer = Customer::findOrFail($id);
        $city = City::all();
        return view('customers.edit',compact('customer', 'city'));

    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->name     = $request->input('name');
        $customer->email    = $request->input('email');
        $customer->age      = $request->input('age');
        $customer->city_id  = $request->input('city_id');
        $customer->save();
        Session::flash('success', 'Cập nhật khách hàng thành công');
        return redirect()->route('customers.index');
    }

    public function destroy($id){
        $customer = Customer::findOrFail($id);
        $customer->delete();
        Session::flash('success', 'Xóa khách hàng thành công');
        return redirect()->route('customers.index');
    }

    public function filterByCity(Request $request)
    {
        $idCity = $request->input('city_id');
        $cityFilter = City::findOrFail($idCity);
        $customers = Customer::where('city_id', $cityFilter->id)->get();
        $totalCustomerFilter = count($customers);
        $cities = City::all();
        return view('customers.list', compact('customers', 'cities', 'totalCustomerFilter', 'cityFilter'));
    }

}
