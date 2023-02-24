@extends('layouts.main')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{ $title }}</h1>

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
        <div class="col-12">
          @if (Session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{Session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
        </div>
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Tabel {{ $title }}</h3>
                      <br>
                        <a class="btn btn-success mt-2" href="/spp/create"><i class="fas fa-plus"></i> Tambah Data</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table class="table table-bordered">
                        <thead>                  
                          <tr>
                            <th style="width: 10px">No</th>
                            <th>Tahun</th>
                            <th>Harga</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($SchoolFees as $SchoolFee) 
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $SchoolFee->school_year }}</td>
                            <td>{{ $SchoolFee->price }}</td>
                            <td class="text-center">
                              <a class="btn btn-primary" href="/spp/{{  $SchoolFee->id }}"><i class="fas fa-eye"></i></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </section>
@endsection