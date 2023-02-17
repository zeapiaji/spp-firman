@extends('layouts.main')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Siswa</h1>
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

  <section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Siswa</h3>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="mb-3">
                        <label for="nisn">NISN :</label>
                        <input type="number" name="nisn" id="nisn" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nis">NIS :</label>
                        <input type="nis" name="nis" id="nis" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name">Nama :</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="class">Kelas :</label>
                        <select name="class" id="class" class="form-control">
                            <option>Pilih Kelas Siswa.....</option>
                            <option value="1">X - RPL</option>
                            <option value="2">XI - RPL</option>
                            <option value="3">XII - RPL</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email :</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="phone">No Telepon :</label>
                        <input type="number" name="phone" id="phone" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="address">Alamat:</label>
                        <textarea name="address" id="address" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <a href="" class="btn btn-primary">Submit</a>
                    <a href="" class="btn btn-danger">Batal</a>
                </form>
            </div>
        </div>
    </div>
  </section>
@endsection