<html><head>
        <title>Update Result</title>
    </head>
    <body>
        <?php
        $host = 'localhost';
        $user = 'root';
        $passwd = '1111';
        $database = 'lab06-wp';
        $connect = mysqli_connect($host, $user, $passwd, $database);
        $table_name = 'Products';
        $Product = $_POST["Product"];
        $query = "UPDATE $table_name SET Numb = Numb-1 WHERE (Product_desc = '$Product')";
        print "The Query is <i>$query</i><br>";
        print '<br><font size="4" color="blue">';
        if (mysqli_query($connect, $query)) {
            print '<table border=1>';
            print '<th>Num<th>Product<th>Cost<th>Weight<th>Count';
            while ($row = mysqli_fetch_row($results_id)) {
                print '<tr>';
                foreach ($row as $field) {
                    print "<td>$field</td> ";
                }
                print '</tr>';
            }
        } else {
            print "Update $database failed!</font>";
        } mysqli_close($connect);
        ?>
    </body>
</html>