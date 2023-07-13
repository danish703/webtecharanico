<?php
 require_once('db/connection.php');
  $query = "SELECT * FROM flightbook";
  $result = mysqli_query($conn,$query);
 
  session_start();
  if(!isset($_SESSION["login"])){
    header("Location:login.php");
  }
  if($_SESSION["login"]!="1"){
    header("Location:login.php");
  }

?>


<html>
    <head>
        <title>Booked Flight</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <h2>Booked Flight</h2>
            <table border="1">
                <thead>
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>From</th>
                    <th>To</th>
                    <th>date</th>
                    <th>gender</th>
                    <th>class</th>
                    <th>Nationality</th>
                </thead>
             <?php while($row = mysqli_fetch_assoc($result)){ ?>   
                <tr>
                    <td><?php echo $row['fullname'];  ?></td>
                    <td><?php echo $row['address'];  ?></td>

                    <td><?php echo $row['contact'];  ?></td>

                    <td><?php echo $row['from'];  ?></td>

                    <td><?php echo $row['to'];  ?></td>

                    <td><?php echo $row['date'];  ?></td>

                    <td><?php echo $row['gender'];  ?></td>

                    <td><?php echo $row['class'];  ?></td>

                    <td><?php echo $row['nationality'];  ?></td>

                </tr>
                <?php } ?>
            </table>
            <a href="process/logout.php">Logout</a>
        </div>
    </body>
</html>