@include('layout/header')

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    {{-- <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>123 Street, New York, USA</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('layout/topnavigation')
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="default/img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Selamat Datang di Mal
                                    Pelayanan Publik</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Layanan Terbaik untuk
                                    Masyarakat</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Kami menyediakan layanan terpadu dan
                                    profesional untuk memenuhi segala kebutuhan administratif Anda. Dengan kemudahan
                                    akses dan proses yang transparan, kami siap melayani Anda dengan sepenuh hati.</p>
                                <a href=""
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Pelajari Lebih
                                    Lanjut</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Dapatkan
                                    Layanan</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="default/img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Selamat Datang di Pusat
                                    Layanan Publik</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Kemudahan Akses dan Layanan
                                    Terpadu</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Kami hadir untuk memberikan solusi cepat
                                    dan efisien bagi kebutuhan administratif Anda. Dengan berbagai layanan yang tersedia
                                    di satu tempat, kami siap membantu Anda dengan pelayanan yang ramah dan profesional.
                                </p>
                                <a href=""
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Jelajahi
                                    Layanan</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Hubungi
                                    Kami</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="default/img/carousel-3.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(53, 53, 53, .7);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Selamat Datang di
                                    Layanan Publik Kami</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Pelayanan Cepat dan
                                    Terpercaya untuk Anda</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Kami berkomitmen memberikan layanan
                                    publik yang berkualitas, cepat, dan transparan. Temukan berbagai kemudahan dalam
                                    mengurus kebutuhan administrasi Anda di sini.</p>
                                <a href=""
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Lihat
                                    Selengkapnya</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Ajukan
                                    Permohonan</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Pendahuluan Start -->
    {{-- <section class="pt-5 pb-5">
        <div class="container">
            <!-- Bagian Judul -->
            <div class="row mb-4">
                <div class="col text-center">
                    <h2 class="display-4">PENDAHULUAN</h2>
                </div>
            </div>

            <!-- Bagian Konten -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">A. LATAR BELAKANG</h5>
                            <p class="card-text">
                                Dalam upaya mencapai kualitas pelayanan, diperlukan penyusunan standar pelayanan publik,
                                yang menjadi tolak ukur pelayanan yang berkualitas. Penetapan standar pelayanan publik
                                merupakan fenomena yang berlaku, yang mengharuskan semua instansi pemerintah untuk
                                menetapkan standar pelayanan konsumen.
                                Pelayanan publik pada dasarnya menyangkut aspek kehidupan yang sangat luas. Dalam
                                kehidupan bernegara, maka pemerintah memiliki fungsi memberikan berbagai pelayanan
                                publik yang diperlukan oleh masyarakat, mulai dari pelayanan dalam bentuk pengaturan
                                atau pun pelayanan-pelayanan lain dalam rangka memenuhi kebutuhan masyarakat dalam
                                bidang pendidikan, kesehatan, pekerjaan umum, dan lainnya.
                                Di samping itu, adanya standar pelayanan publik memberikan keterbukaan akses informasi
                                kepada masyarakat sehingga dalam sebuah pelayanan baik persyaratan, prosedur, biaya dan
                                jangka waktu dapat diukur dan diketahui masyarakat tanpa mengalami kebingungan serta
                                menuntut pengawasan masyarakat dalam penyelenggaraannya.
                                Dengan demikian, standar pelayanan adalah tolok ukur yang dipergunakan sebagai pedoman
                                penyelenggaraan pelayanan dan acuan penilaian kualitas pelayanan sebagai kewajiban dan
                                janji penyelenggara kepada masyarakat dalam rangka pelayanan yang berkualitas, cepat,
                                mudah, terjangkau, dan terukur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Pendahuluan End -->



    <!-- Feature Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-user-check fa-2x text-primary"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">01</h1>
                    </div>
                    <h5>Creative Designers</h5>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-check fa-2x text-primary"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">02</h1>
                    </div>
                    <h5>Quality Products</h5>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-drafting-compass fa-2x text-primary"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">03</h1>
                    </div>
                    <h5>Free Consultation</h5>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div class="d-flex align-items-center justify-content-center bg-light"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-headphones fa-2x text-primary"></i>
                        </div>
                        <h1 class="display-1 text-light mb-0">04</h1>
                    </div>
                    <h5>Customer Support</h5>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Feature Start -->



    <!-- About Start -->
    {{-- <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">About Us</h1>
                        </div>
                        <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                            amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat
                            amet</p>
                        <div class="row g-4 mb-4 pb-2">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-users fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="fw-medium mb-0">Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                        style="width: 60px; height: 60px;">
                                        <i class="fa fa-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="fw-medium mb-0">Projects Done</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary py-3 px-5">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- About End -->


    <!-- Service Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h1 class="display-5 mb-5">Fasilitas MPP</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-1.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">General Carpentry</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Furniture Manufacturing</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-3.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Furniture Remodeling</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-4.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Wooden Floor</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-5.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Wooden Furniture</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/service-6.jpg" alt="">
                        </div>
                        <div class="p-4 text-center border border-5 border-light border-top-0">
                            <h4 class="mb-3">Custom Work</h4>
                            <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                            <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="text-start">
                            <h1 class="display-5 mb-4">Pendahuluan</h1>
                        </div>
                        <p class="card-text">
                            Dalam upaya mencapai kualitas pelayanan, diperlukan penyusunan standar pelayanan publik,
                            yang menjadi tolak ukur pelayanan yang berkualitas. Penetapan standar pelayanan publik
                            merupakan fenomena yang berlaku, yang mengharuskan semua instansi pemerintah untuk
                            menetapkan standar pelayanan konsumen.
                            Pelayanan publik pada dasarnya menyangkut aspek kehidupan yang sangat luas. Dalam
                            kehidupan bernegara, maka pemerintah memiliki fungsi memberikan berbagai pelayanan
                            publik yang diperlukan oleh masyarakat, mulai dari pelayanan dalam bentuk pengaturan
                            atau pun pelayanan-pelayanan lain dalam rangka memenuhi kebutuhan masyarakat dalam
                            bidang pendidikan, kesehatan, pekerjaan umum, dan lainnya.
                            Di samping itu, adanya standar pelayanan publik memberikan keterbukaan akses informasi
                            kepada masyarakat sehingga dalam sebuah pelayanan baik persyaratan, prosedur, biaya dan
                            jangka waktu dapat diukur dan diketahui masyarakat tanpa mengalami kebingungan serta
                            menuntut pengawasan masyarakat dalam penyelenggaraannya.
                            Dengan demikian, standar pelayanan adalah tolok ukur yang dipergunakan sebagai pedoman
                            penyelenggaraan pelayanan dan acuan penilaian kualitas pelayanan sebagai kewajiban dan
                            janji penyelenggara kepada masyarakat dalam rangka pelayanan yang berkualitas, cepat,
                            mudah, terjangkau, dan terukur.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid rounded" src="default/img/pendahuluan.jpg" alt="" style="object-fit: cover; width: 90%; height: auto; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Feature End -->


    <!-- Instansi Start -->
    <!-- Instansi Start -->
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row mb-3">
                <div class="col-6">
                    <h3 class="mb-3">Daftar Instansi</h3>
                </div>
                <div class="col-6 text-end">
                    <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2" role="button"
                        data-bs-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2" role="button"
                        data-bs-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div id="carouselExampleIndicators2" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="default/img/polres.jpg" alt="Image 1">
                                    <div class="card-body">
                                        <h4 class="card-title">Polres</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="default/img/kejaksaan negeri.jpg" alt="Image 2">
                                    <div class="card-body">
                                        <h4 class="card-title">Kejaksaan Negeri</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="default/img/perumda sejahtera.jpg" alt="Image 3">
                                    <div class="card-body">
                                        <h4 class="card-title">Perumda Sejahtera</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="default/img/pengadilan agama.jpg" alt="Image 4">
                                    <div class="card-body">
                                        <h4 class="card-title">Pengadilan Agama</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid"
                                        src="default/img/Bank Jatim.jpg"
                                        alt="Image 5">
                                    <div class="card-body">
                                        <h4 class="card-title">Bank Jatim</h4>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid"
                                        src="default/img/bpjs ketenagakerjaan.jpg"
                                        alt="Image 6">
                                    <div class="card-body">
                                        <h4 class="card-title">BPJS Ketenagakerjaan</h4>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid"
                                        src="default/img/dinas sosial.jpg"
                                        alt="Image 7">
                                    <div class="card-body">
                                        <h4 class="card-title">Dinas Sosial</h4>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid"
                                        src="default/img/dinas sosial.jpg"
                                        alt="Image 8">
                                    <div class="card-body">
                                        <h4 class="card-title">Samsat</h4>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid"
                                    src="default/img/dinas sosial.jpg"                                        alt="Image 9">
                                    <div class="card-body">
                                        <h4 class="card-title">Dinas Perpustakaan dan Arsip</h4>
                                   
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid"
                                    src="default/img/dinas sosial.jpg"                                        alt="Image 4">
                                    <div class="card-body">
                                        <h4 class="card-title">Dinas PRKP</h4>
                                        {{-- <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid"
                                    src="default/img/dinas sosial.jpg"                                        alt="Image 5">
                                    <div class="card-body">
                                        <h4 class="card-title">Dinas pmptsp
                                           </h4>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img class="img-fluid"
                                    src="default/img/dinas sosial.jpg"                                        alt="Image 6">
                                    <div class="card-body">
                                        <h4 class="card-title"> Kantor imigrasi
                                          </h4>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

                <div class="row mt-4">
                    <div class="col text-center">
                        <a class="btn btn-primary" href="{{ url('/instansi') }}" role="button">Lihat Semua
                            Instansi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instansi End -->

    <!-- Instansi End -->


    <!-- Quote Start -->
    {{-- <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/quote.jpg"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Free Quote</h1>
                        </div>
                        <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                            
                            amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat
                            amet</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Note"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Quote End -->


    <!-- Team Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Team MPP</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- Team End -->


    <!-- Team MPP -->
    {{-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h1 class="display-5 mb-5">Team MPP</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/testimonial-1.jpg"
                        style="width: 90px; height: 90px;">
                    <div class="testimonial-text text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
                        style="width: 90px; height: 90px;">
                    <div class="testimonial-text text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
                        style="width: 90px; height: 90px;">
                    <div class="testimonial-text text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->




    <!-- Footer Start -->
    @include('layout/footer')
    {{-- <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="">General Carpentry</a>
                    <a class="btn btn-link" href="">Furniture Remodeling</a>
                    <a class="btn btn-link" href="">Wooden Floor</a>
                    <a class="btn btn-link" href="">Wooden Furniture</a>
                    <a class="btn btn-link" href="">Custom Carpentry</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="default/lib/wow/wow.min.js"></script>
    <script src="default/lib/easing/easing.min.js"></script>
    <script src="default/lib/waypoints/waypoints.min.js"></script>
    <script src="default/lib/counterup/counterup.min.js"></script>
    <script src="default/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="default/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="default/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="default/js/main.js"></script>
    
</body>

</html>
