<?php

namespace App\Http\Controllers;

use App\Models\officer;
use App\Models\student;
use App\Models\transaction;
use App\Models\User;
use App\Models\UserMonth;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Riwayat Transaksi";
        $transactions = transaction::get();
        return view('content.transactions.index', compact('title', 'transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Transaksi";
        $transactions = transaction::get();
        $students = student::get();
        $officers = User::get();
        $months =   UserMonth::where('status', 0)->get();
        return view('content.transactions.create', compact('title', 'transactions', 'students', 'officers', 'months'));
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
             'student'         => 'required',
             'school_years'               => 'required',
             'price'               => 'required',
             'user_month_id'               => 'required',
            ]);

            // Ubah Officer_id jeng shool_fees_id na ku data nudibutuhken
           $data = transaction::create([
                'officer_id' => 0,
                'student_id' => $request->student,
                'user_month_id' => $request->user_month_id,
                'school_fees_id' => 0,
            ]);

            // transaction::create($validatedData);

            return redirect('/transactions')->with('success','SPP ' .$request->name. ' berhasil ditambahkan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Tansaksi";
        $transactions = transaction::where('id', $id)->get();

        return view ('content.transactions.detail',compact('title', 'transactions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
