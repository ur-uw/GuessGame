<?php session_start();
if (isset($_GET['error'])) {
    $error = $_GET["error"];
}
if (isset($_GET["success"])) {
    $success = $_GET["success"];
}
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
    <?php if (isset($error)) : ?>
        <div style="height:50px;" class="container alert alert-danger text-center"><?php echo $error; ?></div>
    <?php endif; ?>
    <?php if (isset($success)) : ?>
        <div style="height:50px;" class="container alert alert-success text-center"><?php echo $success; ?></div>
    <?php endif; ?>
    <?php if (!isset($_SESSION["q"])) : ?>
        <div class="container ">
            <a href="p1.php" class="btn btn-primary p1">PLAYER 1</a><br>
            <a href="p2.php" class="btn btn-danger p2">PLEAR 2</a>
        </div>
    <?php endif; ?>
    <?php if (isset($_SESSION["q"])) : ?>
        <div class="container text-center">
            <div class="alert alert-warning">
                <?php echo $_SESSION["q"]; ?>
            </div>
            <a href="includes/compare.inc.php?action=reset" class="btn btn-danger">RESET</a>
        </div>
        </script>
    <?php endif; ?>

</body>

</html>