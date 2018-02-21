<?php
    define("PAGE_TITLE", "Britas webshop");
    include "header.php";
    
    // Save the data from the URL into variables
    $itemName = $_GET['name'];
    $itemPrice = $_GET['price'];

    echo '<h3>Din beställning</h3>';
    echo '<hr>';
    echo '<h3>Verifiera</h3>';
    echo '<p>Du har valt en ' . $itemName . ' för ' . $itemPrice . ' kr</p>';
    echo '<hr>';
?>

<form action="ordermail.php" method="post">
    <div class="row">
        <div class="col-2">
            Förnamn: <br>
            Efternamn: <br>
            E-post: <br>
        </div>
        <div class="col-2">
            <input type="text" name="fname">
            <input type="text" name="lname">
            <input type="email" name="mail">
        </div>
    </div>

<div class="row">
    <div class="col-4">
        <h4>Leveransadress:</h4>
    </div>
</div>
    <div class="row">
        <div class="col-2">
        Adress: <br>
        Postadress: <br>
        </div>
        <div class="col-2">
            <input type="text" name="address">   
            <input type="text" name="postaddress">
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            Meddelande: <br>
            <textarea name="message" cols="43" rows="10"></textarea>
            <?php
                // These hidden fields let me post the chosen product info into the order
                echo '<input type="hidden" name="item" value="' . $itemName . '">';
                echo '<input type="hidden" name="price" value="' . $itemPrice . '">';
            ?>
            <br> <br>
            <input type="submit" value="Beställ">
        </div>
    </div>
</form>

<?php include "footer.php"; ?>