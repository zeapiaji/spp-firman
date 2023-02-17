@extends('layouts.main')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Ubah Data Siswa</h1>
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
  @if (isset($errors))
      @foreach ($errors->all() as $error)
          {{ $error }}
      @endforeach
  @endif
  <section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Ubah Data Siswa</h3>
            </div>
            <div class="card-body">
                @foreach ($students as $student)
                    
             
                <form action="/students/{{ $student->nisn }}/edit" method="POST">
                  @method('put')
                  @csrf
                    <div class="mb-3">
                        <label for="nisn">NISN :</label>
                        <input type="number" name="nisn" id="nisn" class="form-control" value="{{ $student->nisn }}">
                    </div>
                    <div class="mb-3">
                        <label for="nis">NIS :</label>
                        <input type="nis" name="nis" id="nis" class="form-control" value="{{ $student->nis }}">
                    </div>
                    <div class="mb-3">
                        <label for="name">Nama :</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="class">Kelas :</label>
                        <select name="class_id" id="class" class="form-control">
                          <option value="{{ $student->class_id }}">{{ $student->ClassModel->class_name }}</option>
                          @foreach ($classes as $class)
                              <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email :</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $student->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="phone">No Telepon :</label>
                        <input type="number" name="phone_number" id="phone" class="form-control" value="{{ $student->phone_number }}">
                    </div>
                    <div class="mb-3">
                        <label for="address">Alamat:</label>
                        <textarea name="address" id="address" cols="30" rows="10" class="form-control">{{ $student->address }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/students" class="btn btn-danger">Batal</a>
                </form>
                @endforeach
            </div>
        </div>
    </div>
  </section>
@endsection