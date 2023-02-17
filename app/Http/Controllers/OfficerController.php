<?php

namespace App\Http\Controllers;

use App\Models\officer;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Daftar petugas";
        $officer = officer::get();
        return view('content.officer.index', compact('title', 'officer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Petugas";
        $classes = officer::get();
        // dd($classes);
        return view('content.officer.create', compact('title', 'classes'));
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
             'username' => 'required',
             'password' => 'required',
             'officers_name' => 'required',
             'level' => 'required',
            ]);
     
            officer::create($validatedData);
     
            return redirect('/officer')->with('success','Petugas ' .$request->name. ' berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {     
        $title = "Detail Petugas";
        $officer = officer::where('id', $id)->first();

        return view ('content.officer.detail',compact('title', 'officer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit Petugas";
        $officer = officer::where('id', $id)->first();
        return view('content.officer.edit', compact('title', 'officer'));
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
            'username'                   => 'required',
            'officers_name'              => 'required',
            'level'                      => 'required',
            ]);

            officer::where('id', $id)->update($validatedData);

            return redirect('/officer')->with('pesan', 'berhasil di upadate :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        officer::where('id',$id)->delete();

        return redirect('/officer')->with('success','Petugas berhasil dihapus');
    }
}
