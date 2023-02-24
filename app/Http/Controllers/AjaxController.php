<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\User;
use App\Models\UserMonth;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getYear(Request $request)
    {
        $students = student::where('nisn', $request->student_id)->get();
        foreach($students as $student)
        echo $student->SchoolFee->school_year;
    }

    public function getPrice(Request $request)
    {
        $students = student::where('nisn', $request->student_id)->get();
        foreach($students as $student)
        echo $student->SchoolFee->price;
    }

    public function getMonth(Request $request)
    {
        $months = UserMonth::where(['student_id' => $request->student_id, 'status' => 0])->get();
        echo "<option>Pilih Bulan...</option>";
        foreach($months as $month)
        {
            $name = $month->Month->month;
            echo "
            <option value='$month->id'>$name</option>";
        }
    }
}
