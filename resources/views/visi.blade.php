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
    @include('layout/topnavigation')
    <!-- Visi dan Misi Start -->
    <section class="pt-5 pb-5 bg-light">
        <div class="container">
            <!-- Vision Section -->
            <div class="row mb-4">
                <div class="col-lg-12 text-center">
                    <h2 class="mb-3">Visi dan Misi</h2>
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title">Visi</h4>
                            <p class="card-text">Terwujudnya Masyarakat Kabupaten Bangkalan yang Relegius dan Sejahtera
                                Berbasis Potensi Lokal.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Missions Section -->
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="mb-3">Misi Bupati Bangkalan</h4>
                    <ul class="list-group">
                        <li class="list-group-item">Mewujudkan kehidupan beragama berkualitas.</li>
                        <li class="list-group-item">Menyelenggarakan Birokrasi yang Profesional dan Berintegritas
                            Tinggi.</li>
                        <li class="list-group-item">Menyelenggarakan pelayanan dasar berkualitas dan tata kelola
                            pemanfaatn potensi ekonomi, sosial dan budaya lokal untuk meningkatkan daya saing daerah.
                        </li>
                        <li class="list-group-item">Mewujudkan rasa aman dan adil pada masyarakat.</li>
                        <li class="list-group-item">Akselerasi pembangunan infrastruktur yang berbasis pada pemerataan
                            wilayah dan berwawasan lingkungan dalam mendorong iklim investasi.</li>
                    </ul>
                </div>
            </div>

            <!-- Mission Related to Dinas -->
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title">Misi Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</h4>
                            <p class="card-text">Akselerasi pembangunan infrastruktur yang berbasis pada pemerataan
                                wilayah dan berwawasan lingkungan dalam mendorong iklim investasi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Visi dan Misi End -->
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
@include('layout/footer')
