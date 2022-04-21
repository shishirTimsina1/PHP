<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
</head>
<body>
    <?php
    include 'menu.html'; // display menu
    ?>
    <br><br>
    <div id="wrapper">
     <section id="top area">
          <article class="box-right">
               <form action="usedata.php" method="post">
                    <p>
                         <label>Customer ID:</label>
                         <input name="customerId" required="required" placeholder="1" type="number">
                    </p>
                    <p>
                         <label>First Name:</label>
                         <input name="firstName" required="required" placeholder="John" type="text">
                    </p>
                    <p>
                         <label>Last Name:</label>
                         <input name="lastName" required="required" placeholder="Doe" type="text">
                    </p>
                    <p>
                         <label>Street Address:</label>
                         <input name="stAddy1" required="required" placeholder="123 Rd"type="text">
                    </p>
                    <p>
                         <label>City:</label>
                         <input name="city" placeholder="Pittsburgh"type="text">
                    </p>
                    <p>
                         <label>State Abbr:</label>
                         <input name="stateAbbr" placeholder="PA" type="text">
                    </p>
                    <p>
                         <label>Postal:</label>
                         <input name="postalCode" placeholder="12345" type="number">
                    </p>
                    <p>
                         <label>Your Email:</label>
                         <input name="email" required="required" placeholder="random@mail.com" type="email">
                    </p>
                    <p>
                         <label>UserID:</label>
                         <input name="userID" required="required" placeholder="eg. jDoe" type="text">
                    </p>
                    <p>
                         <label>Password:</label>
                         <input name="password" required="required" placeholder="eg. X8df190EO" type="password">
                    </p>
                    <p>
                         <label>Sales ID:</label>
                         <input name="salesPersonID" required="required" placeholder="eg. 1" type="number">
                    </p>
                    <p>
                         <input value="Submit" type="submit">
                    </p>
                </form>
            </article>
        </section>
    </div><!-- END MAIN WRAPPER -->
</body>
</html>