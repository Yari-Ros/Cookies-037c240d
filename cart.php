<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Balk Anker <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>
        <form action="cart.php" method="post" class= "">
          <input type="text" name="input" value="" required>
          <input type="submit" name="submit" value="Send it">
        </form>
<?php
session_start();
$notwhatyouthinkitis = "Balk Anker";
$baldisbasics = "Basketbal";
$goatmom = "Skeelers";
setcookie("#1", $notwhatyouthinkitis);
setcookie("#2", $baldisbasics);
setcookie("#3", $goatmom);
if (isset($_POST["submit"])) {
    $input = $_POST["input"];
      if ($_COOKIE[$input]) {
        echo "<h1>" . $_COOKIE[$input] . "</h1>";
      }
else
  echo "string";
}
?>
    </body>
</html>