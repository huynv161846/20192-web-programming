<html>
    <head><title>Date Time Function</title></head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            First Name: <input type="text" name="name1" required>
            <br><br>Second Name: <input type="text" name="name2" required>
            <br><br>First Birth of Date: <input type="date" name="date1" required>
            <br><br>Second Birth of Date: <input type="date" name="date2" required>
            <br><br><input type="submit" value="submit">
            <input type="reset" value="reset">
        </form>
        <?php
        if (array_key_exists('name1', filter_input_array(0))) {
            $first_name = filter_input(0, 'name1');
            $second_name = filter_input(0, 'name2');
            $first_date = filter_input(0, 'date1');
            $second_date = filter_input(0, 'date2');
            $date_diff = round((strtotime($first_date) - strtotime($second_date)) / (60 * 60 * 24));
            $today = date('Y-m-d H:i:s');
            echo "$first_name was born in". date('1, F d, Y', strtotime($first_date))."<br>";
            echo "$second_name was born in". date('1, F d, Y', strtotime($second_date))."<br>";
            echo "Two dates are $date_diff days away, which mean ". round($date_diff/365). " year(s)";
            
            echo "<br>$first_name is ".round((strtotime($today) - strtotime($first_date)) / (60 * 60 * 24*365))." years old";
            echo "<br>$second_name is ".round((strtotime($today) - strtotime($second_date)) / (60 * 60 * 24*365))." years old";
        }
        ?>
    </body>
</html>