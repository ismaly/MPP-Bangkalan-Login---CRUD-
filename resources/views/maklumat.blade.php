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
    <!-- Maklumat Pelayanan Start -->
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <h2 class="mb-3">Maklumat Pelayanan</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-primary">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Komitmen Pelayanan</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    Kami berjanji dan sanggup untuk melaksanakan pelayanan sesuai dengan Standar
                                    Pelayanan.
                                </li>
                                <li class="list-group-item">
                                    Kami berjanji dan sanggup untuk memberikan pelayanan sesuai dengan kewajiban dan
                                    akan melakukan perbaikan secara terus-menerus.
                                </li>
                                <li class="list-group-item">
                                    Kami bersedia untuk menerima sanksi, dan/atau memberikan kompensasi apabila
                                    pelayanan yang diberikan tidak sesuai standar.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Maklumat Pelayanan End -->


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
