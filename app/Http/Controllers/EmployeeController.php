<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create(){
          return view('employee.create');
    }

    public function store(Request $request){

        DB::insert('INSERT INTO employees (name, created_at) VALUES (?, ?)', [
            $request->input('name'),
            now()
        ]);

        return redirect()->route('employee.create');
    }

    public function read(){

        // Using raw SQL to fetch all employees
        $employees = DB::select("SELECT * FROM employees");

        return view('employee.read',compact('employees'));
  }
}
