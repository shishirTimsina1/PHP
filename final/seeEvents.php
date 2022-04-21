<html>
<head>
<Title>List of Events</Title>

</head>
<body>

<div style="text-align: center;">
<?php
     include 'menu.html';// display menu

     require_once 'login.php';
     
     $query = "SELECT * from hotel";
     $result = $conn->query($query);
     if(!$result) die ("Database Access Failed!");

     $sql = "SELECT * FROM hotel";
        if ($result = $conn -> query("SELECT * FROM events")) {
            echo "<h1>Events</h1><br>";
            // Free result set

            while ($row = mysqli_fetch_array($result)){
                echo "<h2>{$row[1]}, in {$row[2]} at €{$row[3]}</h2>";
                echo "<img id = 'object' src = 'images/{$row[4]}' width='500' height='500'><br><br><br>";
            }
            $result -> free_result();
          }

?>
</div>



</body>
</html>