@extends('layouts.main')
@section('container')

<h2>JADWAL SIDANG KOMISI INFORMASI SUMATERA BARAT</h2>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="input-group mb-3 mt-5">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
        <input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Jadwal">
      </div>
    </div>
  </div>
</div>

<div class="table-responsive col-lg-12">
  <table class="table table-striped table-sm" id="myTable">
    <thead>
      <tr>
        <th scope="col">Nomor</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Pemohon</th>
        <th scope="col">Termohon</th>
        <th scope="col" class="text-center">Lihat Jadwal</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($jadwal as $jadwals)

      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ showDateTime($jadwals->tanggal, "l, d F Y") }}</td>
        <td>{{ $jadwals->pemohon }}</td>
        <td>{{ $jadwals->termohon }}</td>
        <td class="text-center">
          <a href="/jadwal/{{ $jadwals->judulslug }}" class="badge bg-danger"><i class="bi bi-door-open"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection