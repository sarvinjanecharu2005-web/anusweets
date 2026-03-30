<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $item = $_POST['item'];

    // Save to file (simple database)
    $file = fopen("orders.txt", "a");

    $data = "Name: $name | Phone: $phone | Item: $item\n";
    fwrite($file, $data);
    fclose($file);

    echo "<h2>Order Placed Successfully! 🎉</h2>";
    echo "<p>Thank you, $name. We will contact you soon.</p>";
}
?>