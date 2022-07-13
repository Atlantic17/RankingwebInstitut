<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>RANKING WEB OF INSTITUTS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.JPG" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .logo {
            width: 60px;
            padding-right: 20px;
        }

        .page-header {
            background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(./img/blog.JPG) center center no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <?php
    include 'header.php';
    ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">A propos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/aa.JPG" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/about-2.JPG" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-primary text-uppercase mb-2">A propos</h6>
                        <h1 class="display-6 mb-4">Nous aidons les etudiant a faire un choix d'institut</h1>
                        <p class="mb-4">Chaque année, le nombre d’étudiants qui souhaitent s’inscrire dans les universités augmente. Par conséquent, les étudiants font face à des difficultés dans leur prise de décision institutionnelle. Comme solution, le RANKING WEB OF UNIVERSITY compare les performances des l’universités et affiche le classement. Les classements de l’université seront mis à jour chaque année afin d’inclure les universités Camerounaisse locales</p>
                        <div class="row g-2 mb-4 pb-2">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2">Faculte des sciences</i>
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2">Licence</i>
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2">Informatique</i>
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2">Niveau III</i>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <a class="btn btn-primary py-3 px-5" href="">Autres Info</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:+237673030965">
                                    <span class="flex-shrink-0 btn-square bg-primary">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </span>
                                    <span class="px-3">+237 673 030 965</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    
    <?php
    include 'footer.php';
    ?>

</body>

</html>