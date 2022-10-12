<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_database = "biodata_lunar";



     //Database connection
    $db = mysqli_connect($server, $user, $password, $nama_database);
    if(!$db) {
        die("Failed to Regist : ". mysqli_connect_error());
    }
?>    


<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Index - Lunar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="main.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="animate.min.css">
</head>

<body>
        <!-- Navbar & Start -->
    <div class="nep">
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <h1 class="m-0"> <path class="m-0" d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16
                     0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 
                     0-1.167.242-2.278.681-3.286z"/>
                     Lunar</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="case-table.php" class="nav-item nav-link">Table</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Gallery</a>
                            <div class="dropdown-menu m-0">
                                <a href="https://agungmardika.github.io/agungdmardika.io/" class="dropdown-item">Agung</a>
                                <a href="" class="dropdown-item">Alfandi</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Social Media</a>
                            <div class="dropdown-menu m-0">
                                <a href="https://www.instagram.com/lunar.ive/" class="dropdown-item">Instagram - Agung</a>
                                <a href="https://www.instagram.com/fandi_sannn/" class="dropdown-item">Instagram - Alfandi</a>
                            </div>
                        </div>
                    </div>
                    <a href="https://id.wikipedia.org/wiki/Bulan#:~:text=Bulan%20adalah%20satelit%20alami%20Bumi,81%20(1.23%25)%20dari%20Bumi." class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">Reference</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Welcome Admin!</h1>
                           <p class="text-white pb-3 animated zoomIn">Made by Agung, Alfandi</p>
                            <a href="case-table.php" class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Handle Data</a>
                        </div>
                        <div class="col-lg-4 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="cab.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Navbar End -->


        <!-- About Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow zoomIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="stat.jpg" alt="stat">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">About Material</div>
                        <h2 class="mb-4">Create, Read, Update, and Delete Using Database</h2>
                        <div class="row g-3 mb-4">
                            <div class="col-12 d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-user-tie text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h6>HTML</h6>
                                    <span>HTML (HyperText Markup Language) is a language that uses certain signs (Tags) to represent codes that can be displayed correctly on the web.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-chart-line text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h6>PHP</h6>
                                    <span>PHP is useful for website development and can work with servers. In other words we can say, this language is meant to handle the back-end.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!--  Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Tools</div>
                    <h2 class="mb-5">Tools Used</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-user-tie fa-2x"></i>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">HTML</h5>
                                <span>Digunakan untuk kerangka website.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-pie fa-2x"></i>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">CSS</h5>
                                <span>Digunakan untuk menciptakan animasi yang aktraktif.</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-chart-area fa-2x"></i>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">Bootstrap</h5>
                                <span>Framework Bootstrap untuk membuat website responsive dan tampilan yang menarik.</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item rounded h-100">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa fa-house-damage fa-2x"></i>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">PHP</h5>
                                <span>Digunakan untuk mengelola database.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16">
                            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
                          </svg> Lunar</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>SMK Telkom Banjarbaru</p>
                        <p><i class="fa fa-envelope me-3"></i>lunar.team@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/channel/UCcZD9K5GSRSCSsZK5VANM6Q/featured"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/smktelkombanjarbaru/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Tools</h5>
                        <a class="btn btn-link" href="">HTML</a>
                        <a class="btn btn-link" href="">Bootstrap</a>
                        <a class="btn btn-link" href="">CSS</a>
                        <a class="btn btn-link" href="">PHP</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Team</h5>
                        <a class="btn btn-link" href="">Agung Dwi Mardika</a>
                        <a class="btn btn-link" href="">Alfandi Hassan</a>
                    </div>


                    <div class="col-md-5 col-lg-3">
                        <form autocomplete="off">
                        <h5 class="text-white mb-4">Send Us Massage <a href="mailto:agungdmardika@gmail.com">&#128231;</a></h5>
                        <div class="position-relative w-100 mt-3">
                            <input name="massage" class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Massage" style="height: 48px;">
                            <button name="simpan" type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"> <a href="mailto:agungdmardika@gmail.com"> <i class="fa fa-paper-plane text-primary fs-4"></i></a></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Lunar & Team</a>, All Right Reserved. 
							
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->




        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>