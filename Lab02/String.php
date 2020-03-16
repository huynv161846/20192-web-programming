<html>
    <head>
        <title>String Examples</title>
    </head>
    <body>
        <?php        
        $x = "banana";
        $sum = 1 + $x;
        print ("y=$sum<br>");

        $firstname = "John";
        $lastname = "Smith";
        $fullname = $firstname . $lastname;
        print ("Fullname=$fullname<br>");

        $fullname2 = "$firstname $lastname";
        print ("Fullname=$fullname2<br>");

        $comments = "Good Job";
        $len = strlen($comments);
        print ("Length=$len<br>");

        $in_name = " Joe Jackson ";
        $name = trim($in_name);
        print ("name=$name$name<br>");

        $inquote = "Now Is The Time";
        $lower = strtolower($inquote);
        $upper = strtoupper($inquote);
        print ("upper=$upper lower=$lower<br>");

        $date = "01/01/2020";
        $month = substr($date, 0, 2);
        $day = substr($date, 3, 2);
        print ("Month=$month Day=$day<br>");

        $date = "12/25/2002";
        $year = substr($date, 6);
        print ("Year=$year<br>");
        ?>
    </body>
</html>