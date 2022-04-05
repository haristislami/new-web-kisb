@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $berita->title }}</h2>
            <a href="/dashboard/berita/" class="btn btn-success"><span data-feather="arrow-left"></span> Back to All
                Post</a>
            <a href="/dashboard/berita/{{ $berita->slug }}/edit" class="btn btn-warning"><span
                    data-feather="edit"></span> Edit</a>

            <form action="/dashboard/berita/{{ $berita->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Yakin mau menghapus post ini?')"><span
                        data-feather="x-circle"></span> Delete</button>
            </form>
            @if ($berita->image)
            <div style="">
                <img src="{{ asset('storage/'. $berita->image) }}" alt="{{ $berita->category->name }}"
                    class="img-fluid mt-3">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $berita->category->name }}"
                alt="{{ $berita->category->name }}" class="img-fluid mt-3">
            @endif

            <article class="my-3 fs-5">
                {!! $berita->body !!}
            </article>
        </div>
    </div>
</div>

@endsection