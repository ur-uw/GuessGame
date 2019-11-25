<?php session_start(); 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guess Game</title>
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <h1 class="text-center text-info">GUESS GAME</h1>
    <?php if (!isset($_SESSION["q"])) : ?>
        <div class="container ">
            <a href="p1.php" class="btn btn-primary p1">PLAYER 1</a><br>
            <a href="p2.php" class="btn btn-danger p2">PLEAR 2</a>
        </div>
    <?php endif; ?>
    <?php if (isset($_SESSION["q"])) : ?>
        <div class="coontainer text-center">
            <div class="alert alert-warning">
                <?php echo $_SESSION["q"]; ?>
            </div>
        </div>
    <?php endif; ?>

</body>

</html>