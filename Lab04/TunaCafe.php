<html>
    <head><title>Tuna Cafe</title></head>
    <body>
        <font size="4" color="blue">Welcome to the Tune Cafe Survey !</font>
        <form action="TunaResults.php" method="GET">
            <?php
            $menu = array('Tuna Casserole', 'Tuna Sandwich', 'Tuna Pie', 'Grilled Tuna', 'Tuna Surprised');
            $best_seller = 2;
            print 'Please indicate all your favorite dishes.<br>';
            for($i=0; $i<count($menu); $i++){
                print "<input type=\"checkbox\" name=\"prefer[]\" value=$i> $menu[$i]";
                if($i == $best_seller){
                    print '<font color=red> Our best seller !!! </font>';
                }
                print '<br>';
            }
            ?>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </body>
</html>