@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Putusan Ajudikasi</h1>
  </div>
  <div class="col-lg-8">
      <form action="/dashboard/mediasi/{{ $putusan->id }}" method="POST" class="mb-5" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="nomor_putusan" class="form-label">Nomor Putusan</label>
          <input type="text" class="form-control @error('nomor_putusan')is-invalid @enderror" id="nomor_putusan" name="nomor_putusan" autofocus required value="{{ old('nomor_putusan', $putusan->nomor_putusan) }}">
            @error('nomor_putusan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="tanggal" class="form-label">Tanggal</label>
          <input type="date" class="form-control @error('tanggal')is-invalid @enderror" id="tanggal" name="tanggal" required value="{{ old('tanggal', $putusan->tanggal) }}">
            @error('tanggal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="registrasi_sengketa" class="form-label">Registrasi Sengketa</label>
          <input type="text" class="form-control @error('registrasi_sengketa')is-invalid @enderror" id="registrasi_sengketa" name="registrasi_sengketa" required value="{{ old('registrasi_sengketa', $putusan->registrasi_sengketa) }}">
          @error('registrasi_sengketa')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="pemohon" class="form-label">Pemohon</label>
          <input type="text" class="form-control @error('pemohon')is-invalid @enderror" id="pemohon" name="pemohon" required value="{{ old('pemohon', $putusan->pemohon) }}">
          @error('pemohon')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="termohon" class="form-label">Termohon</label>
          <input type="text" class="form-control @error('termohon')is-invalid @enderror" id="termohon" name="termohon" required value="{{ old('termohon', $putusan->termohon) }}">
          @error('termohon')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">Upload File</label>
            <input type="hidden" name="oldFile" value="{{ $putusan->file }}">
            @if ($putusan->file)
              <a href="{{ url('storage/' . $putusan->file) }}" class="d-block btn btn-info mb-3 text-light">Lihat File</a>
            @else
              <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
            <input class="form-control @error('file')is-invalid @enderror" type="file" id="file" name="file" onchange="previewfile()">
            @error('file')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
          </div>
        <button type="submit" class="btn btn-primary">Update Putusan</button>
      </form>
  </div>

  <script>

  </script>

@endsection