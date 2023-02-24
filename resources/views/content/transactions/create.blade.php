@extends('layouts.main')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Transaksi</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">{{ $title }}</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Pembayaran</h3>
            </div>
            <div class="card-body">
                {{-- <form action="/transactions"> <-- Kurang method jeng @csrf na --}}
                <form action="/transactions/post" method="POST">
                  @csrf
                  

                  {{-- <div class="mb-3">
                    <label for="class">Staf  :</label>
                    <select name="user_id" id="class" class="form-control">
                      <option>Pilih Staf...</option>
                      @foreach ($officers as $officer)
                          <option value="{{ $officer->id }}">{{ $officer->officers_name }}</option>
                      @endforeach
                    </select>
                </div> --}}
                    <div class="mb-3">
                        <label for="nisn">Siswa :</label>
                        <select name="student" id="student" class="form-control">
                          <option>Pilih Siswa...</option>
                          @foreach ($students as $student)
                              <option value="{{ $student->nisn }}">{{ $student->name }} | {{ $student->ClassModel->class_name }}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nis">Tahun Ajaran</label>
                        <input type="nis" name="school_years" id="year" class="form-control" readonly value="">
                    </div>
                    <div class="mb-3">
                        <label for="name">Harga :</label>
                        <input type="text" name="price" id="price" class="form-control" readonly value="">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="class">Kelas :</label>
                        <select name="class" id="class" class="form-control">
                            <option>Pilih Kelas Siswa.....</option>
                            <option value="1">X - RPL</option>
                            <option value="2">XI - RPL</option>
                            <option value="3">XII - RPL</option>
                        </select>
                    </div> --}}
                    <div class="mb-3">
                        <label for="month">Bulan :</label>
                        <select name="user_month_id" id="month" class="form-control">
                            <option>Pilih Bulan...</option>
                        </select>
                    </div>
                    
                    {{-- <a href="/transactions" class="btn btn-primary">Submit</a> --}}
                    {{-- Edan make a href heeh we balik dei balik dei --}}
                    
                    <button type="submit">Submit</button>
                    <a href="" class="btn btn-danger">Batal</a>
                </form>
            </div>
        </div>
    </div>
  </section>
  @include('partials.scripts.selectchange')
@endsection