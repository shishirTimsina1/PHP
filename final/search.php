<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Customers</title>
</head>
<body>
    <?php
    include 'menu.html'; // display menu
    ?>
    <br><br>
    <div id="wrapper">
     <section id="top area">
          <article class="box-right">
               <form action="searchResults.php" method="post">
                    <p>
                         <label>First Name:</label>
                         <input name="firstName" required="required" placeholder="John" type="text">
                    </p>
                    <p>
                         <input value="Submit" type="submit">
                    </p>
                </form>
            </article>
        </section>
    </div><!-- END MAIN WRAPPER -->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>