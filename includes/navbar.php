<!-- ====== start navbar ====== -->
<nav class="navbar navbar-expand-lg navbar-light style-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/img/sintia-logo-2023.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 
                if($paginaActual == 'index.php'){
                    include("menu-index.php");
                }else{
                    include("menu-other-pages.php");
                }
                ?>
                <div class="nav-side">
                    <div class="d-flex align-items-center">
                        <span class="nav-item">
                            <a class="nav-link" href="https://main.plataformasintia.com/app-sintia/main-app/" target="_blank">
                                <i class="bi bi-person fs-5 me-2"></i>
                                Ingresar al sistema
                            </a>
                        </span>
                        <a href="prueba-gratis.php" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold">
                            <span>Prueba gratis <i class="bi bi-arrow-right ms-1"></i> </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- ====== end navbar ====== -->