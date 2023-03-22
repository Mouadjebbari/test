<?php
require_once 'connexion.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>

<body>

    <!--/.span3-->
    <div class="span9">
        <center>
            <div class="card" style="width: 50%;">
                <img class="card-img-top" src="img/profile2.png" alt="Card image cap">
                <div class="card-body">
                    <?php


                    session_start();
                    if (!isset($_SESSION['id_adherent'])) {
                        exit();
                    }

                    $id_adherent = $_SESSION['id_adherent'];
                    $sql = "SELECT * FROM adherent WHERE id_adherent='$id_adherent'";
                    $result = $connexion->query($sql);
                    $row = $result->fetch_assoc();

                    $nom = $row['nom'];
                    $email = $row['email'];
                    $adresse = $row['adresse'];
                    $telephone = $row['telephone'];
                    $cin = $row['cin'];
                    $date_naissance = $row['date_naissance'];
                    $type = $row['type'];
                    $nickname = $row['nickname'];
                    $mot_de_passe = $row['mot_de_passe'];
                    $prenom = $row['prenom'];
                    ?>
                    <i>
                        <h1 class="card-title">
                            <center><?php echo $nom ?></center>
                        </h1>
                        <br>
                        <p><b>Email ID: </b><?php echo $email ?></p>
                        <br>
                        <p><b>Address: </b><?php echo $adresse ?></p>
                        <br>
                        <p><b>Telephone: </b><?php echo $telephone ?></p>
                        <br>
                        <p><b>CIN: </b><?php echo $cin ?></p>
                        <br>
                        <p><b>Date of Birth: </b><?php echo $date_naissance ?></p>
                        <br>
                        <p><b>Type: </b><?php echo $type ?></p>
                        <br>
                        <p><b>Nickname: </b><?php echo $nickname ?></p>
                        <br>
                        <p><b>Password: </b><?php echo $mot_de_passe ?></p>
                        <br>
                        <p><b>First Name: </b><?php echo $prenom ?></p>
                    </i>
                </div>
            </div>
            <br>
            <a href="edit_profile.php" class="btn btn-primary">Edit Details</a>
        </center>
    </div>

    <!--/.span9-->
    </div>
    </div>


    <!--/.wrapper-->
    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="scripts/common.js" type="text/javascript"></script>

</body>

</html>