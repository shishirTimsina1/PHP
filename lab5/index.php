<!DOCTYPE html>
<html>
    <head>
        <title>Shishir Timsina Lab 5</title>
    </head>

    <body>
        <div id="numPrint100">
            <h1> Printing numbers 1 -> 100 with Modifications</h1>
            <h3>Shishir Timsina</h3>
            <?php
                for($x = 1; $x <=100; $x++){
                    if($x % 6 == 0 && $x % 4 == 0)
                        echo "COVID19 TEST <br>";
                    else if($x % 4 == 0){
                        echo "COVID19 <br>";
                    } else if ($x % 6 == 0){
                        echo "TEST <br>";
                    }
                    else
                        echo "$x <br>";
                }
            ?>
        </div>
    </body>

    <h2>Source Code</h2>
<?php show_source("index.php") ?> 

</html>