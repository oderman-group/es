<?php
if(empty($_SERVER['HTTP_REFERER'])) {
    header("Location:prueba-gratis.php");
    exit();
}

include("config/conexion.php");
include("includes/head.php");

if(!empty($_GET)){
	$nombre = base64_decode($_GET['name']);
}
?>

</head>

<body>

    <!-- ====== start loading page ====== -->
    <!-- <div id="preloader">
    </div> -->
    <!-- ====== end loading page ====== -->

    <?php include("includes/top-navbar.php");?>

    <?php include("includes/navbar.php");?>

    <!--Contents-->
    <main class="contact-page style-5">
        <!-- ====== start contact page ====== -->
        <section class="contact section-padding pt-50 style-6">
            <div class="container">
                <div class="section-head text-center mb-100 style-5">

                    <div class="alert alert-success" role="alert" style="background-color: #41c3c46e; color:#6017dc;">
                    <h4 class="alert-heading">Bien hecho!</h4>
                    <p style="text-align: justify;">
                        Estimad@ <b><?=$nombre;?></b>,<br>

                        ¡Gracias por registrarte en Sintia, la plataforma educativa de ODERMAN GROUP! Estamos emocionados de tenerte a bordo para explorar oportunidades educativas innovadoras.<br>

                        Hemos recibido tu formulario de registro y queremos confirmarte que ya hemos enviado un correo electrónico con tus datos de acceso a la dirección proporcionada. Este correo debería llegar en breve, así que te sugerimos revisar tu bandeja de entrada.<br><br>

                        Si por alguna razón no encuentras el correo electrónico, asegúrate de verificar tu carpeta de correo no deseado o de promociones.<br>

                        Además, queremos informarte que nuestro equipo estará en contacto contigo pronto para brindarte más información y responder cualquier pregunta que puedas tener sobre Sintia. Valoramos tu interés y estamos aquí para ayudarte en cada paso de tu experiencia educativa.<br><br>

                        Gracias por elegir Sintia. ¡Esperamos que tengas una experiencia educativa increíble!<br><br>

                        Atentamente,<br>

                        El Equipo de Sintia - ODERMAN GROUP
                    </p>
                    </div>

                </div>


            </div>
        </section>
        <!-- ====== end contact page ====== -->
        
        <!-- ====== start contact page ====== -->
        <!-- <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24219.60999175365!2d-73.9764341314902!3d40.64198229194528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b400c94a227%3A0x18e2a4d3fb21f0ec!2sFlatbush%2C%20Brooklyn%2C%20NY%2C%20USA!5e0!3m2!1sen!2seg!4v1651361759450!5m2!1sen!2seg" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div> -->
        <!-- ====== start contact page ====== -->
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


<!-- Mirrored from iteck-html.themescamp.com/page-contact-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2023 08:27:44 GMT -->
</html>