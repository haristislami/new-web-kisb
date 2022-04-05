@extends('layouts.main')

@section('container-home')
    <div class="carousels-top">
        @foreach ($slider as $slider)
            @if ($loop->last)
                <div class="slides">
                    <small class="text-center bg-dark bg-opacity-50 rounded py-2 px-2">
                        <p class="fst-italic">{{ $slider->title }}</p>
                        <br><span class="d-none d-sm-block mb-2">{{ $slider->excerpt }}</span>
                        <a class="badge bg-danger text-decoration-none" href="/berita/{{ $slider->slug }}">View More</a>
                    </small>
                    <a href="/berita/{{ $slider->slug }}"> <img src="{{ asset('storage/' . $slider->image) }}"
                            class="img-fluid" style="width: 100%; " alt="berita-kisb"></a>
                </div>
            @endif
        @endforeach
    </div>
    <div class="container mt-5">
        <div class="row text-center">
            <h2>ABOUT KOMISI INFORMASI SUMATERA BARAT</h2>
            <p>Komisi Informasi sebagai lembaga mandiri yang berfungsi menjalankan Undang-undang dan peraturan
                pelaksanaannya,
                juga menetapkan petunjuk teknis standar layanan informasi publik berdasarkan peraturan Undang-Undang No. 14
                Tahun
                2008</p>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row text-center">
            <h2>OUR MISSION</h2>
            <p>
                1. Melakukan Konsolidasi Internal Kelembagaan <br>
                2. Menjalankan Tugas dengan Profesional <br>
                3. Menjalin Kerjasama dengan Berbagai Pihank untuk Mendorong Terwujudnya Keterbukaan Informasi <br>
                4. Melakukan Upaya-upaya Edukasi Keterbukaan Informasi Publik <br>
                5. Mengawal Terlaksananya Standar Layanan Informasi Publik pada Seluruh Badan Publik <br>
            </p>
        </div>
    </div>
    <div class="container mt-5 text-center">
        <h2 class="mb-3">WHATS NEW ?</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <a href="/jadwal"><img src="/img/paico-oficial-eaeKesI3TJQ-unsplash.jpg" class="card-img-top"
                            alt="jadwal-sidang"></a>
                    <div class="card-body">
                        <h5 class="card-title text-center">Jadwal Sidang</h5>
                        <p class="card-text text-center">Untuk mengetahui jadwal sidang sengketa informasi terbaru di Komisi
                            Informasi
                            Provinsi Sumatera Barat, silahkan klik berikut
                        </p>
                    </div>
                    <div class="card-body bg-danger text-center py-2">
                        <a href="/jadwal" class="card-text text-decoration-none text-light">View More...</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a href="/berita"><img src="/img/markus-winkler-k_Am9hKISLM-unsplash.jpg" class="card-img-top"
                            alt="berita-kisb"></a>
                    <div class="card-body">
                        <h5 class="card-title text-center">Berita KISB</h5>
                        <p class="card-text text-center">Untuk mengetahui berita terkait sengketa informasi dan lainnya di
                            Komisi
                            Informasi SUMBAR, silahkan klik tautan berikut
                        </p>
                    </div>
                    <div class="card-body bg-danger text-center py-2">
                        <a href="/berita" class="card-text text-decoration-none text-light">View More...</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a href="/putusan"><img src="/img/tingey-injury-law-firm-6sl88x150Xs-unsplash.jpg"
                            class="card-img-top" alt="putusan-kisb"></a>
                    <div class="card-body">
                        <h5 class="card-title text-center">Putusan</h5>
                        <p class="card-text text-center">Untuk mengetahui putusan sengketa informasi dan lainnya di Komisi
                            Informasi SUMBAR, silahkan klik tautan berikut</p>
                    </div>
                    <div class="card-body bg-danger text-center py-2">
                        <a href="/putusan" class="card-text text-decoration-none text-light">View More...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container " id="struktur">
        <hr class="featurette-divider">
        <h2 class="text-center fst-italic fw-normal">KOMISIONER KI SUMBAR</h2>
        <div class="row featurette mt-5">
            <div class="col-md-7">
                <h2 class="featurette-heading">KETUA KOMISI INFORMASI <span class="text-muted"><br> SUMATERA
                        BARAT.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some
                    exciting prose here.
                </p>
            </div>
            <div class="col-md-5">
                <img src="/img/nofal.png" class="img-fluid" style="width: 500px; height: auto;"
                    alt="ketua-nofal-wiska">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">WAKIL KETUA KOMISI INFORMASI <span class="text-muted">SUMATERA
                        BARAT.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea
                    of how this
                    layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5">
                <img src="/img/arif.png" class="img-fluid" style="width: 500px; height: auto;"
                    alt="wakil-ketua-arif">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">BIDANG <span class="text-muted">KELEMBAGAAN.</span></h2>
                <p class="lead">And yes, this is the last block of representative placeholder content. Again, not
                    really intended
                    to be actually read, simply here to give you a better view of what this would look like with some actual
                    content. Your content.</p>
            </div>
            <div class="col-md-5">
                <img src="/img/tanti.png" class="img-fluid" style="width: 500px; height: auto;" alt="komisioner-kelembagaan-tanti">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">BIDANG <span class="text-muted">PSI.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea
                    of how this
                    layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5">
                <img src="/img/adrian.png" class="img-fluid" style="width: 500px; height: auto;" alt="komisioner-psi-adrian">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">BIDANG <span class="text-muted">ASE.</span></h2>
                <p class="lead">And yes, this is the last block of representative placeholder content. Again, not
                    really intended
                    to be actually read, simply here to give you a better view of what this would look like with some actual
                    content. Your content.</p>
            </div>
            <div class="col-md-5">
                <img src="/img/fit.png" class="img-fluid" style="width: 500px; height: auto;" alt="komisioner-ase-arfitriati">
            </div>
        </div>

        <hr class="featurette-divider">

        <h2 class="text-center fst-italic fw-normal">MEET OUR TEAM</h2>
        <div class="container" id="carousel">
            <div class="row mt-5">
                <div class="col-md-12">
                    <div id="cardindicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#cardindicators" data-bs-slide-to="0"
                                class="active bg-danger" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#cardindicators" data-bs-slide-to="1"
                                class="bg-danger" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#cardindicators" data-bs-slide-to="2"
                                class="bg-danger" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#cardindicators" data-bs-slide-to="3"
                                class="bg-danger" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <div class="img-area justify-content-center mb-3">
                                            <img src="/img/anggi.png" class="img-fluid" alt="">
                                        </div>
                                        <h2>Anggi Pratama, S.T</h2>
                                        <p>ASISTEN AHLI</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="img-area justify-content-center mb-3">
                                            <img src="/img/harist.jpg" class="img-fluid" alt="">
                                        </div>
                                        <h2>Harist Islami, S.T</h2>
                                        <p>ASISTEN AHLI</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="img-area justify-content-center mb-3">
                                            <img src="/img/tiwi.png" class="img-fluid" alt="">
                                        </div>
                                        <h2>Tiwi Utami, S.H</h2>
                                        <p>ASISTEN AHLI</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <div class="img-area justify-content-center mb-3">
                                            <img src="/img/reza.png" class="img-fluid" alt="">
                                        </div>
                                        <h2>Reza Rezki Herlinda, S.E</h2>
                                        <p>ASISTEN AHLI</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="img-area justify-content-center mb-3">
                                            <img src="/img/hervina.jpeg" class="img-fluid" alt="">
                                        </div>
                                        <h2>Hervina Harbi, S.Ag</h2>
                                        <p>SEKRETARIAT</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="img-area justify-content-center mb-3">
                                            <img src="/img/kiki.jpeg" class="img-fluid" alt="">
                                        </div>
                                        <h2>Kiki Eko Saputra, S.H</h2>
                                        <p>SEKRETARIAT</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <div class="img-area justify-content-center mb-3">
                                            <img src="/img/hendri.jpeg" class="img-fluid" alt="">
                                        </div>
                                        <h2>Muhammad Hendri</h2>
                                        <p>SEKRETARIAT</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="img-area justify-content-center mb-3">
                                            <img src="/img/yuhandra.jpeg" class="img-fluid" alt="">
                                        </div>
                                        <h2>Yuhandra</h2>
                                        <p>SEKRETARIAT</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="img-area justify-content-center mb-3">
                                            <img src="/img/icon-ki.png" class="img-fluid" alt="">
                                        </div>
                                        <h2>Gusdi Riko Putra</h2>
                                        <p>SEKRETARIAT</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <div class="img-area justify-content-center mb-3">
                                            <img src="/img/icon-ki.png" class="img-fluid" alt="">
                                        </div>
                                        <h2>Desmon Eka Putra</h2>
                                        <p>SEKRETARIAT</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#cardindicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-danger opacity-25" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#cardindicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-danger opacity-25" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
