<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmployeeRequest;
use App\Team;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(5);
        $teams = Team::all();
        return view('employees.list', compact('employees', 'teams'));
    }

    public function create()
    {
        $teams = Team::all();
        return view('employees.create', compact('teams'));
    }


    public function store(CreateEmployeeRequest $request)
    {
        $employee = new Employee();
        $employee->code = $request->input('code');
        $employee->team_id = $request->input('team_id');
        $employee->name = $request->input('name');
        $employee->dob = $request->input('dob');
        $employee->gender = $request->input('gender');
        $employee->phone = $request->input('phone');
        $employee->CMND = $request->input('CMND');
        $employee->email = $request->input('email');
        $employee->address = $request->input('address');
        $employee->save();

        Session::flash('success', 'Tạo mới nhân viên thành công');

        return redirect()->route('employees.index');
    }


    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $teams = Team::all();

        return view('employees.edit', compact('employee', 'teams'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->code = $request->input('code');
        $employee->team = $request->input('team');
        $employee->name = $request->input('name');
        $employee->dob = $request->input('dob');
        $employee->gender = $request->input('gender');
        $employee->phone = $request->input('phone');
        $employee->CMND = $request->input('CMND');
        $employee->email = $request->input('email');
        $employee->address = $request->input('address');
        $employee->team_id = $request->input('team_id');
        $employee->save();

        Session::flash('success', 'Cập nhật nhân viên thành công');

        return redirect()->route('employees.index');
    }


    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();


        Session::flash('success', 'Xóa nhân viên thành công');
        return redirect()->route('employees.index');
    }


    public function filterByTeam(Request $request)
    {
        $idTeam = $request->input('team_id');

        $teamFilter = Team::findOrFail($idTeam);
        $employees = Employee::where('team_id', $teamFilter->id)->get();
        $totalEmployeeFilter = count($employees);

        $teams = Team::all();

        return view('employees.list', compact('employees', 'teams', 'totalEmployeeFilter', 'teamFilter'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('employees.index');
        }
        $employees = Employee::where('name', 'LIKE', '%' . $keyword . '%')
            ->paginate(5);

        $teams = Team::all();
        return view('employees.list', compact('employees', 'teams'));

    }
}
