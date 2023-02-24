@extends('layouts.main')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah SPP</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#"></a></li>
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
                <h3 class="card-title">Form Tambah Siswa</h3>
            </div>
            <div class="card-body">
                <form action="/spp/create" method="POST">
                  @csrf
                    <div class="mb-3">
                        <label for="school_year">Tahun :</label>
                        <input type="number" name="school_year" id="school_year" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="price">Harga :</label>
                        <input type="number" name="price" id="price" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/students" class="btn btn-danger">Batal</a>
                </form>
            </div>
        </div>
    </div>
  </section>
@endsection