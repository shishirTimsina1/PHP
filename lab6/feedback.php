<!DOCTYPE html>
<html>
    <head>
        <title>Shishir Timsina Lab 6</title>
    </head>

    <body>
        <h1>Feedback</h1>
        <?php
           $f = $_POST["fName"];
           $l = $_POST["lName"];
           $c = $_POST['comments'];
          
           print("First Name: $f\n");
           echo "</br>";
           print("Last Name: $l\n");
           echo "</br>";
           print("Comment: $c\n");
           echo "</br>";
           print ("\n Thanks for providing feedback\n Email notifications are not working yet");

        ?>
    </body>

</html>