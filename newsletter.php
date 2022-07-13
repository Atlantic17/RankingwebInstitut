<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Newsletter</title>
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
            background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(./img/carousel-.JPG) center center no-repeat;
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
            <h1 class="display-4 text-white animated slideInDown mb-4"> Newsletters</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Newsletter</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div>
        <div>
            <div class="aa">
                <div class="contenerr">
                    <p class="lead">Abonnez-vous a la Newsletters </p>
                    <p>Vous devez vous abonnez pour continuellement recevoir les notifications concernant le site</p><br />
                    <form action="newsletter.php" method="POST" class="con">
                        <h1>S'abonner</h1>

                        <label><b>Nom</b></label>
                        <input type="text" class="inputtbn" placeholder="Entrer votre nom " name="nom" required />

                        <label><b>Email</b></label>
                        <input type="email" class="inputtbn" placeholder="Entrer votre Email " name="email" required />

                        <input type="submit" class="input" name='submit' value="Abonnez-Vous">
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

    $query = "SELECT * FROM newsletter WHERE nom='$nom' AND email='$email'  LIMIT 1";
    $results = mysqli_query($db, $query) or die('Error in updating Database');
    $row = mysqli_fetch_array($results);
    if (mysqli_num_rows($results) == 1) {
?>
        <script type="text/javascript">
            alert("vous etes deja abonner");
        </script>
    <?php
    } else {
        $query = "INSERT INTO newsletter
                (nom, email)
                VALUES ('" . $nom . "','" . $email . "')";
        mysqli_query($db, $query) or die('Error in updating Database');
    ?>
        <script type="text/javascript">
            alert("vous vous etes abonner avec Succes!!.");
            window.location = "Newsletter.php";
        </script>
<?php
    }
}
?>