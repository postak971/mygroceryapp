<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="css/style.css">

    </style>
</head>

<body>
    <div class="container">

        <?php
        require_once("./vendor/autoload.php");

        use App\Helpers\SQLiteDatabaseConnection;

        $pdo = SQLiteDatabaseConnection::connect();

        $statement = $pdo->query('SELECT * FROM grocery');
        $groceries = $statement->fetchAll();
        ?>

        <h1 class="center">My Grocery List</h1>
        <ol>
            <?php foreach ($groceries as $grocery) : ?>

                <li> <?php echo $grocery['name'] . " - " . $grocery['quantity'] . " " . $grocery['unit']; ?>

                    <a href="update_form.php?name=<?php echo $grocery['name']; ?>"> Update</a>

                    <a href="delete.php?id=<?php echo $grocery['id']; ?>&name= <?php echo $grocery['name'];?>"> Delete</a>
                </li>


            <?php
            endforeach;
            ?>
        </ol>
        <div class="dots-above-menu">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div> 
        <div class = "menu">
        <a href="index.php">Home</a>
        <a href="create_form.php">Add More Grocery</a>
        </div>          
    </div>
    <footer>&copy; Postak Shrestha <?php echo date('Y'); ?></footer>
</body>

</html>