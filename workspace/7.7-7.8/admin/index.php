<?php
session_start();

if ($_SESSION['name'] != "admin" && $_SESSION["passwd"] != "admin") {
    header("Location: ../index.php?page=login");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7.7</title>
    <link rel="stylesheet" href="../lib/css/style.css">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container-admin">
        <div class="head">
            <img src="../images/lauout_10.jpg" alt="">
        </div>
        <div class="left">
            <form action="" class="form-input-admin" method="get">
                <input type="hidden" id="input-admin" value="" name="page">
                <button type="button" class="custom-button-admin" value="returnhome"> Return Home</button>
                <button type="button" class="custom-button-admin" value="adminhome">Admin Home</button>
                <button type="button" class="custom-button-admin" value="logout">Logout</button>
                <button type="button" class="custom-button-admin" value="upload">Upload</button>
            </form>
        </div>
        <div class="content-admin">
            <?php
            if (!empty($_GET['page'])) {
                switch ($_GET['page']) {
                    case "returnhome":
                        include_once("./pages/Returnhome.php");
                        break;
                    case "adminhome":

                    case "logout":
                        header("Location: pages/logout.php");
                        exit();
                    case "upload":
                        include_once("./pages/Upload.php");
                        break;
                    default:
                        include_once("./pages/Returnhome.php");
                }
            }
            ?>
        </div>



    </div>

    <script src="index.js"></script>

</body>

</html>