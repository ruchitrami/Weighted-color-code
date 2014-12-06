<?php
require_once 'function-color-code.php';
$min = 0;
$avg = 50;
$max = 100;
$val = 33;
if (isset($_GET['inputVal'])) {
    $min = $_GET['inputMin'];
    $avg = $_GET['inputAvg'];
    $max = $_GET['inputMax'];
    $val = $_GET['inputVal'];
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=9">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <!-- Custom styles for this template -->
        <link href="example.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <form class="form-signin" role="form">
                <h2 class="form-signin-heading">Pick values</h2>
                <label for="inputMin" >Minimum value</label>
                <input type="number" id="inputMin" name="inputMin" class="form-control" min="0" step="0" value="<?php echo $min; ?>" required autofocus>
                <label for="inputAvg" >Average value</label>
                <input type="number" id="inputAvg" name="inputAvg" class="form-control" min="0" step="0" value="<?php echo $avg; ?>" required autofocus>
                <label for="inputMax" >Maximum value</label>
                <input type="number" id="inputMax" name="inputMax" class="form-control" min="0" step="0" value="<?php echo $max; ?>" required autofocus>
                <label for="inputVal" >Colorcode value</label>
                <input type="number" id="inputVal" name="inputVal" class="form-control" min="0" step="0" value="<?php echo $val; ?>" required autofocus>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="getVal" value="Get">Get weighted color</button>
                <br/>
                <div style="background-color: <?php echo getColorCode($min, $avg, $max, $val); ?>; height:50px; border-radius:5px;text-align:center;">
                    Background color: <?php echo getColorCode($min, $avg, $max, $val); ?>
                </div>
            </form>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        </div>
    </body>
</html>
