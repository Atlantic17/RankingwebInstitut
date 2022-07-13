<?php
session_start();
$matricule = $_SESSION['matricule'];
$idI = $_SESSION['idI'];
$idF = $_SESSION['idF'];
include('websiteDB.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>VoterInstitut</title>
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
            <h1 class="display-4 text-white animated slideInDown mb-4"> Verification</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">VoterInstitut</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">VoterInstitut2</li>
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
                    <form action="voter2.php" method="POST" class="con">
                        <h1>vote</h1>


                        <span>Nom Entreprise</span>
                        <input class="inputtbn" type="text" name="nomEn" placeholder="Entrez le Nom de l'entreprise" required>

                        <span>Secteur d'activite</span>
                        <input class="inputtbn" type="text" name="secteurActivite" placeholder="Entrez le secteur d'activite" required>

                        <span>Adresse</span>
                        <input class="inputtbn" type="text" name="adresseEn" placeholder="localisation" required>

                        <span>Temoigner</span>
                        <textarea class="inputtbn" name="Temoigner" placeholder="entrer votre opinion ici" required></textarea>

                        <span>Noter institut</span>
                        <input class="inputtbn" type="number" name="vote" placeholder="note sur 20" max="20" min="0" required>

                        <input class="input" type="submit" name="submit" value="Votez" />
                        <input class="input" type="reset" name="reset" value="Annuler" />
                    </form>
                </div>


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
try {
    $bdd = new PDO('mysql:host=localhost;dbname=yellow', 'root', '');
} catch (Exception $e) {
    die('Erreur:' . $e->getMessage());
}
if (isset($_POST['submit'])) {
    $nomEn = mysqli_real_escape_string($db, htmlspecialchars($_POST['nomEn']));
    $secteurActivite = mysqli_real_escape_string($db, htmlspecialchars($_POST['secteurActivite']));
    $adresseEn = mysqli_real_escape_string($db, htmlspecialchars($_POST['adresseEn']));
    $temoignage = mysqli_real_escape_string($db, htmlspecialchars($_POST['Temoigner']));
    $vote = mysqli_real_escape_string($db, htmlspecialchars($_POST['vote']));

    $requete = "SELECT * FROM entreprise WHERE nomEn ='$nomEn' AND secteurActivite ='$secteurActivite' AND adresseEn ='$adresseEn'  LIMIT 1";
    $results = $bdd->query($requete);
    $row = $results->fetch();
    if (!empty($row)) {
        $requete = "SELECT * FROM institutetudiant WHERE idI ='$idI' AND matricule='$matricule'  LIMIT 1";
        $results = $bdd->query($requete);
        $row = $results->fetch();
        if (!empty($row)) {
?>
            <script>
                alert("vous ne pouvez pas voter plus d'une  fois");
                window.location.replace("index.php");
            </script>
<?php
        } else {
            $query = "INSERT INTO institutetudiant (`idI`, `matricule`, `temoignage`, `vote`) VALUES ('$idI','$matricule','$temoignage','$vote')";
            $results = $bdd->exec($query);
            $querys = "INSERT INTO formationetudiant (`idF`, `matricule`, `temoignage`, `vote`) VALUES ('$idF','$matricule','$temoignage','$vote')";
            $resultss = $bdd->exec($querys);
        }
    } else {
        $query = "INSERT INTO `entreprise`(`nomEn`, `adresseEn`, `secteurActivite`) VALUES ('$nomEn','$adresseEn','$secteurActivite')";
        $results = $bdd->exec($query);
        $queryr = "INSERT INTO institutetudiant (`idI`, `matricule`, `temoignage`, `vote`) VALUES ('$idI','$matricule','$temoignage','$vote')";
        $resultsr = $bdd->exec($queryr);
        $querys = "INSERT INTO formationetudiant (`idF`, `matricule`, `temoignage`, `vote`) VALUES ('$idF','$matricule','$temoignage','$vote')";
        $resultss = $bdd->exec($querys);
    }
}

?>