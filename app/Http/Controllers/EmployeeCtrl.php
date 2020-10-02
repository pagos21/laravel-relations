<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;
use Illuminate\Http\Request;

class EmployeeCtrl extends Controller
{
    public function index(){
        $emps = Employee::all();
        return view('home', compact('emps'));
    }
    public function show($id){
        $emp = Employee::findOrFail($id);
        return view('emp_show', compact('emp'));
    }
    public function destr($id){
        $emp = Employee::findOrFail($id);
        $emp ->delete();
        return redirect() ->route('index');
    }

    public function edit($id){
        $emp = Employee::findOrFail($id);
        $locs = Location::all();
        return view('edit_emp', compact('emp', 'locs'));
    }

    public function update(Request $request, $id){
        $data = $request ->all();
        $emp = Employee::findOrFail($id);
        $emp ->update($data);
        return redirect()->route('index');
    }

    public function create(){
        $locs = Location::all();
        return view('emp_create', compact('locs'));
    }
    public function store(Request $request){
        $data = $request->all();
        $emp = Employee::create($data);
        return redirect()->route('index');
    }
}
