<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guess Game | PLAYER 1</title>
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <h1 class="text-center text-success">player 1</h1>
    <div class="container">
        <div class="well">
            <form class="form-group" action="includes/compare.inc.php" method="POST">
                <input type="text" class="form-control" name="ask" placeholder="ASK THE QUESTION AND WAIT">
                <button type="submit" name="sub-q" class="btn btn-primary sub-q">Submit YOUR question</button>
            </form>
        </div>
    </div>
</body>

</html>