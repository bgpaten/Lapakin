<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7ae1982935.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        .col .btn {
            color: #cecdce;
            outline: 1px solid #cecdce;
        }

        .col .btn:hover {
            outline: 1px solid #e6e3fb;
            background-color: #e6e3fb;
            color: #ffff;
        }
    </style>
</head>

<body style="font-family: 'Open Sans', sans-serif;">
    <?php
    include "../tugas5/array.php";
    ?>

    <nav class="navbar fixed-top navbar-expand-lg" style="background-color: white;">
        <div class="container-fluid px-5">
            <a class="navbar-brand fw-bold fs-4" href="#"><img src="img/lapak.png" style="width: 35%;" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <form class="mt-2 px-5" role="search">
                        <input class="form-control me-2 mx-5 px-5" type="search" aria-label="Search">
                    </form>
                    <?php
                    foreach ($menu as $mnu) {
                    ?>
                        <li class="nav-item dropdown mx-4 mt-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-exp4nded="false" name="drop">
                                <?= $mnu["menu"] ?>
                            </a>

                            <ul class="dropdown-menu">
                                <?php
                                foreach ($sub_menu as $smnu) {
                                    if ($smnu["menu_id"] == $mnu["id"]) {
                                ?>
                                        <li><a class="dropdown-item" href="#"><?= $smnu["submenu"] ?></a></li>
                                <?php
                                    }
                                }
                                ?>
                            </ul>
                        </li>
                    <?php
                    }
                    ?>

                </div>
                <div class="navbar-nav ms-auto">
                    <a class="nav-link fw-medium text-secondary" href="login.html">Daftar</a>
                    <a class="nav-link fw-medium text-secondary" href="login.html">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid" style="margin-top: 5%; padding-left: 6%; padding-right: 6%;">
        <div class="container-fluid border-bottom border-secondary-subtle">
            <p class="text-secondary fw-normal" style="font-size: 13px;">
                <span class="me-1">Home ></span>
                <span class="me-1">Sepeda ></span>
                <span class="me-1">Fullbike ></span>
                <span class="me-1">MTB ></span>
                <span class="text-danger">MTB 27.5 POLYGON PREMIER 4 - SEPEDA POLYGON PREMIER...</span>
            </p>
        </div>
    </div>
    <div class="container-fluid mt-5" style="padding-left: 6%; padding-right: 6%;">
        <div class="row">
            <div class="col-md-4">
                <img src="img/spd.webp" alt="" width="100%">
                <div class="row mt-3">
                    <div class="col-md-4">
                        <img src="img/hijau.png" alt="" width="100%">
                    </div>
                    <div class="col-md-4">
                        <img src="img/hijau.png" alt="" width="100%">
                    </div>
                    <div class="col-md-4">
                        <img src="img/hijau.png" alt="" width="100%">
                    </div>
                </div>
                <div class="text-center mt-3">
                    <p class="text-secondary fw-normal" style="font-size: 13px;">
                        <i class="far fa-heart"></i>
                        <span class="me-3">Favoritkan</span>
                        |
                        <i class="fas fa-share-alt ms-3"></i>
                        <span>Bagikan</span>
                    </p>
                </div>
                <p class="fw-bold">Diskon Menanti Kamu di App !</p>
                <div class="row">
                    <div class="col-md-7">
                        <p style="font-size: 13px;"> Scan kodenya untuk bayar di app. Ada banyak voucher untuk kamu pakai</p>
                    </div>
                    <div class="col-md-5">
                        <button type="button" class="btn btn-outline-secondary"><span class="text-black fw-bold"><i class="fas fa-qrcode"></i> QR-Code</span></button>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="container-fluid border-bottom border-secondary-subtle pb-3">
                    <img src="img/ban.png" class="img-fluid" alt="...">
                    <h4 class="fw-height mt-4">MTB 27.5 Polygon Premier 4 -Sepeda Polygon Premier 4 2023</h4>
                    <p style="font-size: 13px;">
                        <i class="fas fa-star" style="color: #f8ab00;"></i>
                        <i class="fas fa-star" style="color: #f8ab00;"></i>
                        <i class="fas fa-star" style="color: #f8ab00;"></i>
                        <i class="fas fa-star" style="color: #f8ab00;"></i>
                        <i class="fas fa-star-half" style="color: #f8ab00;"></i>
                        <span>117 Ulasan</span>
                        <span class="text-secondary fw-normal ms-2">
                            <i class="fas fa-circle"></i>
                            128 Terjual
                        </span>
                    </p>
                    <p class="mt-5 mb-1"><span class="text-secondary text-decoration-line-through" style="font-size: 15px;"> Rp6.800.000</span>
                    <h1 class="text-danger fw-bolder">Rp5.000.000 <span class="text-danger fw-normal mb-5" style="font-size: 13px;">Hemat 20%</span></h1>
                </div>
                <div class="container-fluid border-bottom border-secondary-subtle py-4  ">
                    <div class="row g-3 pe-3">
                        <div class="col-2">
                            <label class="col-form-label me-0 fw-bold">Size Frame</label>
                        </div>
                        <div class="col-auto ps-0">
                            <select class="custom-select">
                                <option selected>Pilih Jenis...</option>
                                <option value="1">s 15</option>
                                <option value="2">m 17</option>
                            </select>
                        </div>
                    </div>
                    <span class="text-danger fw-normal mb-5" style="font-size: 13px;">Stok Terbatas! Sisa 3 lagi!</span>
                </div>
                <div class="container-fluid border-bottom border-secondary-subtle py-4  ">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="fw-bold">Pengiriman</p>
                        </div>
                        <div class="col-md-3">
                            <p class="text-secondary mb-1" style="font-size: 13px;">Lokasi Pelapak</p>
                            <p>Kab.Bogor</p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-secondary mb-1" style="font-size: 13px;">Tujuan Pengiriman</p>
                            <p>Pilih lokasi anda</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-9">
                            <div class="row g-3 align-items-center">
                                <div class="col-8">
                                    <select class="custom-select">
                                        <option selected>J&T Regular</option>
                                        <option value="1">JNE Regular</option>
                                        <option value="2">JNE Trucking</option>
                                        <option value="3">AMBIL Sendiri</option>
                                    </select>
                                </div>
                                <div class="col-auto ps-0">
                                    <label class="col-form-label me-0 fw-bold" style="font-size: 13px;">Tersedia 4 kurir</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex mt-5">
                    <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-comment-dots"></i> Chat</button>
                    <button type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-cart-plus"></i> Masukkan Keranjang</button>
                    <button type="button" class="btn btn-danger btn-sm">Beli Sekarang</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid border-bottom border-secondary-subtle mt-5 pb-3" style="padding-left: 6%; padding-right: 6%;">
        <div class="row">
            <div class="col-md-4">
                <p class="fw-bold">Informasi Barang</p>
            </div>
            <div class="col-md-8">
                <div class="container-fluid">
                    <p class="text-secondary fw-bold mb-1" style="font-size: 15px;">Kondisi Barang</p>
                    <h6><span class="badge bg-danger">Baru</span></h6>
                    <div class="row mt-3">
                        <div class="col-md-2">
                            <p class="text-secondary fw-bold mb-2" style="font-size: 15px;">Spesifikasi</p>
                            <p class="text-secondary mb-1" style="font-size: 13px;">Kategori</p>
                            <p class="text-secondary mb-1" style="font-size: 13px;">Berat</p>
                            <p class="text-secondary mb-1" style="font-size: 13px;">Asal Barang</p>
                            <p class="text-secondary mb-1" style="font-size: 13px;">Bahan</p>
                            <p class="text-secondary mb-1" style="font-size: 13px;">Brand</p>
                            <p class="text-secondary mb-1" style="font-size: 13px;">Tipe</p>
                            <p class="text-secondary mb-1" style="font-size: 13px;">Ukuran</p>
                        </div>
                        <div class="col-md-8">
                            <p class="mb-2" style="font-size: 13px; color: white;">a</p>
                            <p class="text-danger mb-1" style="font-size: 13px;">: MTB</p>
                            <p class="text-secondary mb-1" style="font-size: 13px;">: 20 Kilogram</p>
                            <p class="text-secondary mb-1" style="font-size: 13px;">: Lokal</p>
                            <p class="text-secondary mb-1" style="font-size: 13px;">: Alloy</p>
                            <p class="text-danger mb-1" style="font-size: 13px;">: United</p>
                            <p class="text-secondary mb-1" style="font-size: 13px;">: XC (Cross Country)</p>
                            <p class="text-secondary mb-1" style="font-size: 13px;">: s m</p>
                        </div>
                    </div>
                    <p class="text-secondary fw-bold mb-2 mt-3" style="font-size: 15px;">Deskripsi</p>
                    <p class="text-secondary mb-2" style="font-size: 12px;">Cargloss CF Helm Half Face Black Doff + Visor Bogo Flat</p>
                    <p class="text-secondary mb-1 lh-base" style="font-size: 12px; text-align: justify;">
                        Helm half face berbahan ABS Thermoplastic yang sangat kuat dan aman, didesain bergaya retro dengan tambahan visor bogo agar dapat melidungi anda dari debu saat berkendara,
                        dilengkapi dengan sistem pengait Quick Relase Buckle, Knockdown ( Busa bantalan pipi dan pembungkus kepala dapat dilepas dan di cuci ), Telah berstandar SNI ( Standar Nasional Indonesia ).
                    </p>
                    <p class="text-secondary mt-3 mb-0 lh-base" style="font-size: 12px; text-align: justify;">
                        SPESIFIKASI : frame alloy boost Fork venom air boost Crank single speed 34t hollowtech 2 Rd shimano deore 5100 11 speed Sproket 11 speed
                    </p>
                    <p class="text-secondary mb-1 lh-base" style="font-size: 12px; text-align: justify;">
                        WARBA : GREY BLACK
                    </p>
                    <p class="text-secondary fw-bold mb-2 mt-3" style="font-size: 15px;">Tags</p>
                    <div class="d-grid gap-2 d-md-flex mt-5">
                        <button type="button" class="btn btn-secondary btn-sm">Sepeda</button>
                        <button type="button" class="btn btn-secondary btn-sm">MTB</button>
                        <button type="button" class="btn btn-secondary btn-sm">Polygon</button>
                        <button type="button" class="btn btn-secondary btn-sm">Premier</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid border-bottom border-secondary-subtle pb-3 pt-3" style="padding-left: 6%; padding-right: 6%;">
        <div class="row">
            <div class="col-md-4">
                <p class="fw-bold">Informasi Pelapak</p>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-3 me-0">
                        <img src="img/merah.png" alt="" height="100" width="150">
                    </div>
                    <div class="col-md-8 ps-0">
                        <button type="button" class="btn btn-outline-secondary btn-sm float-end"><span class="text-black fw-bold"><i class="fas fa-store"></i> Kunjungi Lapak</span></button>
                        <p class="fw-bold mb-0">Samsul Store</p>
                        <p class="text-secondary mb-1" style="font-size: 13px;">Kabupaten Bogor</p>
                        <img src="img/super.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 border-bottom border-secondary-subtle pb-3" style="padding-left: 6%; padding-right: 6%;">
        <div class="row">
            <div class="col-md-4">
                <p class="fw-bold">Ulasan Barang</p>
            </div>
            <div class="col-md-8">
                <p class="fw-bold mb-1">Daftar Ulasan</p>
                <div class="row">
                    <div class="col-md-5 pe-5">
                        <div class="d-grid gap-2 d-md-flex">
                            <button type="button" class="btn btn-outline-danger btn-sm">Semua</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm mx-md-1">Dengan Foto</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm">Dengan Deskripsi</button>
                        </div>
                        <div class="d-grid gap-2 d-md-flex mx-auto mt-2 justify-content-md-start">
                            <button type="button" class="btn btn-outline-secondary btn-sm px-md-3"><span class="text-black" style="font-size: 12px;"><i class="fas fa-star" style="color: #f8ab00;"></i> 1</span></button>
                            <button type="button" class="btn btn-outline-secondary btn-sm px-md-3"><span class="text-black" style="font-size: 12px;"><i class="fas fa-star" style="color: #f8ab00;"></i> 2</span></button>
                            <button type="button" class="btn btn-outline-secondary btn-sm px-md-3"><span class="text-black" style="font-size: 12px;"><i class="fas fa-star" style="color: #f8ab00;"></i> 3</span></button>
                            <button type="button" class="btn btn-outline-secondary btn-sm px-md-3"><span class="text-black" style="font-size: 12px;"><i class="fas fa-star" style="color: #f8ab00;"></i> 4</span></button>
                            <button type="button" class="btn btn-outline-secondary btn-sm px-md-3"><span class="text-black" style="font-size: 12px;"><i class="fas fa-star" style="color: #f8ab00;"></i> 5</span></button>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="container-fluid border-bottom border-secondary-subtle pb-5">
                            <p class="mb-0">
                                <i class="fas fa-star" style="color: #f8ab00;"></i>
                                <i class="fas fa-star" style="color: #f8ab00;"></i>
                                <i class="fas fa-star" style="color: #f8ab00;"></i>
                                <i class="fas fa-star" style="color: #f8ab00;"></i>
                                <i class="fas fa-star" style="color: #f8ab00;"></i>
                            </p>
                            <p class="fw-bold mb-0">Barang Bagus Banget!</p>
                            <img class="float-end" src="img/biru.png" alt="" width="85" height="70">
                            <p class="text-secondary mb-5" style="font-size: 13px;">Ditulis 15 Jan, 2023</p>
                            <p class="text-secondary mb-0" style="font-size: 13px;"><i class="fas fa-circle"></i> Ecep Surecep</p>
                            <p class="text-secondary float-end mt-0" style="font-size: 13px;"><i class="fas fa-thumbs-up"></i> 0 <span class="ms-1"><i class="fas fa-thumbs-down"></i> 0</span></p>
                        </div>
                        <div class="container-fluid border-bottom border-secondary-subtle pb-5">
                            <p class="mb-0 mt-4">
                                <i class="fas fa-star" style="color: #f8ab00;"></i>
                                <i class="fas fa-star" style="color: #f8ab00;"></i>
                                <i class="fas fa-star" style="color: #f8ab00;"></i>
                                <i class="fas fa-star" style="color: #f8ab00;"></i>
                                <i class="fas fa-star" style="color: #f8ab00;"></i>
                            </p>
                            <p class="fw-bold mb-0">Mantap Surantap Slur!</p>
                            <img class="float-end" src="img/biru.png" alt="" width="85" height="70">
                            <p class="text-secondary mb-5" style="font-size: 13px;">Ditulis 20 Jan. 2023</p>
                            <p class="text-secondary mb-0" style="font-size: 13px;"><i class="fas fa-circle"></i> Bejo Paijo</p>
                            <p class="text-secondary float-end" style="font-size: 13px;"><i class="fas fa-thumbs-up"></i> 0 <span class="ms-1"><i class="fas fa-thumbs-down"></i> 0</span></p>
                        </div>
                        <div class="container-fluid">
                            <p class="mb-0 mt-4">
                                <i class="fas fa-star" style="color: #f8ab00;"></i>
                                <i class="fas fa-star" style="color: #f8ab00;"></i>
                                <i class="fas fa-star" style="color: #f8ab00;"></i>
                                <i class="fas fa-star" style="color: #f8ab00;"></i>
                                <i class="fas fa-star" style="color: #f8ab00;"></i>
                            </p>
                            <p class="fw-bold mb-0">Barange Juoos Tenan !</p>
                            <img class="float-end" src="img/biru.png" alt="" width="85" height="70">
                            <p class="text-secondary mb-5" style="font-size: 13px;">Ditulis 28 Jan. 2023</p>
                            <p class="text-secondary mb-0" style="font-size: 13px;"><i class="fas fa-circle"></i> Suparman Abadi</p>
                            <p class="text-secondary float-end" style="font-size: 13px;"><i class="fas fa-thumbs-up"></i> 0 <span class="ms-1"><i class="fas fa-thumbs-down"></i> 0</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid border-bottom border-secondary-subtle pt-5 pb-3" style="padding-left: 6%; padding-right: 6%;">
        <div class="row mb-2">
            <div class="col-md-6">
                <p class="fs-5"><strong class="me-2">Pilihan Lain Untukmu</strong></p>
            </div>
            <div class="col-md-6">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-outline-secondary btn-sm justify-content-md-end py-0"><small style="font-size: 15px;"><i class="fas fa-grip-horizontal"></i> Lihat Semua</small></button>
                </div>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-delay="100">
            <div class="row row-cols-1 row-cols-md-6 g-4">
                <div class="col">
                    <div class="card">
                        <img src="img/biru.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-9">Produk Populer</p>
                            <p class="card-text fs-5 fw-medium mb-0">Rp45.900</p>
                            <p> <span class="text-secondary text-decoration-line-through" style="font-size: 15px;"> Rp18.000</span> <span class="text-danger fw-semibold ms-1" style="font-size: 15px;">-78%</span></p>
                            <div class="row row-cols-1 row-cols-md-2 g-1 mt-1">
                                <div class="col-md-4">
                                    <p class="text-secondary" style="font-size: 13px;"><i class="fas fa-star" style="color: #f8ab00;"></i> 4.3</p>
                                </div>
                                <div class="col">
                                    <p class="text-secondary" style="font-size: 13px;">Terjual 145</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img/hijau.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-9">Produk Populer</p>
                            <p class="card-text fs-5 fw-medium mb-0">Rp120.000</p>
                            <p> <span class="text-secondary text-decoration-line-through" style="font-size: 15px;"> Rp60.000</span> <span class="text-danger fw-semibold ms-1" style="font-size: 15px;">-50%</span></p>
                            <div class="row row-cols-1 row-cols-md-2 g-1 mt-1">
                                <div class="col-md-4">
                                    <p class="text-secondary" style="font-size: 13px;"><i class="fas fa-star" style="color: #f8ab00;"></i> 4.0</p>
                                </div>
                                <div class="col">
                                    <p class="text-secondary" style="font-size: 13px;">Terjual 129</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img/biru.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-9">Produk Populer</p>
                            <p class="card-text fs-5 fw-medium mb-0">Rp50.000</p>
                            <p> <span class="text-secondary text-decoration-line-through" style="font-size: 15px;"> Rp10.000</span> <span class="text-danger fw-semibold" style="font-size: 15px;">-90%</span></p>
                            <div class="row row-cols-1 row-cols-md-2 g-1 mt-1">
                                <div class="col-md-4">
                                    <p class="text-secondary" style="font-size: 13px;"><i class="fas fa-star" style="color: #f8ab00;"></i> 5.0</p>
                                </div>
                                <div class="col">
                                    <p class="text-secondary" style="font-size: 13px;">Terjual 900</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img/hijau.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-9">Produk Populer</p>
                            <p class="card-text fs-5 fw-medium mb-0">Rp100.900</p>
                            <p> <span class="text-secondary text-decoration-line-through" style="font-size: 15px;"> Rp70.000</span> <span class="text-danger fw-semibold ms-1" style="font-size: 15px;">-30%</span></p>
                            <div class="row row-cols-1 row-cols-md-2 g-1 mt-1">
                                <div class="col-md-4">
                                    <p class="text-secondary" style="font-size: 13px;"><i class="fas fa-star" style="color: #f8ab00;"></i> 4.1</p>
                                </div>
                                <div class="col">
                                    <p class="text-secondary" style="font-size: 13px;">Terjual 150</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img/biru.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-9">Produk Populer</p>
                            <p class="card-text fs-5 fw-medium mb-0">Rp99.900</p>
                            <p> <span class="text-secondary text-decoration-line-through" style="font-size: 15px;"> Rp30.900</span> <span class="text-danger fw-semibold ms-1" style="font-size: 15px;">-30%</span></p>
                            <div class="row row-cols-1 row-cols-md-2 g-1 mt-1">
                                <div class="col-md-4">
                                    <p class="text-secondary" style="font-size: 13px;"><i class="fas fa-star" style="color: #f8ab00;"></i> 4.1</p>
                                </div>
                                <div class="col">
                                    <p class="text-secondary" style="font-size: 13px;">Terjual 105</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img/hijau.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-9">Produk Populer</p>
                            <p class="card-text fs-5 fw-medium mb-0">Rp200.900</p>
                            <p> <span class="text-secondary text-decoration-line-through" style="font-size: 15px;"> Rp99.900</span> <span class="text-danger fw-semibold ms-1" style="font-size: 15px;">-30%</span></p>
                            <div class="row row-cols-1 row-cols-md-2 g-1 mt-1">
                                <div class="col-md-4">
                                    <p class="text-secondary" style="font-size: 13px;"><i class="fas fa-star" style="color: #f8ab00;"></i> 4.4</p>
                                </div>
                                <div class="col">
                                    <p class="text-secondary" style="font-size: 13px;">Terjual 199</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="fw-bold mb-0 mt-5" style="font-size: 15px;">
            Pencarian Terkait :
            <span class="text-danger fw-normal ms-3">Promo Sepeda Lipat Listrik</span>
            <span class="text-danger fw-normal ms-3">Sepeda Lipat Listrik Battery Samsung</span>
            <span class="text-danger fw-normal ms-3">TS Sepeda Lipat Listrik</span>
            <span class="text-danger fw-normal ms-3">Es TS Sepeda Lipat Listrik</span>
        </p>
    </div>
    <div class="container-fluid pb-5">
        <nav class="navbar navbar-expand-lg border-bottom border-secondary-subtle">
            <div class="container-fluid">
                <img src="img/lapak.png" width="120" height="24">
                <div class="collapse navbar-collapse" id="navbarText">
                    <p class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">
                        situs jual beli online mudah & terpercaya
                    </p>

                    <span class="navbar-text">Temukan kami di :</span>
                    <img class="img ms-3" src="img/medos.png" alt="">
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid pb-5 px-5">
        <div class="row">
            <div class="col-md-3">
                <div class="col mb-3">
                    <button class="btn">Bantuan (Hubungi Kami)</button>
                </div>
                <div class="col mb-3">
                    <button class="btn">FAQ (Tanya Jawab)</button>
                </div>
                <div class="col">
                    <button class="btn">Panduan Keamanan</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4 px-5">
                        <p class="text-secondary fw-medium mb-1 fs-6">Lapakin</p>
                        <small class="text-secondary" style="font-size: 13px;">Tentang Lapakin</small>
                        <small class="text-secondary" style="font-size: 13px;">Aturan Penggunaan</small>
                        <small class="text-secondary" style="font-size: 13px;">Kebijakan Privasi</small>
                        <small class="text-secondary" style="font-size: 13px;">Blog Lapakin</small>
                        <p><small class="text-secondary" style="font-size: 13px;">Karir di Lapakin</small></p>
                    </div>
                    <div class="col-md-4 px-5">
                        <p class="text-secondary fw-medium mb-1 fs-6">Pelapak</p>
                        <small class="text-secondary" style="font-size: 13px;">Cara Berjualan</small>
                        <small class="text-secondary" style="font-size: 13px;">Keuntungan Jualan</small>
                        <p><small class="text-secondary" style="font-size: 13px;">Index Merk</small></p>
                    </div>
                    <div class="col-md-4 px-5">
                        <p class="text-secondary fw-medium mb-1 fs-6">Pembeli</p>
                        <small class="text-secondary" style="font-size: 13px;">Cara Belanja</small>
                        <small class="text-secondary" style="font-size: 13px;">Pembayaran</small>
                        <small class="text-secondary" style="font-size: 13px;">Jaminan Aman</small>
                        <p class="text mb-0"><small class="text-secondary" style="font-size: 13px;">Jasa Pengadaan</small></p>
                        <p><small class="text-secondary" style="font-size: 13px;">Halaman Tag</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="img/google.png" alt="">
            </div>
        </div>
    </div>
    <div class="container-fluid border-top border-secondary-subtle py-2">
        <small class="text-secondary" style="font-size: 13px;">&copy 2023 Hak Cipta Terpelihara PT Lapakin.com</small>
    </div>


    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>