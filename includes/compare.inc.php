<?php
    session_start();
    if (isset($_POST["sub-q"]) && !empty($_POST["ask"])) {
        require 'db.inc.php';
       $question=mysqli_real_escape_string($conn,$_POST["ask"]);
       $query = "INSERT INTO players(question) VALUES('$question')";
       if (!mysqli_query($conn,$query)) {
        die(mysqli_error($conn));
       }else {
           $query="SELECT * FROM players";
           $result=mysqli_query($conn,$query);
           if ($row=mysqli_fetch_assoc($result)) {
                $q=$row["question"];
                $_SESSION["q"]=$q;
                header('Location: ../index.php');
           }
       }
    }
?>
<?php
if (isset($_POST["sub-a"])) {
    require 'db.inc.php';
    $query = "SELECT * FROM players";
    $result = mysqli_query($conn, $query);
    if ($row = mysqli_fetch_assoc($result)) {
        $q = $row["question"];
        $_SESSION["q"] = $q;
        header('Location: ../index.php');
    }
    $counter = $_POST["hiddin"];
    $answer = $_POST["ans"];
    $counter=$_POST['hidden'];
    if ($answer == $q) {
        session_unset();
        session_destroy();
        $query = "DELETE  FROM players WHERE question='$q'";
        $result = mysqli_query($conn, $query);
        header('Location: ../index.php?success=you%20win');
    } else {
        $counter++;
        header("Location: ../p2.php?error=wrong%20answer&counter=" . $counter);
    }
}


?>