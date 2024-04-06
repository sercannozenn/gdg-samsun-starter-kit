<?php
require_once "./layouts/header.php";
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
<form action="about.php" method="POST" id="registerForm">
    <input type="text" name="firstname" placeholder="First Name">
    <input type="text" name="lastname" placeholder="Last Name">
    <hr>
    <button type="submit">Kaydet</button>
</form>

</body>
</html>


<?php
include_once "./layouts/footer.php";
