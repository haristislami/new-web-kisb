@extends('layouts.main')
@section('container')
<h2>DETAIL JADWAL SIDANG SENGKETA INFORMASI KOMISI INFORMASI SUMBAR</h2>
<div class="table-responsive col-lg-12">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Tanggal</th>
        <th scope="col">Judul</th>
        <th scope="col">Waktu</th>
        <th scope="col">Pemohon</th>
        <th scope="col">Termohon</th>
        <th scope="col">Nomor Register</th>
        <th scope="col">Majelis Komisioner</th>
        <th scope="col">Panitera Pengganti</th>
        <th scope="col">Ruangan Sidang</th>
        <th scope="col">Mediator</th>
        <th scope="col">Agenda</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ showDateTime($jadwal->tanggal, "l, d F Y") }}</td>
        <td>{{ $jadwal->judul }}</td>
        <td>{{ $jadwal->waktu }} WIB</td>
        <td>{{ $jadwal->pemohon }}</td>
        <td>{{ $jadwal->termohon }}</td>
        <td>{{ $jadwal->nomor_register }}</td>
        <td>{{ $jadwal->majelis }}</td>
        <td>{{ $jadwal->panitera }}</td>
        <td>{{ $jadwal->ruangan }}</td>
        <td>{{ $jadwal->mediator }}</td>
        <td>{{ $jadwal->agenda }}</td>
      </tr>
    </tbody>
  </table>
</div>
<a href="/jadwal">Kembali ke halaman jadwal</a>

@endsection