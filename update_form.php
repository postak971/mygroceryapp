<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <title>Update Grocery</title>

</head>

<body>
    <div class="container">

        <?php
        require_once("./vendor/autoload.php");

        use App\Helpers\SQLiteDatabaseConnection;

        $pdo = SQLiteDatabaseConnection::connect();

        //var_dump($_GET);

        ?>
        <h1>Update Details For "<?php echo $_GET["name"]; ?>"</h1>
        <form action="update.php" method="POST">
            <label>Grocery
                <input type="text" name="name" value="<?php echo $_GET['name']; ?>" />
            </label><br>
            <label for="">Quantity
                <input type="number" name="quantity" />
            </label><br>
            <label for="unit">Unit</label>

            <select name="unit" id="unit">
                <option value="pound">pound</option>
                <option value="gallon">gallon</option>
                <option value="dozen">dozen</option>
                <option value="bunch">bunch</option>
                <option value="count">count</option>
            </select><br>

            <button class="myButton">Update</button>

        </form>

        <div class="dots-above-menu">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <div class="menu">
            <a href="index.php">Home</a>
            <a href="read.php">View Grocery List</a>
        </div>      

    </div>
    <footer>&copy; Postak Shrestha <?php echo date('Y'); ?></footer>
</body>

</html>