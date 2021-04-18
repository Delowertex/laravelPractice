<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Exports\EmployeeExport;
use Excel;
use App\imports\EmployeeImport;

class EmployeeController extends Controller
{
    public function addEmployee(){
        $employee = [
            ["name"=>"Halim", "email"=>"halim@gmail.com", "phone"=>"123456789", "salary"=>"20000", "department"=>"physics"],
            ["name"=>"kalam", "email"=>"kalam@gmail.com", "phone"=>"123456788", "salary"=>"21000", "department"=>"mathematic"],
            ["name"=>"himel", "email"=>"himel@gmail.com", "phone"=>"123456787", "salary"=>"22000", "department"=>"statistic"],
            ["name"=>"sohel", "email"=>"sohel@gmail.com", "phone"=>"123456784", "salary"=>"23000", "department"=>"bangla"],
        ];
        Employee::insert($employee);
        return "Records are inserted successfully";
    }

    public function exportIntoExcel(){
        return Excel::download(new EmployeeExport, 'employeelist.xlsx');
    }

    public function exportIntoCSV(){
        return Excel::download(new EmployeeExport, 'employeelist.csv');
    }

    public function importForm(){
        return view('import-form');
    }

    public function import(Request $request){
        Excel::import(new EmployeeImport, $request->file);
        return "Records are imported successfully";
    }
}
