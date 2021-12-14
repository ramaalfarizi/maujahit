<?= $this->extend('pages/layout') ?>
<?= $this->section('content') ?>
<!--ABOUT-->
<header class="py-5 bg-light" id="hero">
    <div class="container px-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-6">
                <div class="text-center my-5">
                    <h1 class="fw-bolder mb-3">Temukan Yang Kamu Butuhkan</h1>
                    <p class="lead fw-normal text-muted mb-4">Maujahit menyediakan layanan yang sesuai dengan kebutuhan setiap user yang berbeda, Mulai berkolaborasi bersama kami</p>
                    <a class="btn btn-primary btn-lg" href="#scroll-target">Yuk Gabung</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- CARD 1 -->
<section class="py-5" id="scroll-target">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="<?= base_url('assets/img/about1.jpg') ?>" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Penjahit Lokal</h2>
                <p class="lead fw-normal text-muted mb-0">Tingkatkan skill dan pengetahuan menjahit bersama kami melalui workshop dan pelatihan di Maujahit Academy</p>
            </div>
        </div>
    </div>
</section>
<!-- CARD 2 -->
<section class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="<?= base_url('assets/img/about2.jpg') ?>" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Jahit Personal</h2>
                <p class="lead fw-normal text-muted mb-0">Ngga perlu pusing cari penjahit. Sekarang kamu dapat jahit baju lebih mudah tanpa ada minimal order</p>
            </div>
        </div>
    </div>
</section>
<!-- CARD 3 -->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="<?= base_url('assets/img/about3.jpg') ?>" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Brand Owner</h2>
                <p class="lead fw-normal text-muted mb-0">Hasilkan cuan lebih tinggi dengan MOQ yang rendah, dan kualitas jahitan yang rapi</p>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>