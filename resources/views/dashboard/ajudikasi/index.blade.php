@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Putusan Ajudikasi</h1>
</div>
<div class="col-lg-12">
  <a href="/dashboard/ajudikasi/create" class="btn btn-primary mb-3">Create New</a>
</div>
@if (session()->has('success'))
<div class="alert alert-success col-lg-12" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-12">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Nomor</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Nomor Putusan</th>
        <th scope="col">Registrasi Sengketa</th>
        <th scope="col">Pemohon</th>
        <th scope="col">Termohon</th>
        <th scope="col">Download File</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($ajudikasi as $putusan )
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ showDateTime( $putusan->tanggal, "l, d-M-Y")}}</td>
        <td>{{ $putusan->nomor_putusan }}</td>
        <td>{{ $putusan->registrasi_sengketa }}</td>
        <td>{{ $putusan->pemohon }}</td>
        <td>{{ $putusan->termohon }}</td>
        <td>{{ $putusan->file }}</td>
        <td>

          <a href="/{{ ('storage/' . $putusan->file) }}" class="badge bg-info"><span data-feather="eye"></span></a>
          <a href="/dashboard/ajudikasi/{{ $putusan->id }}/edit" class="badge bg-warning"><span
              data-feather="edit"></span></a>
          <form action="/dashboard/ajudikasi/{{ $putusan->id }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Yakin mau menghapus post ini?')"><span
                data-feather="x-circle"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection