<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Grocery Delete Response</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>

<body>
    <div class="container">
        <?php
        require_once("./vendor/autoload.php");

        use App\Helpers\SQLiteDatabaseConnection;

        $pdo = SQLiteDatabaseConnection::connect();
        //var_dump($_GET);

        if (!empty($_GET["id"]) && !empty($_GET["name"])) {
            $id = $_GET["id"];
            $name = $_GET["name"];
            $statement = $pdo->prepare("DELETE FROM grocery WHERE id = ?");
            $statement->execute([$id]);
            $deleteCount = $statement->rowCount();
            //echo "Deleted " . $deleteCount . " records.";
        ?>
            <h2><?php echo $name . " successfully deleted &#128077;"; ?></h2>

        <?php
        }
        ?>
        <br>
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