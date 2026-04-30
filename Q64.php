<!DOCTYPE html>
<html>
<body>

<form method="get" action="">
Name: <input type="text" name="name"><br>
<input type="submit">
</form>

<?php
if($_GET) {
    echo "Name: " . $_GET['name'];
}
?>

</body>
</html>