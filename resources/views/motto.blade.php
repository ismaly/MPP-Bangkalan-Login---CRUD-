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


    <!-- Motto Start -->
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="card border-primary">
                        <div class="card-body">
                            <h2 class="card-title">Motto</h2>
                            <p class="card-text lead">
                                “Kepuasan Anda adalah Kebanggaan Kami”
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Motto End -->



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
