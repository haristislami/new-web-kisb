@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
  <h1 class="h2">Selamat Datang, {{ auth()->user()->name }}</h1>
</div>

<div class="col-lg-12 mt-3">
  @csrf
  <a href="/dashboard/fm" class="button btn-danger text-decoration-none rounded py-3 px-3" target="_blank">
    <span data-feather="folder"></span></a>
  <a href="/dashboard/dbm" class="button btn-success text-decoration-none rounded py-3 px-3 ms-2" target="_blank">
    <span data-feather="database"></span></a>
</div>






@endsection