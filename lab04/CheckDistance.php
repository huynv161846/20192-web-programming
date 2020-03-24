<html>
    <head><title> Distance and Time Calculations </title></head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
    <body>
        <?php
        $destination = $_POST['destination'];
        $cities = array('Dallas' => 803, 'Toronto' => 435, 'Boston' => 848, 'Nashville' =>
            406, 'Las Vegas' => 1526, 'San Francisco' => 1835, 'Washington, DC' => 595, 'Miami'
            => 1189, 'Pittsburgh' => 409);
        print "From Chicago to:<br>";
        print "<table><tr><th>No.</th><th>Destination</th><th>Distance</th><th>Driving time</th><th>Wlaking time</th></tr>";
        for ($i = 0; $i < count($destination); $i++) {
            $distance = $cities[$destination[$i]];
            $time = round(($distance / 60), 2);
            $walktime = round(($distance / 5), 2);
            $count = $i + 1;
            print "<tr><th>$count</th><th>$destination[$i]</th><th>$distance</th><th>$time</th><th>$walktime</th></tr>";
        }
        print "</table>"
        ?>
    </body>
</html>