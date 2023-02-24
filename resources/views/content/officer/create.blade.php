@extends('layouts.main')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Tambah Petugas</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Petugas</a></li>
          <li class="breadcrumb-item active">{{ $title }}</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
@if (isset($errors))
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif
<section class="content">
  <div class="container-fluid">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Form Tambah Petugas</h3>
          </div>
          <div class="card-body">
              <form action="/officer/create" method="POST">
                @csrf
                  <div class="mb-3">
                      <label for="username">Username :</label>
                      <input type="text" name="username" id="username" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="password">Kata sandi :</label>
                      <input type="password" name="password" id="password" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="officers_name">Nama :</label>
                      <input type="text" name="officers_name" id="officer_name" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="level">Bidang :</label>
                      <select class="form-control" name="level" id="level">
                        <option selected disabled>Pilih Level</option>
                        <option value="1">Admin</option>
                        <option value="2">Petugas</option>
                      </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="" class="btn btn-danger">Batal</a>
              </form>
          </div>
      </div>
  </div>
@endsection