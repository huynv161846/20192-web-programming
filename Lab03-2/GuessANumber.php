<html>
    <head><title>Guess a number </title></head>
    <body>
        <?php
        if (isset($POST['key'])) {
            $key = $POST['key'];
        } else {
            srand((double) microtime() * 10000000);
            $key = rand(0, 100);
        }

        if (isset($POST['guess'])) {
            $guess = $POST['guess'];
        } else {
            $guess = '';
        }

        if (isset($POST['count'])) {
            $count = $POST['count'] + 1;
        } else {
            $count = 0;
        }
        ?>
        <form method="POST" action="GuessANumber.php">
            Guess a number: <input type="text" name="guess" value="<?php echo $guess; ?>"> <br><br>

            <?php
            if (is_numeric($guess)) {
                if ($guess == $key) {
                    echo "Congratulations ! You are correct!";
                } elseif ($guess < $key) {
                    echo "Please enter a higher number !";
                } else {
                    echo "Please enter a lower number !";
                }
            } else {
                echo "Please enter a number !";
            }
            ?>
            <?php echo "<br><br>You have guessed: $count times<br>"; ?>

            <input type="submit" value="submit">
            <input type="reset" value="reset">

            <input type="text" name="key" value="<?php echo $key ?>" style="display: none;">
            <input type="text" name="count" value="<?php echo $count ?>" style="display: none;">
        </form>
    </body>
</html>

