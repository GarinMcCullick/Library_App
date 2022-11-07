<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Document</title>
</head>

<body>
    <div class="adminBody">
        <div class="checkoutBookContainer">
            <a class="indexLink" href="../index.php">
                <form method="post" action="../index.php">
                    <input type="hidden" name="password" value="password">
                    <!--right now password is not dynamic as there is only 1 admin privilige that is set if more are added this needs to be made dynamic-->
                    <input type="submit" id="button" name="back" value="back">
                </form>
            </a>
            <?php
            include "../model/database.php";
            require_once "../controllers/addFunctions.php";
            //addProduct() is a call back function to check if new values have been submitted from added page and if so adds to db.
            addBook();
            if (isset($_POST['bookName'])) {
                $book = $_POST['bookName'];
            }
            ?>
            <h1>Add a Book</h1>
            <?php if (!isset($_POST['addForm'])) {
                echo '<form action="" method="post">
                <input type="text" name="bookName">

                <input type="submit" name="addForm" value="Add">

            </form>';
            } else {
                echo $book . " has been added!";
            }
            ?>

        </div>
    </div>
</body>

</html>