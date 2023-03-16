<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Clinica Shiloh - Clínica de Reprodução Humana</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/icone.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-dark" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-dark me-2"></small>
                    <small>Rua Torrinha 131 - Cidade Mãe do Céu Tatuapé - SP</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small><a class="button btn btn-primary" data-bs-toggle="modal" data-bs-target="#hour"><i class="fa-regular fa-clock"></i><span>Todos os horários</span> </a></small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-dark me-2"></small>
                    <small>11 2675 1532 | 99510 2630</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square rounded-circle bg-white text-dark me-1" data-wow-delay="0.1s" href="https://www.instagram.com/shilohfertilidade/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-dark me-1" data-wow-delay="0.2s" href="https://www.linkedin.com/company/grupo-shiloh/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-dark me-1" data-wow-delay="0.3s" href="mailto:atendimento@shilohfertilidade.com.br"><i class="fa-solid fa-envelope"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-dark me-1" data-wow-delay="0.4s" href="https://www.youtube.com/channel/UCzrCkzmV0QVHyRBwb2sz35w"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-dark me-1" data-wow-delay="0.5s" href="https://www.facebook.com/shilohfertilidade"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-dark me-1" data-wow-delay="0.6s" href="https://api.whatsapp.com/send/?phone=5511995102630&text=Olá%21+Gostaria+de+agendar+uma+consulta.&type=phone_number&app_absent=0"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Modal Horários -->
    <div class="modal fade profile" id="hour" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title text-center" id="exampleModalLabel">Todos os horários</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Segunda-feira a sexta: das 7h às 21h</p>
                    <p>Sábado: das 7h às 16h</p>
                    <p>Domingos e feriados: Somente procedimentos</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-x"></i> <span>Fechar</span> </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Horários End -->


    <!-- Navbar Start -->
    <nav class="navbar fill navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="/" class="navbar-brand d-flex px-4 px-lg-5">
            <img class="img-fluid" src="img/logo.png" alt="">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link <?php if (url_is('home')) {
                                                            echo "active";
                                                        } ?>"><i class="fa-solid fa-house me-1"></i>Home</a>
                <a href="clinic" class="nav-item nav-link <?php if (url_is('clinic')) {
                                                                echo "active";
                                                            } ?> "><i class="fa-regular fa-hospital me-1"></i>A Clínica</a>
                <a href="blog" class="nav-item nav-link <?php if (url_is('blog')) {
                                                            echo "active";
                                                        } ?>"><i class="fa-solid fa-blog me-1"></i>Blog</a>
                <a href="" class="nav-item nav-link <?php if (url_is('treatments')) {
                                                        echo "active";
                                                    } ?>" data-bs-toggle="modal" data-bs-target="#tratamento"><span><i class="fa-solid fa-notes-medical me-1"></i>Tratamentos</span> </a>
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tratamentos</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <ul>
                            <li><a href="fiv" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Fertilização in vitro (FIV)</a></li>
                            <li><a href="icsi" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Injeção intracitoplasmática do espermatozoide (ICSI)</a></li>
                            <li><a href="ia" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Inseminação intrauterina (IIU)</a></li>
                            <li><a href="cop" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Coito programado</a></li>
                            <li><a href="co" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Preservação de fertilidade (congelamento de óvulos)</a></li>
                        </ul>
                        <ul>
                            <li><a href="pdo" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Programa de doação de óvulos</a></li>
                            <li><a href="pi" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Produção Independente</a></li>
                            <li><a href="ctu" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Cessão Temporária de útero (barriga solidária)</a></li>
                            <li><a href="banco" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Banco de Sêmen</a></li>
                            <li><a href="rce" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Retirada cirúrgica de espermatozóide (TESA, MESA, TESE)</a></li>
                            <li><a href="ch" class="dropdown-item btn btn-light mb-2 link-dark underline rounded">Casais homoafetivos</a></li>
                        </ul>
                    </div>
                </div> -->
                <a href="costs" class="nav-item nav-link <?php if (url_is('costs')) {
                                                                echo "active";
                                                            } ?>"><i class="fa-solid fa-dollar-sign me-1"></i>Custos</a>
                <a href="faq" class="nav-item nav-link <?php if (url_is('faq')) {
                                                            echo "active";
                                                        } ?>"><i class="fa-solid fa-circle-question me-1"></i>Perguntas</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-solid fa-hand-holding-heart me-1"></i>Ovodoação</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="legislacao" class="dropdown-item">Legislação</a>
                        <a href="ovodoacao-e-ovorecepcao" class="dropdown-item">Ovodoação e Ovorecepção</a>
                    </div>
                </div>
            </div>
            <a href="contact" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block"><i class="fa-solid fa-mobile-screen-button me-1"></i>Contato<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Modal Tratamento Start -->
    <div class="modal fade profile" id="tratamento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class=" text-center" id="exampleModalLabel">Todos os Tratamentos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row d-flex justify-content-center treat">
                        <a href="fiv" class="nav-link col-lg-2 col-6  btn btn-light mb-2 link-dark underline rounded"><img class="card-img-top" src="img/Treatment/fiv.jpg" alt="">Fertilização in vitro (FIV)</a>
                        <a href="icsi" class="nav-link col-lg-2 col-6  btn btn-light mb-2 link-dark underline rounded"><img class="card-img-top" src="img/Treatment/icsi.jpg" alt="">Injeção intracitoplasmática do espermatozoide (ICSI)</a>
                        <a href="ia" class="nav-link col-lg-2 col-6  btn btn-light mb-2 link-dark underline rounded"><img class="card-img-top" src="img/Treatment/ia.jpg" alt="">Inseminação intrauterina (IIU)</a>
                        <a href="cop" class="nav-link col-lg-2 col-6  btn btn-light mb-2 link-dark underline rounded"><img class="card-img-top" src="img/Treatment/coitoProgramado.jpg" alt="">Coito programado</a>
                        <a href="co" class="nav-link col-lg-2 col-6  btn btn-light mb-2 link-dark underline rounded"><img class="card-img-top" src="img/Treatment/co.jpg" alt="">Preservação de fertilidade (congelamento de óvulos)</a>
                        <a href="pdo" class="nav-link col-lg-2 col-6  btn btn-light mb-2 link-dark underline rounded"><img class="card-img-top" src="img/Treatment/ovodoacao.jpg" alt="">Programa de doação de óvulos</a>
                        <a href="pi" class="nav-link col-lg-2 col-6  btn btn-light mb-2 link-dark underline rounded"><img class="card-img-top" src="img/Treatment/pi.jpg" alt="">Produção Independente</a>
                        <a href="ctu" class="nav-link col-lg-2 col-6  btn btn-light mb-2 link-dark underline rounded"><img class="card-img-top" src="img/Treatment/cessaoUtero.jpg" alt="">Cessão Temporária de útero (barriga solidária)</a>
                        <a href="banco" class="nav-link col-lg-2 col-6  btn btn-light mb-2 link-dark underline rounded"><img class="card-img-top" src="img/Treatment/bancoSemem.jpg" alt="">Banco de Sêmen</a>
                        <a href="rce" class="nav-link col-lg-2 col-6  btn btn-light mb-2 link-dark underline rounded"><img class="card-img-top" src="img/Treatment/espermatozoide.jpg" alt="">Retirada cirúrgica de espermatozóide (TESA, MESA, TESE)</a>
                        <a href="ch" class="nav-link col-lg-2 col-6  btn btn-light mb-2 link-dark underline rounded"><img class="card-img-top" src="img/Treatment/casaisHomoafetivas.jpg" alt="">Casais homoafetivos</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-x"></i> <span>Fechar</span> </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tratamento End -->