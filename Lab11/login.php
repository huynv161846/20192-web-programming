<html>
    <head><title>Login Page</title></head>
    <body>
        <form action="CheckAccount.php" method="post">
            <div class="container">
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit" name="login">Login</button>
            </div>
        </form>
    </body>
</html>