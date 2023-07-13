<html>
    <head>
        <title>Book flight</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
    <div class="container">
        <h2>Flight Book</h2>
        <hr/>
        <form action="process/bookprocess.php" method="post">
            <label for="">Fullname</label>
            <input type="text" name="fullname">


            <label for="">Address</label>
            <input type="text" name="address">


            <label for="">Gender</label>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other

            <label for="">From</label>
            <input type="text" name="from">
            
            <label for="">To</label>
            <input type="text" name="to">

            <label for="">Date</label>
            <input type="date" name="date">

            <label for="">Contact</label>
            <input type="text" name="contact">

            <label for="">Class</label>
            <select name="class">
                <option value="economics">Economics</option>

                <option value="business">Business</option>
            </select>


            <label for="">Nationality</label>
            <select name="nationality">
                <option value="Nepal">Nepal</option>
                <option value="india">India</option>
                <option value="china">China</option>
                <option value="USA">USA</option>
            </select>

            <br/>
            <button type="submit">Book Now</button>

        </form>

    </div>

    </body>
</html>