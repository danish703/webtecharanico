<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
    <div class="container">
        <h2>Login</h2>
        <hr/>
        <?php
        if(isset($_GET['msg'])){ ?>

                <div class="msg msg-success"> <?php echo $_GET['msg']; ?> </div>
            <?php } ?>

        <form action="process/loginprocess.php" method="post">
            <label for="">Email</label>
            <input type="email" name="email">

            <label for="">Password</label>
            <input type="password" name="pass1">
            <br/>
            <button type="submit">Login</button>

        </form>

    </div>

    </body>
</html>