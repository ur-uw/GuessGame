<?php
session_start();
require 'includes/db.inc.php';
$counter = 0;
if (isset($_GET["counter"])) {
    $counter = $_GET["counter"];
    if ($counter == 5) {
        $query = "DELETE  FROM players WHERE question='$q'";
        mysqli_query($conn, $query);
        session_unset();
        session_destroy();
        header('Location: index.php?error=you%20lose');
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guess Game | PLAYER 2</title>
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <h1 class="text-center text-success">player 2</h1>

    <div class="container">
        <?php
        $query = "SELECT * FROM players";
        $result = mysqli_query($conn, $query);
        if ($row = mysqli_fetch_assoc($result)) {
            $type = $row["type"];
            $q=$row['question'];
            $len=strlen($q);
        }
        ?>
        <?php if (isset($counter)) : ?>
            <span class="alert alert-danger text-center" style="border-radius:50%;">
                <?php echo $counter; ?>
            </span>
            <?php if (isset($_GET["error"])) : ?>
                <span class="alert alert-warning text-danger text-center"><?php echo $_GET["error"]; ?></span>
            <?php endif; ?>
        <?php endif; ?>
        <?php if(isset($type)) : ?>
           <span class="alert alert-info text-uppercase" style="float:right;"><?php echo $type." ".$len ;?></span>
        <?php endif; ?> 
        <div class="well">
            <form action="includes/compare.inc.php" method="POST" class="form-group">
                <?php
                echo "<input type='hidden' name='hidden' value='" . $counter . "'>";
                ?>
                <input type="text" class="form-control" name="ans" placeholder="Your answer">
                <button type="submit" name="sub-a" class="btn btn-danger sub-a">Submit YOUR ANSWER</button>
            </form>
        </div>
    </div>
</body>

</html>