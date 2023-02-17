@extends('layouts.main')

@section('content')
<section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
        <div class="col">
        </div>
      </div>
  
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3"></h5>
              <p class="text-muted mb-3">{{ $students->name}}</p>
              <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-primary">Follow</button>
                <button type="button" class="btn btn-outline-primary ms-1">Message</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nisn</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $students->nisn }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nis</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $students->nis }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nama</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $students->name }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Alamat</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $students->address }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $students->email }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection