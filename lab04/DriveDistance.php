<html>
    <head>
        <title>Distance from Chicago !</title>
    </head>
    <body>
        <font size="4" color="blue">Welcome to the Distance Chicago</font>
        <br>The page that calculates the distance from Chicago's
        <br>Select a destination:
        <form action="CheckDistance.php" method="POST">
            <select name="destination[]" size="5" multiple="multiple" required="">
                <option> Boston </option>
                <option> Dallas </option>
                <option> Las Vegas </option>
                <option> Miami </option>
                <option> Nashville </option>
                <option> Pittsburgh </option>
                <option> San Francisco </option>
                <option> Toronto </option>
                <option> Washington, DC </option>
            </select>
            <br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </body>
</html>