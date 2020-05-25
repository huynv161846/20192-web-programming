<?php
$bg = $_COOKIE['bg'];
$fg = $_COOKIE['fg'];
?>
<html>
    <head><title>Front door</title></head>
    <body bgcolor="<?= $bg ?>" text="<? $fg ?>">
        <h1>Welcome to the store</h1>
        <p>We have many fine products for you to view. Please feel free to browse the aisles and stop an assistant at any time.
        But remeber, you break it you bought it!</p>
        
        Would you like to <a href="PrefSelection.html">change your preferences ?</a>
    </body>
</html>
