<!--Exam Library by Garin McCullick-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles.css" <?php echo date('l jS \of F Y h:i:s A'); ?>>
    <title>Library</title>
</head>

<body>
    <?php
    include "./controllers/loginFunctions.php";
    //make a public side and an authenticated side.
    //-public side only take a username no password need only a request.
    //--show all available books.
    //-authenticated side take a username and password and show requested books by whom. also delete/view/add all books.

    $return = Auth();
    ?>
    <?php
    if ($return === 'admin') { //to view admin view the password in top right is password
        echo '<div class="admin-login-container">
        <form id="form" action="./index.php" method="POST">
            <input type="submit" id="btn" value="Customer View / Logout">
        </form>
    </div>';
        include "./view/admin.php";
    } else {
        echo '<div class="admin-login-container">
        <form id="form" action="" method="POST">
            <label for="password">Admin Password:</label>
            <input name="password" id="password">
            <input type="submit" id="btn" value="Submit">
        </form>
    </div>';
        include "./view/library.php";
    }
    ?>


</body>

</html>