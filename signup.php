<html>
    <head>
        <title>Signup</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
    <div class="container">
        <h2>Login</h2>
        <hr/>
        <form action="process/signupprocess.php" method="post">
            <label for="">Email</label>
            <input type="email" name="email">

            <label for="">Password</label>
            <input type="password" name="pass1">

            <label for="">Password Confirmation</label>
            <input type="password" name="pass2">

            <br/>
            <button type="submit">Signup</button>

        </form>

    </div>

    </body>
</html>