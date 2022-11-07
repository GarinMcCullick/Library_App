<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Document</title>
</head>

<body class="adminBody">
    <?php
    require_once "../controllers/checkoutBookFunctions.php";
    require_once "../controllers/editFunctions.php";
    require_once "../controllers/libraryBookIdFunctions.php";
    require_once "../model/database.php";
    $id = $_GET['id'];
    $book = getBook($id);
    editBook(); //edit book call back function

    if (isset($_POST['editForm'])) { //if form is submitted go back to index page
        header('Location: ../index.php');
    }

    ?>
    <div class="checkoutBookContainer">
        <a class="indexLink" href="../index.php">
            <form method="post" action="../index.php">
                <input type="hidden" name="password" value="password">
                <!--right now password is not dynamic as there is only 1 admin privilige that is set if more are added this needs to be made dynamic-->
                <input type="submit" id="button" name="back" value="back">
            </form>
        </a>
        <h1>Edit Book</h1>
        <h2>
            <?php echo "-" . $book['book_name'] ?>
        </h2>
        <form class="editForm" method="POST" action="" <?php  ?>>
            <label>Book Title:</label>
            <input type="text" name="editBookName" value="<?php echo $book['book_name'] ?>">
            <input type="hidden" name="editBookID" value="<?php echo $book['book_id'] ?>">
            <input type="submit" name="editForm" value="Change">
        </form>
    </div>
</body>

</html>