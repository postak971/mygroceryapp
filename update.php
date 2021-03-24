<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <title>Grocery Update Response</title>
</head>

<body>
    <div class="container">
        <?php
        require_once("./vendor/autoload.php");

        use App\Helpers\SQLiteDatabaseConnection;

        $pdo = SQLiteDatabaseConnection::connect();

        //var_dump($_POST);

        if (!empty($_POST["name"]) && !empty($_POST["quantity"]) && !empty($_POST["unit"])) {
            $qty = $_POST["quantity"];
            $unit = $_POST["unit"];
            $name = $_POST["name"];

            //echo $name . " " . $qty . " " . $unit;

            $statement = $pdo->prepare("UPDATE grocery SET quantity = ?,unit = ? WHERE name = ? ");
            $statement->execute([$qty, $unit, $name]);
            $updateCount = $statement->rowCount();
        ?>
            <h2><?php echo $name . " " . $qty . " - " . $unit . " successfully updated &#128077;"; ?></h2>

        <?php

        } else {
            echo "<h3> There was a problem.:-(</h3>";
        }
        ?>
        <div class="dots-above-menu">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>  

        <div class="menu">
            <a href="index.php">Home</a>
            <a href="read.php">View Grocery List</a>
            <a href="create_form.php">Add More Grocery</a>
        </div>

              
    </div>
    <footer>&copy; Postak Shrestha <?php echo date('Y'); ?></footer>
</body>

</html>