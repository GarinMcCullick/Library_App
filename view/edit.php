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
        <?php if (!isset($_POST['editForm'])) {
            echo  '<form class="editForm" method="POST" action="">';
            echo  '<label>Book Title:</label>';
            echo  '<input type="text" name="editBookName"';
            echo   'value="';
            echo   $book['book_name'] . '">';
            echo  '<input type="hidden" name="editBookID"';
            echo  "value=" . $book['book_id'] . ">";
            echo  '<input type="submit" name="editForm" value="Change">';
            echo  '</form>';
        } else {
            echo $book['book_name'] . ' has been updated!';
        }
        ?>
    </div>
</body>

</html>