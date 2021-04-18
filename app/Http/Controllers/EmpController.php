<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use PDF;

class EmpController extends Controller
{
    public function getAllEmployee(){
        $employees = Employee::all();
        return view('employee', compact('employees'));
    }

    public function downloadPDF(){
        $employees = Employee::all();
        $pdf = PDF::loadView('employee', compact('employees'));
        return $pdf->download('employe.pdf');
    }
}
