<?php 
include("config/conexion.php");

include("includes/head.php");
?>

</head>

<body>

    <!-- ====== start loading page ====== -->
    <!-- <div id="preloader">
    </div> -->
    <!-- ====== end loading page ====== -->

    <?php include("includes/top-navbar.php");?>

    <?php include("includes/navbar.php");?>

    <!-- ====== start header ====== -->
    <header class="style-5" data-scroll-index="0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="info">
                        <h1>Todo en una sola plataforma para
                            <span>
                                Colegios
                                <img src="assets/img/header/head5_line.png" alt="" class="head-line">
                                <img src="assets/img/header/head5_pen.png" alt="" class="head-pen">
                            </span>
                        </h1>
                        <form action="prueba-gratis.php" class="form" method="post" name="pruebaEmail">
                            <div class="form-group">
                                <span class="icon">
                                    <i class="far fa-envelope"></i>
                                </span>
                                <input name="email" type="text" placeholder="Tu dirección de email" required>
                                <a href="javascript:;" onclick="document.forms.pruebaEmail.submit()" class="btn rounded-pill bg-blue5 hover-blue2 sm-butn fw-bold text-white">
                                    <span>Prueba gratis <i class="bi bi-arrow-right ms-1"></i> </span>
                                </a>
                            </div>
                        </form>
                        <div class="main-img">
                            <img src="assets/img/header/recurso_2_8.png" alt="" class="page-img">
                            <!--<img src="assets/img/header/recurso_5_8.png" alt="" class="linechart-img">-->
                            <img src="assets/img/header/recurso_6_8.png" alt="" class="piechart-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="assets/img/header/recurso_3_8.png" alt="" class="handl-img">
        <img src="assets/img/header/recurso_1_8.png" alt="" class="handr-img">
    </header>
    <!-- ====== end header ====== -->

    <!--Contents-->
    <main>

        <!-- ====== start community ====== -->
        <section class="community pt-40 style-5">
            <div class="container">
                <div class="section-head text-center mb-40 style-5">
                    <h2 class="mb-20"> Principales <span> Razones para usar sintia </span> </h2>

                </div>
                <div class="content rounded-pill">
                    <div class="commun-card">
                        <div class="icon">
                            <img src="assets/img/icons/recurso_13.png" alt="" width="80">
                        </div>
                        <div class="inf">
                            <h5>Necesitas una plataforma que te ahorre tiempo.</h5>
                        </div>
                    </div>
                    <div class="commun-card">
                        <div class="icon">
                            <img src="assets/img/icons/recurso_14.png" alt="" width="80">
                        </div>
                        <div class="inf">
                            <h5>Tu información estara segura y disponible cuando la requieras.</h5>
                        </div>
                    </div>
                    <div class="commun-card">
                        <div class="icon">
                            <img src="assets/img/icons/recurso_15.png" alt="" width="80">
                        </div>
                        <div class="inf">
                            <h5>Estarás 100% satisfecho o te devolvemos tu dinero.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end community ====== -->

        <?php include("includes/clients.php");?>

        <?php include("includes/features.php");?>

        <?php include("includes/prices.php");?>

        <?php include("includes/testimonials.php");?>

        <!-- ====== start download ====== -->
        <section class="download section-padding style-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="content text-center">
                            <h2>SINTIA marca la  
                                <span>
                                diferencia
                                    <img src="assets/img/header/head5_line.png" alt="" class="head-line">
                                    <img src="assets/img/header/head5_pen.png" alt="" class="head-pen">
                                </span>
                                en cuanto a plataformas educativas.
                            </h2>
                            <div class="butns mt-70">
                                <a href="prueba-gratis.php" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold">
                                    <span>Prueba gratis <i class="bi bi-arrow-right ms-1"></i> </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end download ====== -->
    </main>
    <!--End-Contents-->

    <?php include("includes/footer.php");?>

    <!-- ====== start to top button ====== -->
    <a href="#" class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-chevron-up fs-6 text-dark"></i>
    </a>
    <!-- ====== end to top button ====== -->

    <!-- ====== request ====== -->
    <script src="assets/js/lib/jquery-3.0.0.min.js"></script>
    <script src="assets/js/lib/jquery-migrate-3.0.0.min.js"></script>
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="assets/js/lib/wow.min.js"></script>
    <script src="assets/js/lib/jquery.fancybox.js"></script>
    <script src="assets/js/lib/lity.js"></script>
    <script src="assets/js/lib/swiper.min.js"></script>
    <script src="assets/js/lib/jquery.waypoints.min.js"></script>
    <script src="assets/js/lib/jquery.counterup.js"></script>
    <!-- <script src="assets/js/lib/pace.js"></script> -->
    <script src="assets/js/lib/scrollIt.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>


</html>