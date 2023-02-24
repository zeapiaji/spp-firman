@extends('layouts.main')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Tambah Kelas</h1>
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
              <h3 class="card-title">Form Tambah Kelas</h3>
          </div>
          <div class="card-body">
              <form action="/class/create" method="POST">
                @csrf
                  <div class="mb-3">
                      <label for="class_name">Nama Kelas :</label>
                      <input type="text" name="class_name" id="class_name" class="form-control @error('class_name')
                          is-invalid
                      @enderror">
                      @error('class_name')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="/class" class="btn btn-danger">Batal</a>
              </form>
          </div>
      </div>
  </div>
@endsection