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


    <!-- Kode Etik Pelayanan Start -->
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <h2 class="mb-3">Kode Etik Pelayanan</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-success">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">Perilaku Pelayanan Publik</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    Melayani dengan senyum, salam, sapa, sopan dan santun serta rapi dalam penampilan.
                                </li>
                                <li class="list-group-item">
                                    Jujur, Disiplin, Proporsional, dan Profesional.
                                </li>
                                <li class="list-group-item">
                                    Adil dan Non-Diskriminatif.
                                </li>
                                <li class="list-group-item">
                                    Peduli, teliti, dan cermat.
                                </li>
                                <li class="list-group-item">
                                    Tegas dan memberikan pelayanan tanpa berbelit-belit.
                                </li>
                                <li class="list-group-item">
                                    Mandiri dan dilarang menerima imbalan dalam bentuk apapun.
                                </li>
                                <li class="list-group-item">
                                    Taat terhadap ketentuan peraturan perundang-undangan yang berlaku.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kode Etik Pelayanan End -->



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
