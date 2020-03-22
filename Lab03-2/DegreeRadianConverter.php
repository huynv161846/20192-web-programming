<html>
    <head><title>Degree and Radian Converter</title></head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            Choose one :<br>
            <select name="converter" require>
                <option value="radian">Radian</option>
                <option value="degree">Degree</option>
            </select>
            Value: <input type="text" name="value" require>
            <input type="submit">
        </form>
        
        <?php
            define('pi', 3.14);
            if(key_exists('value', $_POST)){
                $option = filter_input(0, 'converter');
                $value = filter_input(0, 'value');
                if(strcmp($option, "radian")==0){
                    $degree = 180 * $value /pi  ;
                    printf("%.2f", $degree);
                }else{
                    $radian = $value * pi /180  ;
                    printf("%.2f", $radian);
                }
            }else{
                
            }
        ?>
    </body>
</html>

