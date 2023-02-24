<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\ClassModel;
use App\Models\SchoolFee;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Daftar Siswa";
        $students = student::get();
        return view('content.student.index', compact('title', 'students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Siswa";
        $classes = ClassModel::get();
        $years = SchoolFee::get();
        return view('content.student.create', compact('title', 'classes', 'years'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
                $validatedData = $request->validate([
                'nisn'             => 'required|unique:students',
                'nis'              => 'required',
                'email'            => 'required',
                'class_id'         => 'required',
                'name'             => 'required',
                'address'          => 'required',
                'phone_number'     => 'required',
                'school_fee_id'    => 'required'
                ]);

                student::create([
                    'nisn'  =>  $validatedData['nisn'],
                    'nis'  =>  $validatedData['nis'],
                    'email'  =>  $validatedData['email'],
                    'class_id'  =>  $validatedData['class_id'],
                    'name'  =>  $validatedData['name'],
                    'address'  =>  $validatedData['address'],
                    'phone_number'  =>  $validatedData['phone_number'],
                    'password'  =>  Hash::make(Str::random(16)),
                    'school_fee_id' => $validatedData['school_fee_id']
                ]);

                return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nisn)
    {
        $title = "Detail Siswa";
        $students = student::where('nisn', $nisn)->first();

        return view ('content.student.detail',compact('title', 'students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nisn)
    {
        $title = "Edit Siswa";
        // $classes = ClassModel::get();
        $students = student::where('nisn', $nisn)->get();
        $years = SchoolFee::get();
        return view('content.student.edit', compact('title', 'students', 'classes', 'years'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nisn)
    {
        $validatedData = $request->validate([
            'nisn'             => 'required',
            'nis'              => 'required',
            'email'            => 'required',
            'class_id'         => 'required',
            'name'             => 'required',
            'address'          => 'required',
            'phone_number'     => 'required',
            ]);


 
            if($request['nisn'] === $nisn){
                student::where('nisn', $nisn)->update([
                    'nis'               =>  $validatedData['nis'],
                    'email'             =>  $validatedData['email'],
                    'class_id'          =>  $validatedData['class_id'],
                    'name'              =>  $validatedData['name'],
                    'address'           =>  $validatedData['address'],
                    'phone_number'      =>  $validatedData['phone_number'],
                ]);
            }else{
                student::where('nisn', $nisn)->update($validatedData);
            }

            return redirect('/students');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nisn)
    {
        student::where('nisn',$nisn)->delete();

        return redirect('/students')->with('success','Siswa berhasil dihapus');
    }

}
