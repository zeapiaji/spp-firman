<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\ClassModel;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $title = "Daftar Kelas";
            $classes = ClassModel::get();
            return view('content.class.index', compact('title', 'classes'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah kelas";
        $classes = ClassModel::get();
        // dd($classes);
        return view('content.class.create', compact('title', 'classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {

            $validatedData = $request->validate([
             'class_name' => 'required|unique:class_models',
            ]);
     
            ClassModel::create($validatedData);
     
            return redirect('/class')->with('success','Kelas '.$request->name.' berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $title = "Detail Kelas";
        $classes = ClassModel::where('id', $id)->get();
        $students = student::where('class_id', $id)->get();
        return view('content.class.detail', compact('title', 'classes', 'students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit Kelas";
        $classes = ClassModel::where('id', $id)->get();
        return view('content.class.edit', compact('title', 'classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            // 'class_id'                      => 'required',
            'class_name'              => 'required',
            ]);
                ClassModel::where('id', $id)->update([
                    'class_name'               =>  $validatedData['class_name'],
                ]);

            return redirect('/class');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::where('class_id', $id)->get();
        // dd($student->count());
        if($student->count() != 0)
        {
            return redirect('/class')->with('failed', 'Gagal kelas tidak bisa dihapus karena masih ada siswa!');
        }
        ClassModel::where('id',$id)->delete();
    
        return redirect('/class')->with('success','Kelas berhasil dihapus');
    }
}
