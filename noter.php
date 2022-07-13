<?php 
session_start();
include('websiteDB.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>NoterEtudiant</title>
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
        .logo{
    width:60px;
    padding-right:20px;
    }  
    .aa{ 
    margin-left: auto;
    margin-right: auto;
    padding: 5% 10%;
    text-align: center;
}
form .con {
    width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#contenerr h1{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
}
.inputtbn{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
.input{
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
    background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(./img/carousel1.JPG) center center no-repeat;
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
            <h1 class="display-4 text-white animated slideInDown mb-4"> Appreciations </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">NoterEtudiant</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

            <div>
                <div>
                    <div class="aa">
                        <div class="contenerr">
                    <p class="lead">Notez un Etudiant </p>
                    <p>Ce formulaire permet d'apprecier un etudiant, vous devez tout d'abord identifier l'etudiant que vous avez emploiyer et que vous voulez noter...</p>
                            <form action="noter.php" method="POST" class="con">
                <h1>Notez</h1>
                <span>Nom Entreprise</span>
<input type="text" name="nomEn" placeholder="Entrez le Nom de l'entreprise" class="inputtbn" required>
<span>Secteur d'activite</span>
<input  type="text" name="secteurActivite" placeholder="Entrez le secteur d'activite" class="inputtbn"  required>
<span >Adresse</span>
<input  type="text" name="adresseEn" placeholder="localisation" class="inputtbn"  required>
<span>Nom Etudiant</span>
<input type="text" name="nom" placeholder="Entrez le Nom de l'etudiant" class="inputtbn" required>
<span >Email Etudiant</span>
<input type="email" name="email" placeholder="Entrez l'Email de l'etudiant" class="inputtbn" required>
<span>Avis</span>
<textarea name="avis" placeholder="Avis que vous avez de l'etudiant" class="inputtbn" required></textarea>
<span>noter pour l'etidiant</span>
<input type="number" name="note" placeholder="note sur 20" max="20" min="0" class="inputtbn" required>

<div class="input-group"> 
        <input type="submit" class="input" name="submit" value="Votez" /> 
        <input type="reset" class="input" name="reset" value="Annulez le vote" /> 
</div>
</div>
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
        try{
          $bdd = new PDO('mysql:host=localhost;dbname=yellow', 'root','');
      }catch(Exception $e){
          die('Erreur:'.$e->getMessage());
      }
      if(isset($_POST['submit'])){
      $nomEn = mysqli_real_escape_string($db,htmlspecialchars($_POST['nomEn']));
      $secteurActivite = mysqli_real_escape_string($db,htmlspecialchars($_POST['secteurActivite'])); 
      $adresseEn = mysqli_real_escape_string($db,htmlspecialchars($_POST['adresseEn']));
      $nom = mysqli_real_escape_string($db,htmlspecialchars($_POST['nom']));
      $email = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
      $avis = mysqli_real_escape_string($db,htmlspecialchars($_POST['avis']));
      $note = mysqli_real_escape_string($db,htmlspecialchars($_POST['note']));
      
      $query = "SELECT * FROM etudiant WHERE nom='$nom' AND email='$email'  LIMIT 1";
  $results = $bdd->query($query);
  $row1= $results->fetch();
    if (!empty($row1)) {
      $requete = "SELECT * FROM entreprise WHERE nomEn ='$nomEn' AND secteurActivite ='$secteurActivite' AND adresseEn ='$adresseEn'  LIMIT 1";
      $results= $bdd->query($requete);
      $row= $results->fetch();
        if (!empty($row)) {
            $requete = "SELECT * FROM entrepriseetudiant WHERE idEn ='$row[idEn]' AND matricule ='$row1[matricule]' LIMIT 1";
            $results= $bdd->query($requete);
            $row= $results->fetch();
            if (!empty($row)) {
                ?>
                <script>
                    alert("vous ne pouvez pas noter un etudiant plus d'une  fois");
                window.location.replace("index.php");
                </script>
                <?php
            }else{
              $query = "INSERT INTO entrepriseetudiant (`idEn`, `matricule`, `avis`, `note`) VALUES ('$row[idEn]','$row1[matricule]','$avis','$note')";
              $results = $bdd->exec($query);
      }
        }else{
              $query = "INSERT INTO `entreprise` (`nomEn`, `adresseEn`, `secteurActivite`) VALUES ('$nomEn','$adresseEn','$secteurActivite')";
              $results = $bdd->exec($query);
              $queryr = "INSERT INTO entrepriseetudiant (`idEn`, `matricule`, `avis`, `note`) VALUES ('$row[idEn]','$row1[matricule]','$avis','$note')";
          $resultsr = $bdd->exec($queryr);
        }
      
      }else{
        ?>
        <script>
          alert("l'etudiane que vous avez mentioner n'existe pas, retifier et recommencer");
      window.location.replace("noter.php");
      </script>
      <?php
      }        
  }           
   ?>     