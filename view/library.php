<div class="checkoutBody">
    <div class="checkoutBookContainer">
        <?php
        include "./controllers/libraryFunctions.php";
        $books = getBooks();
        //loop through the products array and display the name of the product  

        foreach ($books as $book) {
            $bookID = $book['book_id'];
            echo "<div class='item-container-index'>";
            echo ("<a href='view/checkout.php?id=$bookID'>Checkout</a> $book[book_name]");
            echo "</div>";
        }
        ?>
    </div>
</div>