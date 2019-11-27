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
    <style>
        label {
            margin-left: 15px;
        }

        input[type="radio"] {
            width: 25px;
            height: 25px;
            margin-left: 50px;
        }

        #first {
            margin-left: 10px;
        }
    </style>

</head>

<body>
    <h1 class="text-center text-success">player 1</h1>
    <div class="container">
        <div class="well" style="height:80%;">
            <form class="form-group text-center text-uppercase" action=" includes/compare.inc.php" method="POST">
                <h4>Select a type</h4>
                <label>Animal</label> <label>plant</label><label>rock</label><br>
                <input id="first" type="radio" name="type" value="animal">
                <input type="radio" name="type" value="plant">
                <input type="radio" name="type" value="rock">
                <br>
                <input type="text" class="form-control text-center" name="ask" placeholder="ASK THE QUESTION AND WAIT">
                <button type="submit" name="sub-q" class="btn btn-primary sub-q">Submit YOUR question</button>
            </form>
        </div>
    </div>
</body>

</html>