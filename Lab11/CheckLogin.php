<?php
    session_start();
    // Overriding the error handler
    function errorHandlerCatchUndefinedIndex($errno, $errstr, $errfile, $errline ) {
        // We are only interested in one kind of error
        if ($errstr=='Undefined index: username') {
            //We throw an exception that will be catched in the test
            throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
        }
        return false;
    }
    set_error_handler("errorHandlerCatchUndefinedIndex");
    
    try{
        $username = $_SESSION["username"];
        echo $username;
    } catch (Exception $ex) {
        restore_error_handler();
        header("Location: http://localhost:8000/Lab11/login.php");
        exit();
    }
?>
