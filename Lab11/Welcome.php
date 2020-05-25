<?php
    include './CheckLogin.php';
    $username = $_SESSION["username"];
?>
<html>
    <body>
        Welcome <?= $username ?>
    </body>
</html>