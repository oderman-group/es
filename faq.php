<?php 
include("config/conexion.php");

include("includes/head.php");
?>
</head>

<body>

    <?php include("includes/top-navbar.php");?>

    <?php include("includes/navbar.php");?>

    <!-- ====== start inner-header style-5 ====== -->
    <section class="inner-header style-5">
        <div class="container">
            <div class="content">
                <!-- <div class="links">
                    <a href="#"> Home </a>
                    <a href="#"> Faq </a>
                </div> -->
                <h2> Preguntas Frecuentes </h2>
                <img src="assets/img/header/head7_rock.png" alt="" class="side-img slide_up_down">
            </div>
        </div>
    </section>
    <!-- ====== end inner-header style-5 ====== -->


    <!--Contents-->
    <main class="faq-page style-5 section-padding">

        <!-- ====== start faq-tabs style-5 ====== -->
        <section class="faq-tabs style-5">
            <div class="container">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-card active" id="faq1-tab" data-bs-toggle="pill" data-bs-target="#faq1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            <div class="icon img-contain">
                                <img src="assets/img/icons/users.png" alt="">
                            </div>
                            <div class="info">
                                <h5> About Account </h5>
                                <p> 08 Answer </p>
                            </div>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-card" id="faq2-tab" data-bs-toggle="pill" data-bs-target="#faq2" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                        <div class="icon img-contain">
                            <img src="assets/img/icons/protect.png" alt="">
                        </div>
                        <div class="info">
                            <h5> Privacy & Policy </h5>
                            <p> 20 Answer </p>
                        </div>
                    </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-card" id="faq3-tab" data-bs-toggle="pill" data-bs-target="#faq1" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                        <div class="icon img-contain">
                            <img src="assets/img/icons/dollar.png" alt="">
                        </div>
                        <div class="info">
                            <h5> Refund Option </h5>
                            <p> 18 Answer </p>
                        </div>
                    </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-card" id="faq4-tab" data-bs-toggle="pill" data-bs-target="#faq2" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                            <div class="icon img-contain">
                                <img src="assets/img/icons/24hour.png" alt="">
                            </div>
                            <div class="info">
                                <h5> Support & More </h5>
                                <p> 33 Answer </p>
                            </div>
                        </button>
                    </li>
                </ul>
            </div>
        </section>
        <!-- ====== end faq-tabs style-5 ====== -->


        <!-- ====== end faq-body style-5 ====== -->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="faq1" role="tabpanel">
                <div class="faq-body">
                    <div class="container">
                        <div class="row gx-5">
                            <div class="col-lg-4">
                                <div class="faq-category">
                                    <h5> Categoria  de Preguntas: </h5>
                                    <ul>
                                        <li>
                                            <a href="#accordion1" class="active"> Instalaci??n </a>
                                            <span> 01 </span>
                                        </li>
                                        <li>
                                            <a href="#accordion2"> Pago </a>
                                            <span> 01 </span>
                                        </li>
                                        <li>
                                            <a href="#accordion3"> Integraci??n </a>
                                            <span> 01 </span>
                                        </li>
                                        <li>
                                            <a href="#accordion4"> Cancelaci??n </a>
                                            <span> 02 </span>
                                        </li>
                                        <li>
                                            <a href="#accordion5"> Dispositivos </a>
                                            <span> 01 </span>
                                        </li>
                                        <li>
                                            <a href="#accordion6"> Datos </a>
                                            <span> 01 </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="faq-questions">
                                    <div class="accordion pt-lg-0" id="accordion1">
                                      <h5 class="sec-title mt-0"> <span> 01. </span> Instalaci??n </h5>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="hd1">
                                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bd1" aria-expanded="true" aria-controls="collapseOne">
                                          ??Cu??nto dura la instalaci??n?
                                          </button>
                                        </h2>
                                        <div id="bd1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion1">
                                          <div class="accordion-body">
                                              <div class="text">
                                                La instalaci??n la hacemos directamente desde nuestras oficinas y dura 1 d??a h??bil despu??s de haber recibido el pago correspondiente.
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                      <!-- ------- -->
                                    <div class="accordion" id="accordion2">
                                      <h5 class="sec-title"> <span> 02. </span> Pago </h5>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="hd4">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bd4" aria-expanded="true" aria-controls="collapseOne">
                                            ??Se puede pagar en varias partidas?
                                          </button>
                                        </h2>
                                        <div id="bd4" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion2">
                                          <div class="accordion-body">
                                              <div class="text">
                                                Claro que s??, se puede dividir el pago hasta en varias partidas durante el a??o. La instituci??n debe compromenterse a una fecha de pago cada mes durante el a??o.
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                      <!-- ------- -->
                                    <div class="accordion" id="accordion3">
                                      <h5 class="sec-title"> <span> 03. </span> Integraci??n </h5>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="hd7">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bd7" aria-expanded="true" aria-controls="collapseOne">
                                            ??SINTIA se puede integrar con otros sistemas?
                                          </button>
                                        </h2>
                                        <div id="bd7" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion3">
                                          <div class="accordion-body">
                                              <div class="text">
                                              Claro que s??, SINTIA tiene APIs de integraci??n para que sean usadas por otros sistemas y haya comunicaci??n entre ellos.
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                      <!-- ------- -->
                                    <div class="accordion" id="accordion4">
                                      <h5 class="sec-title"> <span> 04. </span> Cancelaci??n </h5>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="hd7">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bd7" aria-expanded="true" aria-controls="collapseOne">
                                            ??Qu?? pasa si no quedo satisfecho con la plataforma?
                                          </button>
                                        </h2>
                                        <div id="bd7" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion4">
                                          <div class="accordion-body">
                                              <div class="text">
                                                Queremos que est??s tranquilo al comprar. Si por alguna raz??n no quedas satisfecho con la plataforma o con el servicio post venta, tienes 90 d??as de devoluci??n garantizada sin compromiso alguno. Cero riesgos para usted.
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="hd8">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bd8" aria-expanded="false" aria-controls="collapseTwo">
                                            ??Puedo cancelar el servicio en cualquier momento?
                                          </button>
                                        </h2>
                                        <div id="bd8" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion4">
                                          <div class="accordion-body">
                                              <div class="text">
                                                Usted como cliente decide cuando renovar la licencia o cuando cancelarla. Basta con cancelar en l??nea desde la misma plataforma o con enviarnos un mensaje al email <?=$datos['dtc_email_ventas'];?> o al WhatsApp: <?=$datos['dtc_whatsapp'];?>, diciendo que deseas cancelar el servicio. Nosotros te entregamos toda la informaci??n depositada durante el tiempo que has trabajado con la plataforma. Cero riesgos para usted.
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                      <!-- ------- -->
                                    <div class="accordion" id="accordion5">
                                      <h5 class="sec-title"> <span> 05. </span> Dispositivos </h5>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="hd10">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bd10" aria-expanded="true" aria-controls="collapseOne">
                                            ??Puedo acceder desde mi tablet o celular?
                                          </button>
                                        </h2>
                                        <div id="bd10" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion5">
                                          <div class="accordion-body">
                                              <div class="text">
                                                S??, SINTIA se adapta a la resoluci??n de tu dispositivo.
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                      <!-- ------- -->
                                    <div class="accordion" id="accordion6">
                                      <h5 class="sec-title"> <span> 06. </span> Importaciones </h5>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="hd13">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bd13" aria-expanded="true" aria-controls="collapseOne">
                                            ??Puedo hacer una importaci??n inicial de mis datos?
                                          </button>
                                        </h2>
                                        <div id="bd13" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion6">
                                          <div class="accordion-body">
                                              <div class="text">
                                                S??. Si tienes la informaci??n en Excel o texto plano (txt) se puede realizar la importaci??n de los datos para empezar con el sistema al d??a.
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
            </div>
            <div class="tab-pane fade" id="faq2" role="tabpanel">
                <div class="faq-body">
                    <div class="container">
                        <div class="row gx-5">
                            <div class="col-lg-4">
                                <div class="faq-category">
                                    <h5> Categoria  de Preguntas: </h5>
                                    <ul>
                                        <li>
                                            <a href="#accordion1" class="active"> Instalaci??n </a>
                                            <span> 01 </span>
                                        </li>
                                        <li>
                                            <a href="#accordion2"> Pago </a>
                                            <span> 01 </span>
                                        </li>
                                        <li>
                                            <a href="#accordion3"> Integraci??n </a>
                                            <span> 01 </span>
                                        </li>
                                        <li>
                                            <a href="#accordion4"> Cancelaci??n </a>
                                            <span> 02 </span>
                                        </li>
                                        <li>
                                            <a href="#accordion5"> Dispositivos </a>
                                            <span> 01 </span>
                                        </li>
                                        <li>
                                            <a href="#accordion6"> Datos </a>
                                            <span> 01 </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="faq-questions">
                                    <div class="accordion pt-lg-0" id="accordion1">
                                      <h5 class="sec-title mt-0"> <span> 01. </span> Instalaci??n </h5>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="hd1">
                                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bd1" aria-expanded="true" aria-controls="collapseOne">
                                          ??Cu??nto dura la instalaci??n?
                                          </button>
                                        </h2>
                                        <div id="bd1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion1">
                                          <div class="accordion-body">
                                              <div class="text">
                                                La instalaci??n la hacemos directamente desde nuestras oficinas y dura 1 d??a h??bil despu??s de haber recibido el pago correspondiente.
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                      <!-- ------- -->
                                    <div class="accordion" id="accordion2">
                                      <h5 class="sec-title"> <span> 02. </span> Pago </h5>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="hd4">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bd4" aria-expanded="true" aria-controls="collapseOne">
                                            ??Se puede pagar en varias partidas?
                                          </button>
                                        </h2>
                                        <div id="bd4" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion2">
                                          <div class="accordion-body">
                                              <div class="text">
                                                Claro que s??, se puede dividir el pago hasta en varias partidas durante el a??o. La instituci??n debe compromenterse a una fecha de pago cada mes durante el a??o.
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                      <!-- ------- -->
                                    <div class="accordion" id="accordion3">
                                      <h5 class="sec-title"> <span> 03. </span> Integraci??n </h5>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="hd7">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bd7" aria-expanded="true" aria-controls="collapseOne">
                                            ??SINTIA se puede integrar con otros sistemas?
                                          </button>
                                        </h2>
                                        <div id="bd7" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion3">
                                          <div class="accordion-body">
                                              <div class="text">
                                              Claro que s??, SINTIA tiene APIs de integraci??n para que sean usadas por otros sistemas y haya comunicaci??n entre ellos.
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                      <!-- ------- -->
                                    <div class="accordion" id="accordion4">
                                      <h5 class="sec-title"> <span> 04. </span> Cancelaci??n </h5>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="hd7">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bd7" aria-expanded="true" aria-controls="collapseOne">
                                            ??Qu?? pasa si no quedo satisfecho con la plataforma?
                                          </button>
                                        </h2>
                                        <div id="bd7" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion4">
                                          <div class="accordion-body">
                                              <div class="text">
                                                Queremos que est??s tranquilo al comprar. Si por alguna raz??n no quedas satisfecho con la plataforma o con el servicio post venta, tienes 90 d??as de devoluci??n garantizada sin compromiso alguno. Cero riesgos para usted.
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="hd8">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bd8" aria-expanded="false" aria-controls="collapseTwo">
                                            ??Puedo cancelar el servicio en cualquier momento?
                                          </button>
                                        </h2>
                                        <div id="bd8" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion4">
                                          <div class="accordion-body">
                                              <div class="text">
                                                Usted como cliente decide cuando renovar la licencia o cuando cancelarla. Basta con cancelar en l??nea desde la misma plataforma o con enviarnos un mensaje al email info@plataformasintia.com o al WhatsApp: +57 300 607 5800/b>, diciendo que deseas cancelar el servicio. Nosotros te entregamos toda la informaci??n depositada durante el tiempo que has trabajado con la plataforma. Cero riesgos para usted.
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                      <!-- ------- -->
                                    <div class="accordion" id="accordion5">
                                      <h5 class="sec-title"> <span> 05. </span> Dispositivos </h5>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="hd10">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bd10" aria-expanded="true" aria-controls="collapseOne">
                                            ??Puedo acceder desde mi tablet o celular?
                                          </button>
                                        </h2>
                                        <div id="bd10" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion5">
                                          <div class="accordion-body">
                                              <div class="text">
                                                S??, SINTIA se adapta a la resoluci??n de tu dispositivo.
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                      <!-- ------- -->
                                    <div class="accordion" id="accordion6">
                                      <h5 class="sec-title"> <span> 06. </span> Importaciones </h5>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="hd13">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bd13" aria-expanded="true" aria-controls="collapseOne">
                                            ??Puedo hacer una importaci??n inicial de mis datos?
                                          </button>
                                        </h2>
                                        <div id="bd13" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion6">
                                          <div class="accordion-body">
                                              <div class="text">
                                                S??. Si tienes la informaci??n en Excel o texto plano (txt) se puede realizar la importaci??n de los datos para empezar con el sistema al d??a.
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
            </div>
        </div>
        <!-- ====== end faq-body style-5 ====== -->
        
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


<!-- Mirrored from iteck-html.themescamp.com/page-faq-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2023 08:31:02 GMT -->
</html>