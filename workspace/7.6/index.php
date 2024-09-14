<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7.5</title>
    <link rel="stylesheet" href="./lib/css/style.css">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        include "./pages/Head.php";
        include "./pages/Left.php";
        ?>
<!-- 
        <div id="comment-content">
            <p>Moi page duoc chay tren nen trang Index.php</p>
        </div> -->

        <?php
        if (!empty($_GET['page'])) {
            switch ($_GET['page']) {
                case "contact":
                    include_once("./pages/Contact1Page.php");
                    break;
                case "register":
                    include_once("./pages/Register.php");
                    break;
                default:
                include_once("./pages/Home.php");
            }
        }
        ?>


    </div>

    <script src="./lib/js/script.js"></script>

</body>

</html>