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
    $cID = $_POST['customerId'];
    $Fname = $_POST['firstName'];
    $Lname = $_POST['lastName'];
    $stAddy1 = $_POST['stAddy1'];
    $city = $_POST['city'];
    $stateAbbr = $_POST['stateAbbr'];
    $postalCode = $_POST['postalCode'];
    $email = $_POST['email'];
    $userID = $_POST['userID'];
    $password = $_POST['password'];
    $sID = $_POST['salesPersonID'];

    $cID = test_input($cID);
    $Fname = test_input($Fname);
    $Lname = test_input($Lname);
    $stAddy1 = test_input($stAddy1);
    $city = test_input($city);
    $stateAbbr = test_input($stateAbbr);
    $postalCode = test_input($postalCode);
    $email = test_input($email);
    $userID = test_input($userID);
    $password = test_input($password);
    $sID = test_input($sID);

    


    //insert data into mysql
    $query = "INSERT INTO customer(customerID, lastName, firstName, stAddy1, stAddy2, city, stateAbbr, postalCode,country, email,homePhone,facebookURL,cellPhone, userID, userPassword, salesPersonID)
    VALUES ('$cID', '$Lname', '$Fname', '$stAddy1',NULL, '$city', '$stateAbbr', '$postalCode',NULL, '$email',NULL,NULL,NULL, '$userID', SHA1('$password'), '$sID')";

    // replace $link with $conn
    $result=mysqli_query($conn, $query);

    //if successfully insert data into database, displays message "successful".
    if($result) {
    echo "Added Customer";
    }
    else {
    echo "Error: " . $query . "<br>" . $conn->error;
    }

    //close mysql - replaced $link with $conn
    mysqli_close($conn);
    ?>
</body>
</html>