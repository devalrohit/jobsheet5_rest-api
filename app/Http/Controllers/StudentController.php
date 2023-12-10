<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Student;


class StudentController extends Controller
{
    public function index(){
        $student = Student::all();

        return response()->json(["message" => "SUccessfully fetched student",
    "data" => @$student], Response::HTTP_OK);
    }
}
