<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Document</title>
</head>

<body class="checkoutBody">
    <?php
    require_once "../controllers/checkoutBookFunctions.php";
    require_once "../controllers/libraryBookIdFunctions.php";
    require_once "../model/database.php";
    $id = $_GET['id']; //getting book id to run in callback function
    $book = getBook($id); //call back function
    checkoutBook(); //add product call back function

    if (isset($_POST['checkoutForm'])) { //if form is submitted go back to index page
        header('Location: ../index.php');
    }

    ?>
    <div class="checkoutBookContainer">
        <a class="indexLink" href="../index.php">
            <button>
                Back
            </button>
        </a>

        <h3 class="checkoutH3">Check Out</h3>
        <h2>
            <?php echo "-" . $book['book_name'] ?>
        </h2>
        <form class="requsestForm" method="POST" action="" <?php  ?>>
            <label>Name:</label>
            <input type="text" name="custName">
            <input type="hidden" name="checkoutBookID" value="<?php echo $book['book_id'] ?>">
            <input type="hidden" name="checkoutBookName" value="<?php echo $book['book_name'] ?>">
            <input type="submit" id="checkoutBtn" name="checkoutForm" value="Checkout">
        </form>
    </div>
</body>

</html>