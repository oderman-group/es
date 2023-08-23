<?php 
include("config/conexion.php");
include("includes/head.php");
$datosPruebaGratis = [
	'nombre'     => '',
	'celular'      => ''
];
if(!empty($_GET)){
	$datosPruebaGratis['nombre'] = base64_decode($_GET['nombre']);
	$datosPruebaGratis['celular'] = base64_decode($_GET['celular']);
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
                    <h2 class="mb-20"> Prueba <span> Gratis </span> </h2>
                    <p>Tendrás 5 días de prueba gratis para explorar la plataforma</p>
                </div>
                <div class="text-center mb-100">
                    <h2 class="ltspc-20 text-uppercase fs-1 lh-1 mb-50 mt-30 secondary"><?=$datos['dtc_whatsapp'];?></h2>
                    <h4 class="fw-normal mb-20 color-000"><?=$datos['dtc_email_ventas'];?></h4>
                </div>
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <form action="prueba-gratis-guardar.php" class="form" method="post">
                                <p class="text-center text-danger fs-12px mb-30">The field is required mark as *</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="nombre" class="form-control" placeholder="Tu nombre" value="<?=$datosPruebaGratis['nombre'];?>"> 
                                        </div>
                                    </div>
                                    <?php 
                                        $value="";
                                        if(!empty($_REQUEST['email'])){
                                            $value=base64_decode($_REQUEST['email']);
                                        }
                                    ?>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input value="<?=$value;?>" type="email" name="email" class="form-control" placeholder="Tu email *" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="celular" class="form-control"  placeholder="Tu celular" value="<?=$datosPruebaGratis['celular'];?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <select name="plan" class="form-select">
                                                <option value="" >Qué plan deseas adquirir?</option>
                                                <?php
                                                $consultaPlan = mysqli_query($conexion, "SELECT * FROM planes_sintia");
                                                while($plan = mysqli_fetch_array($consultaPlan, MYSQLI_BOTH)){
                                                ?>
                                                <option value="<?=$plan['plns_id'];?>" <?php if(!empty($_GET['plan']) AND $plan['plns_id']==base64_decode($_GET['plan'])){echo "selected";}?>><?=$plan['plns_nombre']?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-20">
                                            <select name="option" class="form-select">
                                                <option value="how can we help" selected>Para qué requieres la plataforma?</option>
                                                <option value="1" <?php if(!empty($_GET['option']) AND base64_decode($_GET['option'])==1){echo "selected";}?>>Colegio</option>
                                                <option value="2" <?php if(!empty($_GET['option']) AND base64_decode($_GET['option'])==2){echo "selected";}?>>Universidad</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <div class="form-group mb-20">
                                            <?php
                                                if(!empty($_GET['error']) && $_GET['error']==1){
                                                    echo '<p class="text-center text-danger fs-12px mb-30">La validación ha sido incorrecta.</p>';
                                                }
                                                $numA1 = rand(1, 10);
                                                $numA2 = rand(1, 10);
                                                $resultadoA = $numA1 + $numA2;
                                            ?>
                                            <input type="hidden" name="sumaReal" value="<?= md5($resultadoA); ?>" />
                                            <input type="text" name="suma" class="form-control" placeholder="Valida que no eres un Robot. ¿Cuánto es <?= $numA1 . "+" . $numA2; ?>?" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <div class="form-check d-inline-flex mt-30 mb-30">
                                            <input class="form-check-input me-2 mt-0" type="checkbox" required  id="flexCheckDefault">
                                            <label class="form-check-label small" for="flexCheckDefault">
                                                Acepto los <a href="#" class="text-decoration-underline" data-bs-toggle="modal" data-bs-target="#ModalTerminosCondiciones">Términos & Condiciones</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <input type="submit" value="Empezar prueba " class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold text-light">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <img src="assets/img/icons/contact_a.png" alt="" class="contact_a">
                    <img src="assets/img/icons/contact_message.png" alt="" class="contact_message">
                </div>
            </div>
        </section>
        <!-- ====== end contact page ====== -->
        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1"  id="ModalTerminosCondiciones"  role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Términos & Condiciones</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <?php  include("includes/terminos-condiciones.php"); ?>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn rounded-pill sm-butn fw-bold text-light"  style="color:#FFFFFF;background:#667474;font-size: 12px;" onclick="aceptarTerminos(false)" data-bs-dismiss="modal">No aceptar</button>
                    <button type="button" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold text-light" onclick="aceptarTerminos(true)">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
        function aceptarTerminos(aceptar) {
            var checkbox = document.getElementById('flexCheckDefault');
            checkbox.checked = aceptar;
            $('#ModalTerminosCondiciones').modal('hide');
        }
        </script>
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