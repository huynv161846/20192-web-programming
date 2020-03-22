<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <form action="" method="POST">
            
            <input type="text" size="15" maxlength="20" name="name"> <br>
            <input type="password" size="15" maxlength="20" name="pass"><br>
            
            <textarea rows="4" cols="50" name="Comments">
                Your comments here
            </textarea>
            
            <br>May we contact you ?
            <input type="radio" name="contact" value="Yes">
            <input type="radio" name="contact" value="No">
            
            <br>Remember me ?
            <input type="checkbox" name="remember">
            
            <br>Choose user plan: 
            <select name="UserPlan">
                <option>Premium</option>
                <option>Free</option>
            </select>
            
            <br>
            <input type="submit" value="Click to submit">
            <input type="reset" value="Erase and Restart">
        </form>
    </body>
</html>

