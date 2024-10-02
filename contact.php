<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ExploreLocal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/LogoLocalExplore.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/LogoLocalExplore.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand text-success logo h1 align-self-center d-flex align-items-center" href="index.php">
                <img src="assets/img/LogoLocalExplore.png" alt="Logo" class="logo-img">
                <span class="ml-2">ExploreLocal</span>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../ExploreLocal/indexcuenta.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../ExploreLocal/about.php">Planes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../ExploreLocal/shop.php">Locales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../ExploreLocal/contact.php">Contactos</a>
                        </li>

                        <!-- Condicional de autenticación -->
                        <?php
                        if (isset($_SESSION['usuario'])) {
                            // Usuario está autenticado
                            echo '
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-icon" style="background-image: url(\'path_to_user_image\');"></div>
                                    ' . htmlspecialchars($_SESSION['usuario']) . '
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../ExploreLocal/profile.php">Perfil</a></li>
                                    <li><a class="dropdown-item" href="../ExploreLocal/logaut/logaut1.php">Cerrar sesión</a></li>
                                </ul>
                            </li>
                            ';
                        } else {
                            // Usuario no está autenticado
                            echo '
                            <li class="nav-item">
                                <a class="nav-link" href="../ExploreLocal/logaut/login_registro.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary text-white" href="../ExploreLocal/logaut/login_registro.php">Register</a>
                            </li>
                            ';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->

<!-- Modal -->
<div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="w-100 pt-1 mb-5 text-right">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="get" class="modal-content modal-body border-0 p-0">
            <div class="input-group mb-2">
                <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                <button type="submit" class="input-group-text bg-success text-light">
                    <i class="fa fa-fw fa-search text-white"></i>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Start Content Page -->
<div class="container-fluid bg-light py-5">
    <div class="col-md-6 m-auto text-center">
        <h1 class="h1">Contactos Infinity</h1>
        <p>
            Dinos tus inconvenientes con nuestra pagina o servicios
        </p>
    </div>
</div>

<!-- Start Map -->

<div class="map-container">
<style>
    /* Estilo básico para centrar el iframe en la página */
    .map-container {
        text-align: center;
        margin: 20px;
    }
    iframe {
        border: 0;
    }
</style>

    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31796.404217183986!2d-74.470206!3d5.01404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e409a46b61023ff%3A0x82094f500526ecb4!2sVilleta%2C%20Cundinamarca!5e0!3m2!1ses!2sco!4v1724362127878!5m2!1ses!2sco" 
        width="800" 
        height="600" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>
<!-- End Map -->

<!-- Start Contact -->
<div class="container py-5">
    <div class="row py-5">
        <form class="col-md-9 m-auto" method="post" role="form">
            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="inputname">Nombre</label>
                    <input type="text" class="form-control mt-1" id="name" name="" placeholder="">
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="inputemail">Email</label>
                    <input type="email" class="form-control mt-1" id="email" name="" placeholder="">
                </div>
            </div>
            <div class="mb-3">
                <label for="inputsubject">Motivo</label>
                <input type="text" class="form-control mt-1" id="subject" name="" placeholder="">
            </div>
            <div class="mb-3">
                <label for="inputmessage">Mensaje</label>
                <textarea class="form-control mt-1" id="message" name="" placeholder="" rows="8"></textarea>
            </div>
            <div class="row">
                <div class="col text-end mt-2">
                    <button type="submit" class="btn btn-success btn-lg px-3">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Contact -->

    
        <!-- Start Footer -->
       
        <footer class="bg-dark text-light py-5" id="footer">
    <div class="container">
        <div class="row mb-4">
            <!-- Company Info Section -->
            <div class="col-md-4 mb-3 mb-md-0">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">ExploreLocal</h2>
                <ul class="list-unstyled mt-4">
                    <li class="d-flex align-items-center mb-3">
                        <i class="fas fa-map-marker-alt me-2 fs-5"></i>
                        <span>Villeta</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="fa fa-phone me-2 fs-5"></i>
                        <a class="text-light text-decoration-none" href="tel:3135657271">313 565 7271</a>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="fa fa-envelope me-2 fs-5"></i>
                        <a class="text-light text-decoration-none" href="mailto:Infinity@company.com">Infinity@company.com</a>
                    </li>
                </ul>
            </div>
            <!-- Social Media Section -->
            <div class="col-md-8">
                <div class="d-flex flex-wrap justify-content-center justify-md-end mb-3">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/">
                                <i class="fab fa-linkedin fa-2x"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-100 my-4 border-top border-light"></div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="w-100 bg-black py-3">
            <div class="container text-center">
                <p class="mb-2">
                    &copy; <span id="current-year"></span> <a href="#" class="text-light text-decoration-none">Company Infinity</a>. All Rights Reserved.
                </p>
                <p class="mb-0">
                    <a href="#privacy-policy" class="text-light text-decoration-none">Privacy Policy</a> | 
                    <a href="#terms-of-service" class="text-light text-decoration-none">Terms of Service</a>
                </p>
            </div>
        </div>
    </div>
</footer>


<!-- Optional JavaScript for dynamic year -->
<script>
    document.getElementById('current-year').textContent = new Date().getFullYear();
</script>

<!-- Include Font Awesome (if not included elsewhere) -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Optional CSS for additional styling -->
<style>
    #footer {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .logo {
        font-family: 'Arial', sans-serif;
    }
    .text-light a {
        color: #e0e0e0;
    }
    .text-light a:hover {
        color: #b0b0b0;
        text-decoration: underline;
    }
    .fs-5 {
        font-size: 1.25rem;
    }
</style>

        <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>

    <!-- Map Script -->

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="../public/js/script.js"></script>
    <!-- End Script -->
</body>

</html>