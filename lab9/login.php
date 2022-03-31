<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php //login.php
        
        /*$hn="sql305.epizy.com";
        $db="epiz_30790588_cards";
        $un="epiz_30790588";
        $pw="WjQkRMc4cpJS";*/

        $hn = 'sql300.epizy.com';
        $un = 'epiz_30847892';
        $pw = '9XHr5D03FOr';
        $db = 'epiz_30847892_cs334';



    //connect to server using mysqli
        $conn = new mysqli($hn, $un, $pw, $db);
        if ($conn->connect_error) die("Fatal Error");

    // run a query to produce test output
        $query = "SELECT 'Hello, Dear MySQL user!' AS _message FROM DUAL";
        $result = $conn -> query($query);
        $row = $result -> fetch_assoc();
        echo htmlentities($row['_message']);
    //select the database
    //    mysql_select_db($db_database)
    //      or die("Unable to select database: ".mysql_error());

    // echo "<br><br>";
    // show_source("login.php");

    ?>
</body>
</html>