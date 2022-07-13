<?php
session_start();
include 'websiteDB.php';
$id = $_SESSION['idA'];
$query = mysqli_query($db, "SELECT * FROM administrateur where idA='$id'") or die(mysqli_error($db));
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Profil Administrateur</title>
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
    include("headerA.php")
    ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4"> Modifier votre Profil</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index2.php">Accueil</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">ModifierProfil</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div>
        <div>
            <div class="aa">
                <form method="post" action="#">
                    <div class="input-group">
                        <label>Nom</label>
                        <input type="text" name="nom" class="inputtbn" value="<?php echo $row['nom']; ?>" required>
                    </div>
                    <div class="input-group">
                        <label>Prenom</label>
                        <input type="text" name="prenom" class="inputtbn" required value="<?php echo $row['prenom']; ?>">
                    </div>
                    <div class="input-group">
                        <label>Email</label>
                        <input type="email" name="email" class="inputtbn" value="<?php echo $row['email']; ?>">
                    </div>
                    <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password" class="inputtbn" value="<?php echo $row['password']; ?>">
                    </div>

                    <div class="input-group">
                        <input type="submit" class="input" name="submit" value="Modifier" />
                        <input type="reset" class="input" name="reset" value="Annuler" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    include("footerA.php")
    ?>

</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "UPDATE administrateur SET nom = '$nom',
                      prenom = '$prenom', email = '$email', password = '$password'
                      WHERE idA = '$id'";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
?>
    <script type="text/javascript">
        alert("mise a jour avec succes.");
        window.location = "profil.php";
    </script>
<?php
}
?>