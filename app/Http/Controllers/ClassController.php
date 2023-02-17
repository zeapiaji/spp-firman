<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ClassModel;
use App\Models\student;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $title = "Daftar Kelas";
        $classes = ClassModel::get();
        return view('content.class.index', compact('title', 'classes'));
    }

    public function detail($id)
    {
        $title = "Detail Kelas";
        $classes = ClassModel::where('id', $id)->get();
        $students = student::where('class_id', $id)->get();
        return view('content.class.detail', compact('title', 'classes', 'students'));
    }
}
