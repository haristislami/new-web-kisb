@extends('layouts.main')

@section('container')
<h1>PUTUSAN SELA SENGKETA INFORMASI</h1>
<div class="row">
  <div class="col-md-4">
    <div class="input-group mb-3 mt-5">
      <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
      <input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Putusan">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-8">
    <nav class="nav">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="text-decoration-none text-danger" href="/ajudikasi">Ajudikasi</a>
        </li>
        <li class="breadcrumb-item"><a class="text-decoration-none text-danger" href="/mediasi">Mediasi</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sela</li>
      </ol>
    </nav>
  </div>
</div>
<div class="table-responsive col-lg-12">
  <table class="table table-striped table-sm mt-3" id="myTable">
    <thead>
      <tr>
        <th scope="col">Tanggal</th>
        <th scope="col">Nomor Putusan</th>
        <th scope="col">Registrasi Sengketa</th>
        <th scope="col">Pemohon</th>
        <th scope="col">Termohon</th>
        <th scope="col">Download File</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
@endsection