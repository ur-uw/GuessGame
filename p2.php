<?php
session_start();
if (isset($_POST["ans"])){
    $answer= $_POST["ans"];
}
$counter;
if (isset($_SESSION["q"])) {
    $counter = 0;
    $question = $_SESSION["q"];
    if (isset($_POST["hidden"])) {
        $counter = $_POST["hidden"];
    }
    //compairing
    if (isset($_POST["ans"]) && $question == $answer) {
        session_unset();
        session_destroy();
        
        header('Location: index.php?success=You%20won');
    } elseif (isset($_POST["sub-a"]) && isset($_POST["ans"]) && $question !== $answer) {
        $counter++;
        if ($counter == 5) {
            header('Location: index.php?error=YOU%20LOSE');
            session_unset();
            session_destroy();
        }
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
        <?php if (isset($counter)) : ?>
            <span class="alert alert-danger text-center" style="border-radius:50%;">
                <?php echo $counter; ?>
            </span>
        <?php endif; ?>
        <div class="well">
            <form action="p2.php" method="POST" class="form-group">
                <?php if (!isset($_SESSION["q"])) {
                    header('Loacation: p2.php');
                }else {
                    echo "<input type='hidden' name='hidden' value='" . $counter . "'>";
                }
                
                ?>
                <input type="text" class="form-control" name="ans" placeholder="Your answer">
                <button type="submit" name="sub-a" class="btn btn-danger sub-a">Submit YOUR ANSWER</button>
            </form>
        </div>
    </div>
</body>

</html>