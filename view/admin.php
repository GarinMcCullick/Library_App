<div class="adminBody">
    <h1>ADMIN PANEL</h1>

    <div class="admin-inner-containers">

        <h2>Library Inventory</h2>
        <?php
        include "./controllers/libraryFunctions.php";
        include "./controllers/bookRequestFunctions.php";
        $books = getBooks(); //getting books
        //loop through the products array and display the name of the product  
        $requests = getRequests(); //getting requests
        foreach ($books as $book) {
            $bookID = $book['book_id'];
            echo "<div class='item-container'>";
            echo ("<a href='./view/delete.php?id=$bookID'>delete</a> &nbsp | &nbsp <a href='./view/edit.php?id=$bookID'>edit</a> &nbsp $book[book_name]");
            echo "</div>";
        }
        echo "<a href='./view/add.php'>Add a Book</a>";
        ?>
    </div>
    <div class="admin-inner-containers">
        <h2>Requested Checkout Books</h2>
        <?php foreach ($requests as $request) {
            echo "<div class='item-container'>";
            echo '<div class="div1">';
            echo "&#x2022; $request[user_name]";
            echo "</div>";
            echo '<div class="div2">';
            echo "$request[book_name]";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
</div>