<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7.7</title>
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

        <?php
        if (!empty($_GET['page'])) {
            switch ($_GET['page']) {
                case "login":
                    include_once("./pages/Login.php");
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