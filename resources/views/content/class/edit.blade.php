@extends('layouts.main')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Ubah Kelas</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Kelas</a></li>
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
                <h3 class="card-title">Form Ubah Data Kelas</h3>
            </div>
            <div class="card-body">
                @foreach ($classes as $class)
                    
             
                <form action="/class/{{ $class->id }}/edit" method="POST">
                  @method('put')
                  @csrf 
                    <div class="mb-3">
                        <label for="class_name">Nama Kelas :</label>
                        <input type="text" name="class_name" id="class_name" class="form-control" value="{{ $class->class_name }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/class" class="btn btn-danger">Batal</a>
                </form>
                @endforeach
            </div>
        </div>
    </div>
  </section>
@endsection