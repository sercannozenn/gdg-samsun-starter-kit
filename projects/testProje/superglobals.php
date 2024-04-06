<?php
declare(strict_types =1);
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h4>Kayıt Formu</h4>
<hr>
<form action="verigonder.php" method="POST" id="registerForm">
    <input type="text" name="firstname" placeholder="First Name">
    <input type="text" name="lastname" placeholder="Last Name">
    <hr>
    <button type="submit">KAYDET</button>
    <hr>
    <hr>
    <?php

//    print_r($_GET['firstname']);
//    print_r($_POST['firstname']);
//    print_r($_REQUEST['firstname']);
    ?>
</form>

<input type="text" name="age" form="registerForm">
<button type="submit" formaction="kaydet.php" form="registerForm">Kaydet PHPYe Gönder</button>
</body>
</html>
