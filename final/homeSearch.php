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
    
    $uInput = $_POST['userInput'];
    $uInput = test_input($uInput);
    $uChoice = $_POST['fav_language'];
    

    switch ($uChoice){
        case "location":
            $query = "SELECT * from hotel as x WHERE x.location = '$uInput'";
            $query2 = "SELECT * from events as x WHERE x.location = '$uInput'";
            break;
        case "hotels":
            $query = "SELECT * FROM hotel as x
            WHERE x.hotelName = '$uInput'";
            break;
        case "tours":
            $query = "SELECT * FROM tours as x
            WHERE x.tourName = '$uInput'";
            break;
        case "events":
            $query = "SELECT * FROM events as x
            WHERE x.eventName = '$uInput'";
            break;
        default:
            $query = "SELECT * FROM hotel as x
            WHERE x.hotelName = '$uInput'";
    }

    //insert data into mysql
    
    // replace $link with $conn
    $result=mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $query2);
    
    if ($result) {
        //echo "Returned rows are: " . mysqli_num_rows($result);
        // Free result set
        if(mysqli_num_rows($result) < 1 && mysqli_num_rows($result2) < 1){
            echo "<h1>No results found</h1>";
            echo "Make sure to have correct option selection and spelling";
        }
        switch($uChoice){
            case "hotels":
                while ($row = mysqli_fetch_array($result)){
                    echo "<br><h2>{$row[1]}, in {$row[2]} at €{$row[3]}</h2>";
                    echo "<img id = 'object' src = 'images/{$row[4]}' width='500' height='500'><br><br><br>";
                }
                break;
            case "tours":
                while ($row = mysqli_fetch_array($result)){
                    echo "<h2>{$row[1]}, at €{$row[2]}</h2>";
                    echo "<img id = 'object' src = 'images/{$row[3]}' width='500' height='500'><br><br><br>";
                }
                break;
            case "events":
                while ($row = mysqli_fetch_array($result)){
                    echo "<br><h2>{$row[1]}, in {$row[2]} at €{$row[3]}</h2>";
                    echo "<img id = 'object' src = 'images/{$row[4]}' width='500' height='500'><br><br><br>";
                }
                break;
            case "location":
                while ($row = mysqli_fetch_array($result)){
                    echo "<br><h2>{$row[1]}, in {$row[2]} at €{$row[3]}</h2>";
                    echo "<img id = 'object' src = 'images/{$row[4]}' width='500' height='500'><br><br><br>";
                }
                while ($row = mysqli_fetch_array($result2)){
                    echo "<br><h2>{$row[1]}, in {$row[2]} at €{$row[3]}</h2>";
                    echo "<img id = 'object' src = 'images/{$row[4]}' width='500' height='500'><br><br><br>";
                }
            default:
                while ($row = mysqli_fetch_array($result)){
                    echo "<br><h2>{$row[1]}, in {$row[2]} at €{$row[3]}</h2>";
                    echo "<img id = 'object' src = 'images/{$row[4]}' width='500' height='500'><br><br><br>";
                }
        }
        
        $result -> free_result();
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    //close mysql - replaced $link with $conn
    mysqli_close($conn);
    ?>
</body>
</html>