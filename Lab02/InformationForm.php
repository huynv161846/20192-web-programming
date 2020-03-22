<html>
    <head><title>Information Result</title></head>
    <body>
        <?php
        $username = filter_input(INPUT_POST, 'username');
        $university = filter_input(INPUT_POST, 'university');
        $class = filter_input(INPUT_POST, 'class');
        $gender = filter_input(INPUT_POST, 'gender');
        $address = filter_input(INPUT_POST, 'address');
        print("Hello, $username !<br>");
        print("Your gender is $gender <br>");
        print("You live in $address<br>");
        print("You are studying at $class, $university <br>");
        print("Your hobby is: ");
        $count = 1;
        foreach($_POST['hobbies'] as $hobby){
            print("$count.$hobby");
            $count++;
        }
        ?>
    </body>
</html>

