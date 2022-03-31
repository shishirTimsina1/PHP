<html>
<head>
<Title>List of Customers</Title>

</head>
<body>


<?php
     include 'menu.html';// display menu

     require_once 'login.php';
     
     $query = "SELECT * from customer";
     $result = $conn->query($query);
     if(!$result) die ("Database Access Failed!");

     $sql = "SELECT * FROM customer";
        if ($result = $conn -> query("SELECT * FROM customer")) {
            echo "Returned rows are: " . mysqli_num_rows($result);
            // Free result set
            echo "<br><br>";
            echo "<table class = table-bordered>";
                //header
                echo "<tr><td>Customer ID</td>";
                echo "<td>First Name</td>";
                echo "<td>Last Name</td>";
                echo "<td>Email</td>";
                echo "<td>City</td>";
                echo "<td>Phone</td>";
                echo "<td>Address</td>";
                echo "<td>Sales Person ID</td></tr>";
                    //data  
                     while ($row = mysqli_fetch_array($result))  {
                      echo "<tr><td>{$row[0]}</td>";
                      echo "<td>{$row[2]}</td>";
                      echo "<td>{$row[1]}</td>";
                      echo "<td>{$row[9]}</td>";
                      echo "<td>{$row[5]}</td>";
                      echo "<td>{$row[10]}</td>";
                      echo "<td>{$row[3]}</td>";
                      echo "<td>{$row[15]}</td></tr>";
                    } 

                    echo "</table>";
            $result -> free_result();
          }

?>

</body>
</html>