<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Travel Helper</title>
  </head>
<body>
    <?php
    include 'menu.html'; // display menu 
    ?>
    <br><br>
    <div id="wrapper" style="text-align: center;">
     <section id="top area">
          <article class="box-right">
               <form action="homeSearch.php" method="post">
                    <p>
                         <label>Lookup:</label>
                         <input name="userInput" required="required" placeholder="Item Name/ Locations" type="text"><br>
                         <input type="radio" id="hotels" name="fav_language" value="hotels" required>
                        <label for="hotels">Hotels</label>
                        <input type="radio" id="tours" name="fav_language" value="tours">
                        <label for="tours">Tours</label>
                        <input type="radio" id="events" name="fav_language" value="events">
                        <label for="events">Events</label>
                        <input type="radio" id="location" name="fav_language" value="location">
                        <label for="location">Location</label>
                    </p>
                    <p>
                         <input class = "btn btn-dark" value="Submit" type="submit">
                    </p>
                </form>
            </article>
        </section>
        <h3>Hotels on the Moon:</h3>
        <p>Hyatt</p> 
        <p>Wyndham</p>
        <p>Holiday Inn</p>
        <p>Hampton Inn</p>
        <p>Red Roof Inn</p>
    <h3>Locations we support:</h3>
        Sea of Tranquility, Mare Imbrium, Harbinger Mountains, Schiller Crater, Mare Crisium
    <br>
    </div><!-- END MAIN WRAPPER -->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
</body>
</html>