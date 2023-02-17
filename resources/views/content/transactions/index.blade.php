@extends('layouts.main')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Daftar Siswa</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Siswa</a></li>
            <li class="breadcrumb-item active">{{ $title }}</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Tabel {{ $title }}</h3>
                      <br>
                        <a class="btn btn-success mt-2" href="/students/create"><i class="fas fa-plus"></i> Tambah Data</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table class="table table-bordered">
                        <thead>                  
                          <tr>
                            <th style="width: 10px">No</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($transactions as $transaction)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $transaction->years }}</td>
                            <td>{{ $transaction->total }}</td>
                            <td>XII - RPL</td>
                            <td class="text-center">
                              <a class="btn btn-primary" href="/transactions/{{ $transaction->id }}"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-warning" href=""><i class="fas fa-pen"></i></a>
                                <a class="btn btn-danger" href=""><i class="fas fa-trash"></i></a>
                            </td>
                          </tr>
                                                        
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </section>
@endsection