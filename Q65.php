<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
Name: <input type="text" name="name"><br>
<input type="submit">
</form>

<?php
if($_POST) {
    echo "Name: " . $_POST['name'];
}
?>

</body>
</html>