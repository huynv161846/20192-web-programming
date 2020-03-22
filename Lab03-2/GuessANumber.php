<html>
    <head><title>Guess a number </title></head>
    <body>
        <form method="POST" action="GuessANumber.php">
            <input type="text" name="number">
            <input type="submit" value="submit">
        </form>
        <?php
        srand((double) microtime() * 10000000);
        $random = rand(0, 100);
        $number = filter_input(0, 'number');
        $guess_time = 1;
        if($number > $random)
                print("Wrong! Please try a lower number. You have guess $guess_time times")
        ?>
    </body>
</html>

