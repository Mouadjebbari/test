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
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>

<body>

    <!-- /navbar -->

    <!--/.span3-->
    <div class="span9">
        <div class="module">
            <div class="module-head">
                <h3>Update Details</h3>
            </div>
            <div class="module-body">


                <?php


                session_start();
                if (!isset($_SESSION['id_adherent'])) {
                    exit();
                }
                $id_adherent = $_SESSION['id_adherent'];
                $sql = "SELECT * FROM adherent WHERE id_adherent='$id_adherent'";
                $result = $connexion->query($sql);
                $row = $result->fetch_assoc();

                $telephone = $_POST['telephone'];
                $cin = $_POST['cin'];
                $date_naissance = $_POST['date_naissance'];
                $adresse = $_POST['adresse'];
                $nickname = $_POST['nickname'];
                $mot_de_passe = $_POST['mot_de_passe'];
                $date_inscription = $_POST['date_inscription'];
                $prenom = $_POST['prenom'];
                ?>

                <form class="form-horizontal row-fluid" action="edit_student_details.php?id=<?php echo $rollno ?>" method="post">

                    <input type="text" id="nom" name="nom" value="<?php echo $nom ?>" class="span8" required>

                    <select name="type" tabindex="1" value="<?php echo $type ?>" data-placeholder="Select Type" class="span6">
                        <option value="<?php echo $type ?>"><?php echo $type ?> </option>
                        <option value="Etudiant">Etudiant</option>
                        <option value="Enseignant">Enseignant</option>
                        <option value="Autre">Autre</option>
                    </select>

                    <input type="text" id="email" name="email" value="<?php echo $email ?>" class="span8" required>

                    <input type="text" id="telephone" name="telephone" value="<?php echo $telephone ?>" class="span8" required>

                    <input type="text" id="cin" name="cin" value="<?php echo $cin ?>" class="span8" required>

                    <input type="date" id="date_naissance" name="date_naissance" value="<?php echo $date_naissance ?>" class="span8" required>

                    <input type="text" id="adresse" name="adresse" value="<?php echo $adresse ?>" class="span8" required>

                    <input type="text" id="nickname" name="nickname" value="<?php echo $nickname ?>" class="span8" required>

                    <input type="password" id="mot_de_passe" name="mot_de_passe" value="<?php echo $mot_de_passe ?>" class="span8" required>

                    <input type="date" id="date_inscription" name="date_inscription" value="<?php echo $date_inscription ?>" class="span8" required>

                    <input type="text" id="prenom" name="prenom" value="<?php echo $prenom ?>" class="span8" required>

                </form>

            </div>
        </div>
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

    <?php
    if (isset($_POST['submit'])) {
        $rollno = $_GET['id'];
        $name = $_POST['Name'];
        $category = $_POST['Category'];
        $email = $_POST['EmailId'];
        $mobno = $_POST['MobNo'];
        $pswd = $_POST['Password'];

        $sql1 = "update LMS.user set Name='$name', Category='$category', EmailId='$email', MobNo='$mobno', Password='$pswd' where RollNo='$rollno'";



        if ($conn->query($sql1) === TRUE) {
            echo "<script type='text/javascript'>alert('Success')</script>";
            header("Refresh:0.01; url=index.php", true, 303);
        } else { //echo $conn->error;
            echo "<script type='text/javascript'>alert('Error')</script>";
        }
    }
    ?>

</body>

</html>