<?php
    define("PAGE_TITLE", "Britas webshop");
    include "header.php"; 
    
    echo '<h3>Din beställning</h3>';

    // Print the POST info, (only for troubleshooting)
    // print_r($_POST);
    
    // Save ordered product info in variables
    $itemName = $_POST['item'];
    $itemPrice = $_POST['price'];

    // Save all info from form into variables
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $postaddress = $_POST['postaddress'];
    $customerMessage = $_POST['message'];
    
    // The info needed to send a mail saved in variables
    $to = "britajonsson@gmail.com";
    $subject = "Order från $fname $lname";
    // Mail content in HTML
    $mailcontent = "
        <html>
            <head>
                <h2>Order från $fname $lname</h2>
            </head>
            <body>
                <p>$fname $lname har beställt en $itemName för $itemPrice.</p>
                <p>Kundens e-post:<br>$mail</p>
                <p>Kundens adress:<br>$address<br>$postaddress</p>
                <p>Kundens meddelande:<br>$customerMessage</p>
            </body>
        </html>
        ";

    // Content-type header must be "text/html" to send the mail in HTML
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

    // headers is saved as an array in order to use them all in the mail-function
    $headers[] = "From: $mail";
    $headers[] = "Cc: $mail";

    // Send the order.
    // implode() sends all data in headers-array and separates it with line breaks
    mail($to, $subject, $mailcontent, implode("\r\n", $headers));


    // Print out the mail information (for troubleshooting)
    /*  
    echo $to . "<br>";
    echo $subject . "<br>";
    echo $mailcontent . "<br>";
    print_r($headers) . "<br>";
    */

    echo '<hr>';
    echo '<h3>Beställning skickad!</h3>';
    echo '<p>Du har beställt en ' . $itemName . ' för ' . $itemPrice . ' kr</p>';
    
    echo "<p>Din e-post:<br>$mail</p>";
    echo "<p>Din adress:<br>$address<br>$postaddress</p>";
    echo "<p>Ditt meddelande:<br>$customerMessage</p>";

    include "footer.php";
?>