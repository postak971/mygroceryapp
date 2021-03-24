<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <title>My Grocery App</title>

</head>

<body>
    <div class="container">
        <h1 class=page-heading>My Grocery App</h1>
        <img class="homepage-img" src="images/groceries.png" alt="groceries">

        
        <div class="dots-above-menu">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <div class = "menu">
            <a href="create_form.php">Create Grocery List</a>
            <a href="read.php">View Grocery List</a>
        </div>
        
    </div>
    <footer>&copy; Postak Shrestha <?php echo date('Y'); ?></footer>
</body>

</html>