<!DOCTYPE html>
<html>
    <head>
        <title>Shishir Timsina Midterm</title>
        <link
            rel="stylesheet"
            href=
        "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            />
            <link
            rel="stylesheet"
            href=
        "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
            />
    </head>

    <body>
    
        <?php
            $months = array("January"=>'31',"February"=>'28', "March"=>'31', 
                "April"=>'30', "May"=>'31',"June"=>'30', "July"=>'31',
                "August"=>'31', "September"=>'30', "October"=>'31',
                "November"=>'30', "December"=>'31'
            );
            ksort($months);
            echo("<table>\n");
            foreach($months as $x=>$x_value){
                echo ("<tr><td>$x</td><td>$x_value</td></tr>\n");
                //echo "<br>";
            }

            echo ("</table>\n");

        ?>  
                        
    </body>
    <br>    <br>    <br>
    <h3>Source</h3>
    <?php show_source("midterm.php") ?>

</html>
