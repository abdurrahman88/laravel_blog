<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

class StudentController extends Controller
{
    public function index()
    {
    	return view ("student");
    }
    public function get_datatable()
    {
    	return datatables()->eloquent(Student::query())->make(true);
    }
}
