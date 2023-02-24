@extends('layouts.main')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Pembayaran</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">{{ $title }}</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
        <!-- Main content -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="/transactions/create" class="btn btn-primary btn-sm"><i class="fas fa-plus fa-fw"></i> Tambah Pembayaran</a>
              </div>
              <!-- /.card-header -->  
              <div class="card-body">
                <table id="dataTable2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Nisn</th>
                    <th>Tanggal Bayar</th>
                    <th>Nama Petugas</th>
                    <th>Untuk Bulan</th>
                    <th>Untuk Tahun</th>
                    <th>Nominal</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($transactions as $transaction) 
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $transaction->officer_id }}</td>
                      <td>{{ $transaction->student_id }}</td>
                      <td>{{ $transaction->school_fees_id }}</td>
                      <td>{{ $transaction->user_month_id }}</td>
                      <td class="text-center">
                        {{-- Iye routena salah --}}
                        {{-- <a class="btn btn-primary" href="/transaction {{  $student->id }}"><i class="fas fa-eye"></i></a> --}}
                        <a class="btn btn-primary" href="/transaction/ {{  $transaction->id }}"><i class="fas fa-eye"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
@endsection