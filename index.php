<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7ae1982935.js" crossorigin="anonymous"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        .text-icon {
            color: black;
        }

        .text-icon:hover {
            color: #cf3243;
        }

        .row .col-12 .card:hover {
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
        }

        .d-grid .btn {
            color: black;
            outline: 1px solid #cecdce;
        }

        .d-grid .btn:hover {
            background-color: #e6e3fb;
            outline: 0px solid #e6e3fb;
        }

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

<body>
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
    <div class="container-fluid mt-5 px-5">
        <div id="carouselExampleIndicators" class="carousel slide mt-4">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slide1.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/slide2.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/slide3.webp" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container-fluid px-5 mt-5">
        <div class="row">
            <div class="col-md-2">
                <div class="text-center">
                    <i class="fas fa-medal fa-lg" style="font-size: 30px; color: #f3ac55; background-color: #e7e5f8; border-radius: 15px; padding: 15px; padding-right: 13px; padding-left: 13px;"></i>
                    <p class="text-icon fw-medium mt-1" style="font-size: 13px;">Super Seller</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="text-center">
                    <i class="fas fa-gamepad fa-lg" style="font-size: 30px; color: #d75556; background-color: #e7e5f8; border-radius: 15px; padding: 15px; padding-right: 13px; padding-left: 13px;"></i>
                    <p class="text-icon fw-medium mt-1" style="font-size: 13px;">Voucher Game</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="text-center">
                    <i class="fas fa-shopping-bag fa-lg" style="font-size: 30px; color: #5cbfdd; background-color: #e7e5f8; border-radius: 15px; padding: 15px; padding-right: 13px; padding-left: 13px;"></i>
                    <p class="text-icon fw-medium mt-1" style="font-size: 13px;">Belanja Hemat</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="text-center">
                    <i class="fas fa-tags fa-lg" style="font-size: 30px; color: #59ba5c; background-color: #e7e5f8; border-radius: 15px; padding: 15px; padding-right: 13px; padding-left: 13px;"></i>
                    <p class="text-icon fw-medium mt-1" style="font-size: 13px;">Bazar s.d 90%</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="text-center">
                    <i class="fas fa-headphones fa-lg" style="font-size: 30px; color: #076ccb; background-color: #e7e5f8; border-radius: 15px; padding: 15px; padding-right: 13px; padding-left: 13px;"></i>
                    <p class="text-icon fw-medium mt-1" style="font-size: 13px;">Aksesoris</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="text-center">
                    <i class="fab fa-microsoft fa-lg" style="font-size: 30px; color: #646c76; background-color: #e7e5f8; border-radius: 15px; padding: 15px; padding-right: 13px; padding-left: 13px;"></i>
                    <p class="text-icon fw-medium mt-1" style="font-size: 13px;">Semua Menu</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-5">
        <div class="container-fluid border-bottom border-secondary-subtle py-5">
            <div class="row">
                <div class="col-md-6">
                    <p class="fs-5 ms-2"><strong>Kategori Pilihan</strong></p>
                </div>
                <div class="col-md-6">
                    <p class="fs-5"><strong class="me-2">TopUp & Tagihan</strong> <small class="text-danger fw-medium" style="font-size: 15px;">Lihat Semua</small></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="container-fluid">
                        <div class="row row-cols-1 row-cols-md-4 g-4">
                            <div class="col">
                                <div class="card">
                                    <img src="img/aks.webp" class="card-img-top" alt="...">
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="img/bk.jpg" class="card-img-top" alt="...">
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="img/supp.webp" class="card-img-top" alt="...">
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="img/gm.webp" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Pulsa</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Paket Data</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Listrik PLN</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <label for="">Nomor Telepon</label>
                                            <input type="text" class="form-control" name="user" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Nominal</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option></option>
                                                <option value="1">Pilihan 1</option>
                                                <option value="2">Pilihan 2</option>
                                                <option value="3">Pilihan 3</option>
                                                <option value="3">Pilihan 4</option>
                                                <option value="3">Pilihan 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <label for="">Nomor Telepon</label>
                                            <input type="text" class="form-control" name="user" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Nominal</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option></option>
                                                <option value="1">Pilihan 1</option>
                                                <option value="2">Pilihan 2</option>
                                                <option value="3">Pilihan 3</option>
                                                <option value="3">Pilihan 4</option>
                                                <option value="3">Pilihan 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label for="">Jenis Produk Listrik</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option></option>
                                                <option value="1">Pilihan 1</option>
                                                <option value="2">Pilihan 2</option>
                                                <option value="3">Pilihan 3</option>
                                                <option value="3">Pilihan 4</option>
                                                <option value="3">Pilihan 5</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">No. Meter</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option></option>
                                                <option value="1">Pilihan 1</option>
                                                <option value="2">Pilihan 2</option>
                                                <option value="3">Pilihan 3</option>
                                                <option value="3">Pilihan 4</option>
                                                <option value="3">Pilihan 5</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Nominal</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option></option>
                                                <option value="1">Pilihan 1</option>
                                                <option value="2">Pilihan 2</option>
                                                <option value="3">Pilihan 3</option>
                                                <option value="3">Pilihan 4</option>
                                                <option value="3">Pilihan 5</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 mt-4">
                                            <button type="button" class="btn" style="background-color: #62c55a; color: #ffff;">Beli</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5 pb-5 px-5">
        <p class="fs-5"><strong class="me-2">Produk Palugada Terlaris</strong> <small class="text-danger fw-medium" style="font-size: 15px;">Lihat Semua</small></p>
        <div data-aos="fade-up" data-aos-delay="100">
            <div class="row row-cols-1 row-cols-md-6 g-4">
                <div class="col-12">
                    <div class="card h-100">
                        <img src="img/spd.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="detail.php" style="text-decoration: none; color: black;">
                                <p class="card-title fs-6 fw-normal">Sepeda MTB</p>
                            </a>
                            <p class="card-text fs-5 fw-medium mb-0">Rp45.900</p>
                            <p class="text-secondary fs-6 text-decoration-line-through">Rp18.000 <span class="badge bg-danger ms-2">-78%</span></p>
                            <div class="row row-cols-1 row-cols-md-2 g-1">
                                <div class="col-md-4">
                                    <p class="text-secondary" style="font-size: 15px;"><i class="fas fa-star" style="color: #f8ab00;"></i> 4.3</p>
                                </div>
                                <div class="col">
                                    <p class="text-secondary" style="font-size: 15px;">Terjual 145</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card h-100">
                        <img src="img/lp.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-6 fw-normal">Bardi Emergency</p>
                            <p class="card-text fs-5 fw-medium mb-0">Rp120.000</p>
                            <p class="text-secondary fs-6 text-decoration-line-through">Rp60.000 <span class="badge bg-danger ms-2">-50%</span></p>
                            <div class="row row-cols-1 row-cols-md-2 g-1">
                                <div class="col-md-4">
                                    <p class="text-secondary" style="font-size: 15px;"><i class="fas fa-star" style="color: #f8ab00;"></i> 4.0</p>
                                </div>
                                <div class="col">
                                    <p class="text-secondary" style="font-size: 15px;">Terjual 129</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card h-100">
                        <img src="img/kn.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-6 fw-normal">Batik Pekalongan</p>
                            <p class="card-text fs-5 fw-medium mb-0">Rp50.000</p>
                            <p class="text-secondary fs-6 text-decoration-line-through">Rp10.000 <span class="badge bg-danger ms-2">-90%</span></p>
                            <div class="row row-cols-1 row-cols-md-2 g-1">
                                <div class="col-md-4">
                                    <p class="text-secondary" style="font-size: 15px;"><i class="fas fa-star" style="color: #f8ab00;"></i> 5.0</p>
                                </div>
                                <div class="col">
                                    <p class="text-secondary" style="font-size: 15px;">Terjual 900</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card h-100">
                        <img src="img/spt.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-6 fw-normal">Sepatu Pria</p>
                            <p class="card-text fs-5 fw-medium mb-0">Rp100.900</p>
                            <p class="text-secondary fs-6 text-decoration-line-through">Rp70.000 <span class="badge bg-danger ms-2">-30%</span></p>
                            <div class="row row-cols-1 row-cols-md-2 g-1">
                                <div class="col-md-4">
                                    <p class="text-secondary" style="font-size: 15px;"><i class="fas fa-star" style="color: #f8ab00;"></i> 4.1</p>
                                </div>
                                <div class="col">
                                    <p class="text-secondary" style="font-size: 15px;">Terjual 150</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card h-100">
                        <img src="img/sl.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-6 fw-normal">Sleeping Bag</p>
                            <p class="card-text fs-5 fw-medium mb-0">Rp99.900</p>
                            <p class="text-secondary fs-6 text-decoration-line-through">Rp30.900 <span class="badge bg-danger ms-2">-15%</span></p>
                            <div class="row row-cols-1 row-cols-md-2 g-1">
                                <div class="col-md-4">
                                    <p class="text-secondary" style="font-size: 15px;"><i class="fas fa-star" style="color: #f8ab00;"></i> 4.1</p>
                                </div>
                                <div class="col">
                                    <p class="text-secondary" style="font-size: 15px;">Terjual 105</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card h-100">
                        <img src="img/bj.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-6 fw-normal">Kemeja Pendek</p>
                            <p class="card-text fs-5 fw-medium mb-0">Rp200.900</p>
                            <p class="text-secondary fs-6 text-decoration-line-through">Rp99.900 <span class="badge bg-danger ms-2">-52%</span></p>
                            <div class="row row-cols-1 row-cols-md-2 g-1">
                                <div class="col-md-4">
                                    <p class="text-secondary" style="font-size: 15px;"><i class="fas fa-star" style="color: #f8ab00;"></i> 4.4</p>
                                </div>
                                <div class="col">
                                    <p class="text-secondary" style="font-size: 15px;">Terjual 199</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #dbe3e5;">
        <div class="container-fluid px-5">
            <div class="row">
                <div class="col-md-4 mt-5">
                    <div data-aos="fade-right" data-aos-delay="100">
                        <div class="container">
                            <h3 class="fs-2" style="font-family: 'Open Sans', sans-serif;"><i class="fas fa-bolt fa-lg" style="color: #eead55;"></i> <strong>Flash Sale</strong></h3>
                            <p class="text-secondary fw-normal fs-6">Berakhir Dalam 03:50:25</p>
                        </div>
                        <div class="container" style="margin-top: 80px;">
                            <p class="fw-medium mb-0 fs-5" style="font-family: 'Open Sans', sans-serif;">Diskon Setiap Hari Sampai 70%</p>
                            <p><small>Mau nikmatin <span><b>Flash Sale?</b></span> Download dulu aplikasi Lapakin</small></p>
                            <button class="btn" style="background-color: #5bb85c; color: #ffff;">Mau download dong</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-5">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div data-aos="fade-down">
                                <div class="card mb-4">
                                    <img src="img/data.webp" class="card-img-top" alt="...">
                                    <div class="card-body pb-0">
                                        <p class="card-title">Chil School Gold</p>
                                        <p class="card-text fs-5 fw-medium mb-0">Rp0</p>
                                        <p> <span class="text-secondary fs-6 text-decoration-line-through">Rp99.900</span> <span class="text-danger ms-1">-52%</span></p>
                                        <p style="font-size: 15px;"><i class="fas fa-star" style="color: #f8ab00;"></i>
                                            <i class="fas fa-star" style="color: #f8ab00;"></i>
                                            <i class="fas fa-star" style="color: #f8ab00;"></i>
                                            <i class="fas fa-star" style="color: #f8ab00;"></i>
                                            <i class="fas fa-star-half" style="color: #f8ab00;"></i>
                                            <small class="text-secondary" style="font-size: 15px;">(120)</small>
                                        </p>
                                    </div>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Danger striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped bg-danger" style="width: 90%"></div>
                                </div>
                                <p class="text-secondary mb-5"><small>Tersisa : 5</small></p>
                            </div>
                        </div>
                        <div class="col">
                            <div data-aos="fade-up" data-aos-delay="100">
                                <div class="card mb-4">
                                    <img src="img/data2.webp" class="card-img-top" alt="...">
                                    <div class="card-body pb-0">
                                        <p class="card-title">DellCell Velo</p>
                                        <p class="card-text fs-5 fw-medium mb-0">Rp0</p>
                                        <p> <span class="text-secondary fs-6 text-decoration-line-through">Rp120.900</span> <span class="text-danger ms-1">-79%</span></p>
                                        <p style="font-size: 15px;"><i class="fas fa-star" style="color: #f8ab00;"></i>
                                            <i class="fas fa-star" style="color: #f8ab00;"></i>
                                            <i class="fas fa-star" style="color: #f8ab00;"></i>
                                            <i class="fas fa-star" style="color: #f8ab00;"></i>
                                            <small class="text-secondary" style="font-size: 15px;">(90)</small>
                                        </p>
                                    </div>
                                </div>
                                <div class="progress" role="progressbar" aria-label="Danger striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-striped bg-danger" style="width: 98%"></div>
                                </div>
                                <p class="text-secondary mb-5"><small>Tersisa : 3</small></p>
                            </div>
                        </div>
                        <div class="col">
                            <div data-aos="fade-down">
                                <div class="card mb-4">
                                    <img src="img/data3.webp" class="card-img-top" alt="...">
                                    <div class="card-body pb-0">
                                        <p class="card-title">Chil School Gold</p>
                                        <p class="card-text fs-5 fw-medium mb-0">Rp0</p>
                                        <p><span class="text-secondary fs-6 text-decoration-line-through">Rp18.900</span> <span class="text-danger ms-1">-88%</span></p>
                                        <p style="font-size: 15px;"><i class="fas fa-star" style="color: #f8ab00;"></i>
                                            <i class="fas fa-star" style="color: #f8ab00;"></i>
                                            <i class="fas fa-star" style="color: #f8ab00;"></i>
                                            <i class="fas fa-star" style="color: #f8ab00;"></i>
                                            <i class="fas fa-star-half" style="color: #f8ab00;"></i>
                                            <small class="text-secondary" style="font-size: 15px;">(280 )</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="progress" role="progressbar" aria-label="Warning striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-striped bg-warning" style="width: 70%"></div>
                            </div>
                            <p class="text-secondary mb-5"><small>Tersisa : 20</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-5 pt-5">
        <div class="container-fluid border-bottom border-secondary-subtle pb-5">
            <p class="fs-5"><strong class="me-2">Berdasarkan Pencarianmu</strong> <small class="text-danger fw-medium" style="font-size: 15px;">Lihat Semua</small></p>
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="row row-cols-1 row-cols-md-6 g-4">
                    <div class="col-12">
                        <div class="card h-100">
                            <img src="img/stk.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-title fs-9">Stiker Design</p>
                                <p class="card-text fs-5 fw-medium mb-0">Rp45.900</p>
                                <p> <span class="text-secondary text-decoration-line-through" style="font-size: 15px;"> Rp18.000</span> <span class="text-danger fw-semibold ms-1" style="font-size: 15px;">-78%</span></p>
                                <span class="badge" style="background-color: #58b964; color: #ffff;">Grosir</span>
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
                    <div class="col-12">
                        <div class="card h-100">
                            <img src="img/bl.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-title fs-9">Pull Up Bar</p>
                                <p class="card-text fs-5 fw-medium mb-0">Rp120.000</p>
                                <p> <span class="text-secondary text-decoration-line-through" style="font-size: 15px;"> Rp60.000</span> <span class="text-danger fw-semibold ms-1" style="font-size: 15px;">-50%</span></p>
                                <span class="badge" style="background-color: #58b964; color: #ffff;">Grosir</span>
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
                    <div class="col-12">
                        <div class="card h-100">
                            <img src="img/js.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-title fs-9">Jas Pria</p>
                                <p class="card-text fs-5 fw-medium mb-0">Rp50.000</p>
                                <p> <span class="text-secondary text-decoration-line-through" style="font-size: 15px;"> Rp10.000</span> <span class="text-danger fw-semibold" style="font-size: 15px;">-90%</span></p>
                                <span class="badge" style="background-color: #58b964; color: #ffff;">Cashback</span>
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
                    <div class="col-12">
                        <div class="card h-100">
                            <img src="img/hmp.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-title fs-9">Produk Populer</p>
                                <p class="card-text fs-5 fw-medium mb-0">Rp100.900</p>
                                <p> <span class="text-secondary text-decoration-line-through" style="font-size: 15px;"> Rp70.000</span> <span class="text-danger fw-semibold ms-1" style="font-size: 15px;">-30%</span></p>
                                <span class="badge" style="background-color: white;">.</span>
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
                    <div class="col-12">
                        <div class="card h-100">
                            <img src="img/mdl.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-title fs-9">Mendali Wisuda</p>
                                <p class="card-text fs-5 fw-medium mb-0">Rp99.900</p>
                                <p> <span class="text-secondary text-decoration-line-through" style="font-size: 15px;"> Rp30.900</span> <span class="text-danger fw-semibold ms-1" style="font-size: 15px;">-30%</span></p>
                                <span class="badge" style="background-color: white;">.</span>
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
                    <div class="col-12">
                        <div class="card h-100">
                            <img src="img/hj.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-title fs-9">Hampers Package</p>
                                <p class="card-text fs-5 fw-medium mb-0">Rp200.900</p>
                                <p> <span class="text-secondary text-decoration-line-through" style="font-size: 15px;"> Rp99.900</span> <span class="text-danger fw-semibold ms-1" style="font-size: 15px;">-52%</span></p>
                                <span class="badge" style="background-color: #58b964; color: #ffff;">Grosir</span>
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
        </div>
    </div>
    <div class="container-fluid px-5">
        <div class="container-fluid border-bottom border-secondary-subtle py-5">
            <p class="fs-5"><strong>Pencarian Populer</strong></p>
            <div class="row">
                <div class="col-md-8">
                    <div class="d-grid gap-2 d-md-flex mx-auto">
                        <button type="button" class="btn btn-sm fw-light">Samsung A10</button>
                        <button type="button" class="btn btn-sm fw-light">Kalung Masker</button>
                        <button type="button" class="btn btn-sm fw-light">Jas Hujan</button>
                        <button type="button" class="btn btn-sm fw-light">Kompor Portable</button>
                        <button type="button" class="btn btn-sm fw-light">Masker Duckbil</button>
                        <button type="button" class="btn btn-sm fw-light">Laptop Asus</button>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <p class="text-secondary fw-medium fs-5">Handphone & Aksesoris</p>
                    <p class="text-secondary fw-normal" style="font-size: 13px;">
                        HP Xiaomi | HP Samsung | HP Oppo | Iphone | HP Asus | HP Vivo | HP Lenovo | Power Bank Vivan | Power Bank Wellcomm | Power Bank Robot | Power Bank Samsung | Headset Sennheiser | Earphone Jabra | Handphone & Aksesoris
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="text-secondary fw-medium fs-5">Elektronik</p>
                    <p class="text-secondary" style="font-size: 13px;">
                        TV Polytron | TV Sharp | TV Samsung | TV LG | AC Panasonic | AC Daikin | AC Sharp | Kulkas LG | Kulkas Sharp | Kulkas Polytron | Mesin Cuci Sharp | Mesin Cuci LG | Mesin Cuci Samsung | Mesin Cuci Polytron | Elektronik lainnya
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="text-secondary fw-medium fs-5">Sepeda</p>
                    <p class="text-secondary" style="font-size: 13px;">
                        Sepeda Polygon | Sepeda United | Sepeda Wimcycle | Sepeda Fullbike | Sepeda Lipat | Sepeda MTB | Sepeda BMX | Sepeda Roadbike | Sepeda City bike | Sepeda Fixie | Sepeda Onthel | Sepeda terbaru
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <p class="text-secondary fw-medium fs-5">Komputer & Kamera</p>
                    <p class="text-secondary fw-normal" style="font-size: 13px;">
                        Laptop Asus | Laptop Acer | Macbook | Laptop Lenovo | Laptop Dell | Laptop HP | Laptop MSI | Komputer lainnya | Printer Epson | Printer Canon | Mouse Logitech | Kamera GoPro | CanonDSLR | NikonTripod | Excell | Kamera lainnya
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="text-secondary fw-medium fs-5">Kesehatan & Kecantikan</p>
                    <p class="text-secondary" style="font-size: 13px;">
                        Makeup Maybelline | Wardah | Sari Ayu | Parfum Bvlgari | Produk kesehatan | Produk kecantikan
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="text-secondary fw-medium fs-5">Hobi Koleksi & Olahraga</p>
                    <p class="text-secondary" style="font-size: 13px;">
                        Yonex | Eiger | Adidas | Nike | Sepatu Bola Specs | Sepatu Futsal Puma | Bola Mikasa | Bola Basket Spalding | Sepatu League | Gitar Yamaha | Boneka Doraemon | Action Figure Bandai | Diecast Hot Wheels | Bass Fender | Hobi koleksi lainnya | Perlengkapan olahraga
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <p class="text-secondary" style="font-size: 13px;">
                    Tunggu apa lagi? Kembangkan toko online Anda dengan mempromosikan produk-produk unggulan Anda di Bukalapak! Selain itu, Bukalapak juga bekerja sama dengan brand-brand terkemuka dengan menghadirkan toko resmi brand terbaik untuk kategori elektronik hingga fashion sehingga Anda dapat memastikan produk yang Anda beli merupakan produk original 100%. Produk lengkap, berkualitas, harga murah dengan promo diskon setiap hari, serta sistem pembayaran dan pengiriman yang aman menjadikan Bukalapak sebagai e-commerce terpercaya dan terkemuka andalan masyarakat Indonesia. Jadi Pastikan Anda memiliki online shop di Bukalapak, Tempat Jual Beli Online Terpercaya di Indonesia
                </p>
            </div>
            <div class="row mt-5">
                <div class="col-md-2">
                    <img src="img/6.png" alt="">
                    <p class="text-secondary fw-medium fs-6 mt-5">Jaminan 100% Aman</p>
                    <p class="text-secondary" style="font-size: 13px;">
                        Payment system Lapakin menjamin keamanan uang Anda dalam bertransaksi. Pelajari amannya Lapakin
                    </p>
                </div>
                <div class="col-md-2">
                    <img src="img/5.png" alt="">
                    <p class="text-secondary fw-medium fs-6 mt-5">Kemudahan Pembayaran</p>
                    <p class="text-secondary" style="font-size: 13px;">
                        Lapakin menyediakan berbagai metode pembayaran untuk bertransaksi
                    </p>
                </div>
                <div class="col-md-2">
                    <img src="img/4.png" alt="" class="mb-2">
                    <p class="text-secondary fw-medium fs-6 mt-5">Professional CS</p>
                    <p class="text-secondary" style="font-size: 13px;">
                        Customer Support Bukalapak siap membantu Anda melalui Lapakbantuan
                    </p>
                </div>
                <div class="col-md-2">
                    <img src="img/3.png" alt="">
                    <p class="text-secondary fw-medium fs-6 mt-5">6 Manfaat untuk Pelapak</p>
                    <p class="text-secondary" style="font-size: 13px;">
                        Bukalapak menyediakan berbagai pilihan jasa pengiriman dengan jangkauan nasional
                    </p>
                </div>
                <div class="col-md-2">
                    <img src="img/2.png" alt="">
                    <p class="text-secondary fw-medium fs-6 mt-5">Kemudahan Pembayaran</p>
                    <p class="text-secondary" style="font-size: 13px;">
                        Dapatkan keuntungan seperti akses ke komunitas Bukalapak serta tips dan trik berjualan online
                    </p>
                </div>
                <div class="col-md-2">
                    <img src="img/1.png" alt="">
                    <p class="text-secondary fw-medium fs-6 mt-5">Akses Mobile</p>
                    <p class="text-secondary" style="font-size: 13px;">
                        Download aplikasi Bukalapak di Android dan iOS. Nikmati kemudahan jual beli dari gadget Anda
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-5">
        <div class="container-fluid border-bottom border-secondary-subtle">
            <nav class="navbar navbar-expand-lg">
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
    </div>
    <div class="container py-5">
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


    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>