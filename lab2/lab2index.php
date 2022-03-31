<!DOCTYPE html>
<html>
    <head>
        <title> Tip of The Day</title>
    </head>

    <body>
        <h1>
            Tip of The Day
        </h1>
        <?php
        echo "<h3> Here is your Tip: </h3>";
        ?>
        <div style="border-color:green; border-style:groove; border: width 2px;" >
            <?php
                readfile("tips.txt");
            ?>
        </div>
    </body>
    <br>    <br>    <br>
    <h2>Source Code</h2>
    <?php show_source("lab2index.php") ?>
</html>