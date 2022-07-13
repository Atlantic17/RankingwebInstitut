<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>connection</title>
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

        input[type=email],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        input[type=submit] {
            background-color: black;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        input[type=submit]:hover {
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
            <h1 class="display-4 text-white animated slideInDown mb-4"> Connexion</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Accuiel</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Connexion</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div>
        <div>
            <div class="aa">
                <div class="contenerr">
                    <p class="lead">Connectez vous </p>
                    <p>Uniquement reserver aux administrateurs du site.</p><br />
                    <form action="connection.php" method="POST" class="con">
                        <h1>Connexion</h1>

                        <label><b>Email</b></label>
                        <input type="email" placeholder="Entrer l'Email" name="email" required />

                        <label><b>Mot de passe</b></label>
                        <input type="password" placeholder="Entrer le mot de passe" name="password" required />

                        <input type="submit" name='submit' value='LOGIN'>
                        <?php
                        if (isset($_GET['erreur'])) {
                            $err = $_GET['erreur'];
                            if ($err == 1 || $err == 2) {
                                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                            }
                        }
                        ?> <br /> <br /> <br />
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
if (isset($_POST['email']) && isset($_POST['password'])) {
    // connexion à la base de données
    include 'websiteDB.php';
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    if ($email !== "" && $password !== "") {
        $email = mysqli_real_escape_string($db, htmlspecialchars($_POST['email']));
        $password = mysqli_real_escape_string($db, htmlspecialchars($_POST['password']));
        $query = mysqli_query($db, "SELECT * FROM administrateur WHERE email = '$email' AND password = '$password'");
        $num_rows = mysqli_num_rows($query);
        $row = mysqli_fetch_array($query);
        $_SESSION['idA'] = $row['idA'];
        if ($num_rows > 0) {
?>
            <script>
                alert('Connecxion avec Succes');
                document.location = 'index2.php'
            </script>
<?php
        } else {
            header('Location: connection.php');
        }
    }
}
?>