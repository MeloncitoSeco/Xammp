<?php

$fechahora=microtime();
echo ("$hora <br>");
$fecha= date("d-m-Y H:i:s:u", $fechahora);
echo ("$fecha");

?>

<!DOCTYPE html>
<html>
<body>

<h1>Show a Date Control</h1>

<form action="<?php $_PHP_SELF ?>" method="POST">
  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday">
  <input type="submit">
</form>

</body>
</html>