<html>
<head>
<Title>List of Hotels</Title>

</head>
<body>

<?php
    include 'menu.html';// display menu
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $sql = "SELECT * FROM hotel ";
    } else {
       $sql = "SELECT * FROM hotel ORDER BY hotel.hotelPrice DESC";
    }
?>
<div style="text-align: center;">
    <h1>Hotels</h1> <a href="sortedHotels.php">Sort by Price (Ascending)</a>

    <?php
        require_once 'login.php';
        $query = "SELECT * from hotel";
        $result = $conn->query($query);
        if(!$result) die ("Database Access Failed!");
            if ($result = $conn -> query($sql)) {
                
                // Free result set

                while ($row = mysqli_fetch_array($result)){
                    echo "<br><h2>{$row[1]}, in {$row[2]} at €{$row[3]}</h2>";
                    echo "<img id = 'object' src = 'images/{$row[4]}' width='500' height='500'><br><br><br>";
                }
                $result -> free_result();
            }

    ?>
</div>


</body>
</html>