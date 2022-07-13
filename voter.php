<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Verification</title>
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

        .aa {
            margin-left: auto;
            margin-right: auto;
            padding: 5% 10%;
            text-align: center;
        }

        form .con {
            width: 100%;
            padding: 30px;
            border: 1px solid #f1f1f1;
            background: #fff;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        #contenerr h1 {
            width: 38%;
            margin: 0 auto;
            padding-bottom: 10px;
        }

        .inputtbn {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        .input {
            background-color: black;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .input:hover {
            background-color: #F3BD00;
            color: white;
            border: 1px solid black;
        }

        .page-header {
            background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(./img/blog.JPG) center center no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <?php
    include("header.php")
    ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4"> Verification</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">VoterInstitut</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div>
        <div>
            <div class="aa">
                <div class="contenerr">
                    <p class="lead">verifier vos informations </p>
                    <p>Nous devons tout d'abord verifier vos informations tel que votre nom, l'email, le nom de l'institut dans laquelle vous avez frequenter, la formation que vous avez effectuer et votre filiere, pour que vous puissez voter.. Tout ses champs que nous vous demandons de remplir est pour la simple raison nous devons recolter des bonnes et reelle informations dans le site.</p>
                    <form action="voter.php" method="POST" class="con">
                        <h1>verification</h1>

                        <input type="text" class="inputtbn" name="nom" placeholder="Votre nom*" required data-validation-required-message="Please enter your name." />
                        <input type="email" class="inputtbn" name="email" placeholder="Votre Email *" required data-validation-required-message="Please enter your email address." />
                        <input type="text" class="inputtbn" name="nomI" placeholder="Nom Institut *" required data-validation-required-message="svp entrer le nom de l'institut." />
                        <input type="text" class="inputtbn" name="nomF" placeholder="Nom Formation *" required data-validation-required-message="Svp entrer le nom de la formation que vous avez effectuer." />
                        <input type="text" class="inputtbn" name="nomFi" placeholder="Votre Filiere *" required data-validation-required-message="Entrer votre filiere." />
                        <input size="19px" class="input" type="submit" name="submit" value="Valider" />

                        <br /> <br /> <br />
                        <br />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("footer.php")
    ?>

</body>

</html>
<?php

include 'websiteDB.php';
if (isset($_POST['submit'])) {
    $nom = mysqli_real_escape_string($db, htmlspecialchars($_POST['nom']));
    $email = mysqli_real_escape_string($db, htmlspecialchars($_POST['email']));
    $nomI = mysqli_real_escape_string($db, htmlspecialchars($_POST['nomI']));
    $nomF = mysqli_real_escape_string($db, htmlspecialchars($_POST['nomF']));
    $nomFi = mysqli_real_escape_string($db, htmlspecialchars($_POST['nomFi']));

    $query = "SELECT matricule, idI, idF,idFi FROM etudiant, institut, formation, filiere WHERE nomFi='$nomFi' AND nom='$nom' AND nomI='$nomI' AND nomF='$nomF' AND email='$email'  LIMIT 1";
    $results = mysqli_query($db, $query) or die('Error in updating Database');
    $row = mysqli_fetch_array($results);
    if (mysqli_num_rows($results) == 1) {
        $_SESSION["idI"] = $row['idI'];
        $_SESSION["matricule"] = $row['matricule'];
        $_SESSION['idF'] = $row['idF'];
?>
        <script>
            window.location.replace("voter2.php");
        </script>
    <?php  } else {
    ?>
        <script>
            alert("information incorrecte");
            window.location.replace("index.php");
        </script>
<?php
    }
}
?>