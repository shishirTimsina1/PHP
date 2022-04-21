<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php //usedata.php

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    include 'menu.html';
        require_once 'login.php';

    //mysqli connection code - might or might not need this
    //$link = new mysqli($db_hostname, $db_username, $db_password, $db_database);
    //Get values from form
    
    $Fname = $_POST['firstName'];
    $Fname = test_input($Fname);
    //insert data into mysql
    $query = "SELECT * FROM customer as x
    WHERE x.firstName = '$Fname'";
    // replace $link with $conn
    $result=mysqli_query($conn, $query);

    if ($result) {
        echo "Returned rows are: " . mysqli_num_rows($result);
        // Free result set
        echo "<br><br>";
        echo "<table class=table-bordered>";
            //header
            echo "<tr><td>Customer ID</td>";
            echo "<td>First Name</td>";
            echo "<td>Last Name</td>";
            echo "<td>Email</td>";
            echo "<td>City</td>";
            echo "<td>Phone</td>";
            echo "<td>Address</td></tr>";
                //data  
                 while ($row = mysqli_fetch_array($result))  {
                  echo "<tr><td>{$row[0]}</td>";
                  echo "<td>{$row[2]}</td>";
                  echo "<td>{$row[1]}</td>";
                  echo "<td>{$row[9]}</td>";
                  echo "<td>{$row[5]}</td>";
                  echo "<td>{$row[10]}</td>";
                  echo "<td>{$row[3]}</td></tr>";
                } 

                echo "</table>";
        $result -> free_result();
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    //close mysql - replaced $link with $conn
    mysqli_close($conn);
?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>