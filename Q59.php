<!DOCTYPE html>
<html>
<body>

<form method="post">
    Name: <input type="text" name="name"><br>
    Product: <input type="text" name="product"><br>
    Quantity: <input type="number" name="qty"><br>
    <input type="submit" value="Order">
</form>

<?php
if($_POST) {
    $name = $_POST['name'];
    $product = $_POST['product'];
    $qty = $_POST['qty'];

    echo "Order placed by $name for $qty $product(s)";
}
?>

</body>
</html>