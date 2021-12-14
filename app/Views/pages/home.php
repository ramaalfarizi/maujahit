<?= $this->extend('pages/layout') ?>
<?= $this->section('content') ?>
<!-- HERO-->
<header class="bg-dark py-5" id="hero">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">Support Local Tailor</h1>
                    <p class="lead fw-normal text-white-50 mb-4">Maujahit menyediakan layanan jahit dan permak online yang sesuai dengan kebutuhan user yang berbeda-beda.</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#transaksi">Yuk Order</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="#!">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="<?= base_url('assets/img/hero.jpg') ?>" alt="..." /></div>
        </div>
    </div>
</header>
<!--TRANSAKSI-->
<section class="py-5" id="transaksi">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">Bagaimana cara bertransaksi di Maujahit?</h2>
            </div>
            <div class="col-lg-8">
                <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <div class="col mb-5 h-100">
                        <div id="icon1" class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-bag"></i></div>
                        <div id="teks1">
                            <h2 class="h5">ORDER</h2>
                            <p class="mb-0">Pilih layanan dan jenis pakaian yang ingin dibantu oleh Maujahit dan selesaikan pembayaran secara online</p>
                        </div>
                    </div>
                    <div class="col mb-5 h-100">
                        <div id="icon2" class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-truck"></i></div>
                        <div id="teks2">
                            <h2 class="h5">PICKUP</h2>
                            <p class="mb-0">Maujahit akan menjemput pakaian sesuai waktu penjemputan ke lokasi anda yang telah didaftarkan</p>
                        </div>
                    </div>
                    <div class="col mb-5 mb-md-0 h-100">
                        <div id="icon3" class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-hourglass-bottom"></i></div>
                        <div id="teks3">
                            <h2 class="h5">PROSES</h2>
                            <p class="mb-0">Pakaian anda akan diproses dan diselesaikan oleh Maujahit dalam waktu 2x24 jam</p>
                        </div>
                    </div>
                    <div class="col h-100">
                        <div id="icon4" class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-geo-alt-fill"></i></div>
                        <div id="teks4">
                            <h2 class="h5">DELIVERY</h2>
                            <p class="mb-0">Maujahit akan menghubungi anda untuk mengantarkan pakaian yang telah selesai diproses. Mudah bukan?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TESTIMONI-->
<div class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10">
                <div class="text-center">
                    <div class="fs-4 mb-4 fst-italic">"Yaampun suka banget jujur, karena ukuran celana panjangnya sesuai sama yang aku pengenin, atasannya juga bisa dipadupadankan pake celana jeans! Cucok! Udah gitu jahitannnya juga rapi banget."</div>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="rounded-circle me-3" src="<?= base_url('assets/img/avatar.png') ?>" alt="..." />
                        <div class="fw-bold">
                            Annisa
                            <span class="fw-bold text-primary mx-1">/</span>
                            Customer-Jakarta
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--NEWS-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col">
                <div class="text-center">
                    <h2 class="fw-bolder">Berita Terkini</h2>
                    <hr class="mb-5">
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="<?= base_url('assets/img/news1.jpg') ?>" />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                        <a class="text-decoration-none link-dark stretched-link" href="https://callme.co.id/ini-tren-berbusana-di-era-new-normal-yang-kamu-wajib-tahu/" target="_blank">
                            <h5 class="card-title mb-3">Ini Tren Fashion di Era New Normal yang Kamu Wajib Tahu!</h5>
                        </a>
                        <p class="card-text mb-0">Setelah sekian lama kita hidup berdampingan dengan pandemmi Covid-19, kini seluruh dunia khususnya di Indonesia [...]</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="<?= base_url('assets/img/news2.jpg') ?>" />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                        <a class="text-decoration-none link-dark stretched-link" href="https://callme.co.id/pakaian-yang-pas-buat-aktivitas-mu-di-masa-new-normal/" target="_blank">
                            <h5 class="card-title mb-3">Pakaian yang Pas Buat Aktivitasmu di Masa New Normal</h5>
                        </a>
                        <p class="card-text mb-0">Ada banyak yang harus kamu persiapkan untuk memproteksi diri kamu di masa new normal ini [...]</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="<?= base_url('assets/img/news3.jpg') ?>" />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                        <a class="text-decoration-none link-dark stretched-link" href="https://callme.co.id/a-video-blog-post/" target="_blank">
                            <h5 class="card-title mb-3">Tips Menambah Keuntungan Dari Usaha Jahit</h5>
                        </a>
                        <p class="card-text mb-0">Pernahkan anda memikirkan ingin memiliki sebuah usaha dengan modal seadanya? Memang terdengar sedikit aneh bukan [...]</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>