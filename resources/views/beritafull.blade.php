@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-12">
            <div class="row mb-5">
                <h2 class="mb-3">{{ $berita->title }}</h2>
                <p class="text-muted"> <i class="bi bi-person-check"> : <a
                            href="/berita?author={{ $berita->author->username }}"
                            class="text-decoration-none">{{$berita->author->name }}</a></i> -
                    <i class="bi bi-tags"> : <a href="/berita?category={{ $berita->category->slug }}"
                            class="text-decoration-none">{{$berita->category->name }}</a></i> -
                    <i class="bi bi-clock"> : {{ $berita->created_at->diffForHumans() }} </i>
                </p>
                @if ($berita->image)
                <img src="{{ asset('storage/'. $berita->image) }}" alt="{{ $berita->category->name }}"
                    class="img-fluid">
                <figcaption class="fst-italic text-muted text-uppercase">Dokumentasi : {{ $berita->author->name }}
                </figcaption>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $berita->category->name }}"
                    alt="{{ $berita->category->name }}" class="img-fluid">
                <figcaption class="fst-italic text-muted text-uppercase">Dokumentasi : {{ $berita->author->name }}
                </figcaption>
                @endif
                <article class="my-3 fs-5">
                    {!! $berita->body !!}
                </article>
                <p>
                <h5 class="text-end text-danger">Bagikan :
                    <a href="whatsapp://send?text={{ $berita->title }} https://komisiinformasi.sumbarprov.go.id/berita/{{ $berita->slug }}"
                        data-action="share/whatsapp/share"> <i
                            class="bi bi-whatsapp bg-success text-light py-1 px-2 rounded"></i></a>
                    <a href="https://www.facebook.com/sharer/sharer.php? u=https://komisiinformasi.sumbarprov.go.id/berita/{{ $berita->slug }}"
                        target="_blank" data-action="share/facebook/share"> <i
                            class="bi bi-facebook bg-primary text-light py-1 px-2 rounded"></i></a>
                    <a href="https://telegram.me/share/url?url=https://komisiinformasi.sumbarprov.go.id/berita/{{ $berita->slug }}&text={{ $berita->title }}"
                        target="_blank" data-action="share/twitter/share"> <i
                            class="bi bi-telegram bg-secondary text-light py-1 px-2 rounded"></i></a>
                    <a href="http://twitter.com/share?text=Check this post on Komisi Informasi Sumbar&url=https://komisiinformasi.sumbarprov.go.id/berita/{{ $berita->slug }}&hashtags=kisumbar,keterbukaaninformasi,sumaterabarat,infosumbar"
                        target="_blank" data-action="share/telegram/share"> <i
                            class="bi bi-twitter bg-info text-light py-1 px-2 rounded"></i></a>
                </h5>
                </p>
                <a href="/berita" class="d-block mt-3">Kembali ke halaman berita</a>
            </div>
            <hr class="featurette-divider">
            <h4>BERITA KISB LAINNYA</h4>
            <div class="row">
                @foreach ($another as $another)

                <a href="/berita/{{ $another->slug }}">{{ $another->title }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection