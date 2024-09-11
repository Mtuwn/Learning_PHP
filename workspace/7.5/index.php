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
                case "ari1chieu":
                    include_once("./pages/Ari1chieu.php");
                    break;
                case "matrix":
                    include_once("./pages/Matrix.php");
                    break;
                case "upload":
                    include_once("./pages/Upload.php");
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