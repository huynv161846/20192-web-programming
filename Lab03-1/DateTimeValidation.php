<html>
    <head><title>Date Time Validation</title></head>
    <body>
        <?php
            $username = filter_input(0, 'name');
            $date = date('d-m-Y', strtotime(filter_input(0, 'date')));
            $month = date("m", strtotime($date));
            $year = date("y", strtotime($date));
            $time = filter_input(0, 'time');
            $time_format = date('h:i:s a m/d/Y', strtotime($time));
            $day_of_month = cal_days_in_month(CAL_GREGORIAN,$month,$year);
            
            print("Hi $username !");
            print("<br>You have choose an appointment on $time, $date");
            print("<br>More information<br>");
            print("In 12 hours, the time and the date is $time_format");
            
            print("<br>This month has $day_of_month days")
            
        ?>
    </body>
</html>
