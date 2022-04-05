@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Putusan Ajudikasi</h1>
</div>
<div class="col-lg-8">
    <form action="/dashboard/ajudikasi" method="POST" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nomor_putusan" class="form-label">Nomor Putusan</label>
            <input type="text" class="form-control @error('nomor_putusan')is-invalid @enderror" id="nomor_putusan"
                name="nomor_putusan" autofocus required value="{{ old('nomor_putusan') }}">
            @error('nomor_putusan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control @error('tanggal')is-invalid @enderror" id="tanggal" name="tanggal"
                required value="{{ old('tanggal') }}">
            @error('tanggal')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="registrasi_sengketa" class="form-label">Registrasi Sengketa</label>
            <input type="text" class="form-control @error('registrasi_sengketa')is-invalid @enderror"
                id="registrasi_sengketa" name="registrasi_sengketa" required value="{{ old('registrasi_sengketa') }}">
            @error('registrasi_sengketa')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pemohon" class="form-label">Pemohon</label>
            <input type="text" class="form-control @error('pemohon')is-invalid @enderror" id="pemohon" name="pemohon"
                required value="{{ old('pemohon') }}">
            @error('pemohon')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="termohon" class="form-label">Termohon</label>
            <input type="text" class="form-control @error('termohon')is-invalid @enderror" id="termohon" name="termohon"
                required value="{{ old('termohon') }}">
            @error('termohon')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">Upload file</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('file')is-invalid @enderror" type="file" id="file" name="file">
            @error('file')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>

<script>

</script>

@endsection