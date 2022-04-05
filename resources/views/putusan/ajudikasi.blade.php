@extends('layouts.main')

@section('container')
    <h1>PUTUSAN AJUDIKASI SENGKETA INFORMASI</h1>
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
                    <li class="breadcrumb-item active" aria-current="page">Ajudikasi</li>
                    <li class="breadcrumb-item"><a class="text-decoration-none text-danger"
                            href="/mediasi">Mediasi</a></li>
                    <li class="breadcrumb-item"><a class="text-decoration-none text-danger" href="/sela">Sela</a>
                    </li>
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
                @foreach ($ajudikasi as $content)
                    <tr>
                        <td>{{ showDateTime($content->tanggal, 'l, d-M-Y') }}</td>
                        <td>{{ $content->nomor_putusan }}</td>
                        <td>{{ $content->registrasi_sengketa }}</td>
                        <td>{{ $content->pemohon }}</td>
                        <td>{{ $content->termohon }}</td>
                        <td class="text-center">
                            <a href="{{ asset('storage/' . $content->file) }}" class="badge bg-info"><i
                                    class="bi bi-box-arrow-down"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-start">
        {{ $ajudikasi->links() }}
      </div>
@endsection
