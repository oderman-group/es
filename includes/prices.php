<!-- ====== start pricing ====== -->
<style>
body {
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.banner {
    width: 1200px;
    height: 200px;
    background: linear-gradient(to right, #41c4c4, #6017dc);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-align: center;
    font-size: 1.5em;
    font-weight: bold;
    padding: 20px;
}

.cta-button {
    display: inline-block;
    padding: 15px 30px;
    margin-top: 20px;
    background-color: #fff;
    color: #6017dc;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

.cta-button:hover {
    background-color: #6017dc;
    color: #fff;
}

/* Media Query para pantallas más pequeñas */
@media (max-width: 768px) {
    .banner {
        height: auto;
        padding: 20px;
    }

    .cta-button {
        font-size: 1.2em;
    }
}
</style>
<section class="pricing section-padding style-5" data-scroll-index="3">
            <div class="container">
                <div class="section-head text-center mb-60 style-5">
                    <h2 class="mb-20"> Elige el Plan Perfecto <span> para tus Necesidades.</span> </h2>
                    
                    <div class="banner">
                    ¡En SINTIA, celebramos y apoyamos a las instituciones más pequeñas! Descubre nuestra tarifa especial diseñada para atender las necesidades de instituciones con hasta 50 estudiantes. ¡Haz que la excelencia educativa sea accesible para todos!<br>
                        <p><a href="https://api.whatsapp.com/send?phone=<?=$datos['dtc_whatsapp'];?>&text=Hola, estoy estoy interesado en el plan especial de la plataforma SINTIA..." target="_blank" class="cta-button">CONTÁCTANOS</a></p>
                    </div>

                    
                </div>

                <div class="alert alert-primary" role="alert" style="background-color: #41c3c46e; color:#6017dc; width:1200px;">
                        Si su institución requiere un plan personalizado, haga click en el siguiente número y hablemos por WhatsApp: <a href="https://api.whatsapp.com/send?phone=<?=$datos['dtc_whatsapp'];?>&text=Hola, estoy estoy interesado en vivir la experiencia con la plataforma SINTIA..." target="_blank" style="text-decoration:underline  !important; font-weight:bold;"><?=$datos['dtc_whatsapp'];?></a> o escibenos al correo <b><?=$datos['dtc_email_ventas'];?></b>
                    </div>
                
                <div class="pricing-tabsHead text-center">
                    <div class="price-radios">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="monthly-input"
                                value="option1">
                            <label class="form-check-label" for="monthly-input">
                                Pago Mensual
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="yearly-input"
                                value="option2" checked>
                            <label class="form-check-label" for="yearly-input">
                                Pago Anual (De contado)
                                <small class="alert-danger text-danger rounded-pill ms-1">-10%</small>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <div class="content">
                        <div class="price-head">
                            <div class="price-headTitle">
                                <img src="assets/img/icons/recurso_16.png" alt="" width="250">
                            </div>
                            <div class="price-headItem">
                                <h6>Silver</h6>
                                <h2 class="monthly_price secondary">$390.000 <span>/MES</span></h2>
                                <h2 class="yearly_price secondary">$351.000 <span>/MES</span></h2>
                            </div>
                            <div class="price-headItem">
                                <h6>Gold</h6>
                                <h2 class="monthly_price primary">$450.000 <span>/MES</span></h2>
                                <h2 class="yearly_price primary">$405.000 <span>/MES</span></h2>
                            </div>
                            <div class="price-headItem bg-gray5">
                                <h6>Diamond</h6>
                                <h2 class="monthly_price secondary">$490.000<span>/MES</span></h2>
                                <h2 class="yearly_price secondary">$441.000 <span>/MES</span></h2>
                                <div class="label">La mejor opción</div>
                            </div>
                        </div>

                        <div class="price-body">
                            

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Directivos
                                </div>
                                <div class="price-item">
                                    <span>1 a 10</span>
                                </div>
                                <div class="price-item">
                                    <span>11 a 15</span>
                                </div>
                                <div class="price-item bg-gray5">
                                    <span>16 a 70</span>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Docentes
                                </div>
                                <div class="price-item">
                                    <span>1 a 15</span>
                                </div>
                                <div class="price-item">
                                    <span>16 a 50</span>
                                </div>
                                <div class="price-item bg-gray5">
                                    <span>51 a 150</span>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Estudiantes y acudientes
                                </div>
                                <div class="price-item">
                                    <span>51 a 250</span>
                                </div>
                                <div class="price-item">
                                    <span>251 a 500</span>
                                </div>
                                <div class="price-item bg-gray5">
                                    <span>501 a 3.000</span>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Otros usuarios
                                    <div class="pop-info">
                                        <i class="fas fa-info-circle bttn-info"></i>
                                        <div class="hidden_content">
                                            <div class="title">Otros usuarios</div>
                                            <small class="small color-777 lh-5">
                                                Puedes crear otros usaurios que puedes usar como clientes, proveedores y más.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-item">
                                </div>
                                <div class="price-item">
                                    <span>Hasta 100</span>
                                </div>
                                <div class="price-item bg-gray5">
                                    <span>101 a 200</span>
                                </div>
                            </div>

                            <hr>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Módulo Académico
                                    <div class="pop-info">
                                        <i class="fas fa-info-circle bttn-info"></i>
                                        <div class="hidden_content">
                                            <div class="title">Módulo académico</div>
                                            <small class="small color-777 lh-5">
                                                Matrículas, cargas académicas, cursos, áreas, asignaturas
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-item">
                                <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Módulo Comunicativo
                                    <div class="pop-info">
                                        <i class="fas fa-info-circle bttn-info"></i>
                                        <div class="hidden_content">
                                            <div class="title">Módulo Comunicativo</div>
                                            <small class="small color-777 lh-5">
                                                Publicaciones, correo interno, envío de mensajes...
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-item">
                                <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>


                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Clases mediante videos
                                    <div class="pop-info">
                                        <i class="fas fa-info-circle bttn-info"></i>
                                        <div class="hidden_content">
                                            <div class="title">Clases mediante videos</div>
                                            <small class="small color-777 lh-5">
                                                Graba tus clases y deja que lo estudiantes la repasen o puedes usar videos que ya existan.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-item">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Tareas/Actividades para la casa
                                </div>
                                <div class="price-item">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Foros de discusión
                                </div>
                                <div class="price-item">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Carpetas Compartidas
                                </div>
                                <div class="price-item">
                                </div>
                                <div class="price-item">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Exámenes en línea
                                    <div class="pop-info">
                                        <i class="fas fa-info-circle bttn-info"></i>
                                        <div class="hidden_content">
                                            <div class="title">Exámenes en línea</div>
                                            <small class="small color-777 lh-5">
                                                Los docentes pueden crear exámenes, reutilizarlos, obtener los resultados de inmediato, exportar las notas y obtener los reportes necesarios.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-item">
                                </div>
                                <div class="price-item">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Módulo Financiero
                                    <div class="pop-info">
                                        <i class="fas fa-info-circle bttn-info"></i>
                                        <div class="hidden_content">
                                            <div class="title">Módulo financiero</div>
                                            <small class="small color-777 lh-5">
                                            Cobros, ingresos, egresos, cotizaciones, items de inventarios, facturas recurrentes, estados de cuenta...
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-item"></div>

                                <div class="price-item"></div>
                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>


                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Módulo de Convivencia
                                    <div class="pop-info">
                                        <i class="fas fa-info-circle bttn-info"></i>
                                        <div class="hidden_content">
                                            <div class="title">Módulo de convivencia</div>
                                            <small class="small color-777 lh-5">
                                                Reportes, faltas, observador del alumno...
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-item"></div>
                                
                                <div class="price-item"></div>

                                <div class="price-item  bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Módulo de media técnica
                                    <div class="pop-info">
                                        <i class="fas fa-info-circle bttn-info"></i>
                                        <div class="hidden_content">
                                            <div class="title">Módulo de media técnica</div>
                                            <small class="small color-777 lh-5">
                                                Cursos adicionales y particulares por cada  estudiante.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-item"></div>
                                
                                <div class="price-item"></div>

                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Módulo de inscripciones
                                    <div class="pop-info">
                                        <i class="fas fa-info-circle bttn-info"></i>
                                        <div class="hidden_content">
                                            <div class="title">Módulo de inscripciones</div>
                                            <small class="small color-777 lh-5">
                                                Inscripciones y admisiones estudiantiles
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-item"></div>
                                
                                <div class="price-item"></div>

                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Módulo de roles y permisos
                                    <div class="pop-info">
                                        <i class="fas fa-info-circle bttn-info"></i>
                                        <div class="hidden_content">
                                            <div class="title">Módulo de roles y permisos</div>
                                            <small class="small color-777 lh-5">
                                                Creación de roles y permisos por cada usuarios.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-item"></div>
                                
                                <div class="price-item"></div>

                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Cuestionarios y encuestas
                                    <div class="pop-info">
                                        <i class="fas fa-info-circle bttn-info"></i>
                                        <div class="hidden_content">
                                            <div class="title">Cuestionarios y encuestas</div>
                                            <small class="small color-777 lh-5">
                                                Evalúe procesos, usuarios y obtenga todos los reportes de inmediato.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-item"></div>
                                
                                <div class="price-item"></div>

                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Inteligencia Artificial
                                    <div class="pop-info">
                                        <i class="fas fa-info-circle bttn-info"></i>
                                        <div class="hidden_content">
                                            <div class="title">Inteligencia Artificial</div>
                                            <small class="small color-777 lh-5">
                                                Potencia tu educación con la magia de la inteligencia artificial en Sintia.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-item"></div>
                                
                                <div class="price-item"></div>

                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>

                            <hr>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Capacitación virtual
                                </div>
                                <div class="price-item">
                                    2 SESIONES (MAX. 1 HORA)
                                </div>
                                <div class="price-item">
                                    4 SESIONES (MAX. 1 HORA)
                                </div>
                                <div class="price-item bg-gray5">
                                    6 SESIONES (MAX. 1 HORA)
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Manual en linea
                                </div>
                                <div class="price-item">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Tutorial por pantalla
                                </div>
                                <div class="price-item">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Garantía
                                </div>
                                <div class="price-item">
                                    Siempre
                                </div>
                                <div class="price-item">
                                    Siempre
                                </div>
                                <div class="price-item bg-gray5">
                                    Siempre
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Almacenamiento
                                </div>
                                <div class="price-item">
                                    5 GB
                                </div>
                                <div class="price-item">
                                    10 GB
                                </div>
                                <div class="price-item bg-gray5">
                                    25 GB
                                </div>
                            </div>

                            <hr>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Soporte técnico y asesoría
                                </div>
                                <div class="price-item">
                                    Solo errores de la plataforma
                                </div>
                                <div class="price-item">
                                    Solo errores de la plataforma
                                </div>
                                <div class="price-item bg-gray5">
                                    Prioritario
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Soporte por correo
                                </div>
                                <div class="price-item">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Soporte por whatsapp
                                </div>
                                <div class="price-item">
                                </div>
                                <div class="price-item">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Soporte por llamada
                                </div>
                                <div class="price-item">
                                </div>
                                <div class="price-item">
                                </div>
                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Horario de atención
                                    <div class="pop-info">
                                        <i class="fas fa-info-circle bttn-info"></i>
                                        <div class="hidden_content">
                                            <div class="title">Horario de atención</div>
                                            <small class="small color-777 lh-5">
                                                <b>Normal:</b> Lunes a viernes de 8 a 5 p.m, en orden de solicitudes.<br>
                                                <b>Extendido:</b> Incluye domingos y festivos, incluso horario nocturno hasta las 8 pm entre semana.<br><br>
                                                <b>El sabado es día de reposo para nuestra compañia, por tanto no ofrecemos servicio de atención</b>.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-item">
                                    Normal
                                </div>
                                <div class="price-item">
                                    Normal
                                </div>
                                <div class="price-item bg-gray5">
                                    Extendido
                                </div>
                            </div>

                            <hr>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Respaldo de datos
                                </div>
                                <div class="price-item">
                                    Diario
                                </div>
                                <div class="price-item">
                                    Diario
                                </div>
                                <div class="price-item bg-gray5">
                                    Diario
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Importación inicial de la información
                                </div>
                                <div class="price-item">
                                    $490.000 COP.
                                </div>
                                <div class="price-item">
                                    <i class="bi bi-check2"></i>
                                </div>
                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Personalización de documentos
                                    <div class="pop-info">
                                        <i class="fas fa-info-circle bttn-info"></i>
                                        <div class="hidden_content">
                                            <div class="title">Personalización de documentos</div>
                                            <small class="small color-777 lh-5">
                                                La plataforma cuenta con varios formatos de documentos como boletines, certificados, libros, sin embargo tu institución puede solicitar la personalización de estos. 
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-item">
                                    $290.000 COP.
                                </div>
                                <div class="price-item">
                                    $290.000 COP.
                                </div>
                                <div class="price-item bg-gray5">
                                    <i class="bi bi-check2"></i>
                                </div>
                            </div>

                            <div class="price-bodyItems">
                                <div class="price-bodyTitle">
                                    Desarrollos adicionales
                                </div>
                                <div class="price-item">
                                    Requiere cotización
                                </div>
                                <div class="price-item">
                                    Requiere cotización
                                </div>
                                <div class="price-item bg-gray5">
                                    Requiere cotización
                                </div>
                            </div>



                        <div class="price-foot">
                            <div class="price-footTitle">
                            </div>
                            <div class="price-footItem">
                                <a href="prueba-gratis.php?plan=1" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold">
                                    <span> Empezar ahora </span>
                                </a>
                            </div>
                            <div class="price-footItem">
                                <a href="prueba-gratis.php?plan=2" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold">
                                    <span> Empezar ahora </span>
                                </a>
                            </div>
                            <div class="price-footItem bg-gray5">
                                <a href="prueba-gratis.php?plan=3" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold">
                                    <span> Empezar ahora </span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end pricing ====== -->