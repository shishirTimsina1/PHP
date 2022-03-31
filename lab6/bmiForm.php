<!DOCTYPE html>
<html>
    <head>
        <title>Shishir Timsina Lab 6</title>
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
            <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <?php
          $h = $w = $name = $bmi= $rslt = '';
          $nameErr = $heightErr = $weightErr = '';


          function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
          function is_validInt($data){
              if(!is_numeric($data)){
                  return false;
              }
              if($data <= 0 ){
                  return false;
              }
              if($data > 600){
                  return false;
              }
              return true;
          }

          if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $h = $_POST["height"];
            $w = $_POST["weight"];

            if (empty($_POST["name"])) {
              $nameErr = "Name is required";
            } else {
              $name = test_input($_POST["name"]);
              if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
                $name = "";
              }
            }
            if (empty($_POST["height"])) {
              $heightErr = "Height is required";
              
            } else {
              $h = test_input($_POST["height"]);
            }
            if (empty($_POST["weight"])) {
              $weightErr = "Weight is required";
              
            } else {
              $w = test_input($_POST["weight"]);
            }
            if(is_validInt($h) && is_validInt($w) && !empty($name)){
                $h = $h * .0254;
                $w = $w / 2.2046;

                $bmi = $w/($h ** 2);
                $rslt = 'Underweight';

                if ($bmi > 29.9){
                    $rslt = 'Obese';
                } elseif ($bmi > 25 && $bmi < 29.9){
                    $rslt = 'Overweight';
                } elseif ($bmi > 18.5 && $bmi < 24.9){
                    $rslt = 'Normal';
                }
            } else {
                echo '<script>alert("Enter Correct info")</script>';
            }
           
          }
           
        ?>
        <section id="fullForm">
            <!-- heading -->
            <div class="full">
                <h2 style = "font-family:Courier">BMI Calculator</h2>
        
                <div class="lt">  
    
                    <p><span class="error">* required field</span></p>     
                        <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            Name: <input type="text" name="name"><br>
                            <span class="error">*  <?php echo $nameErr;?></span>
                            <br><br>
                            Weight in pounds: <input type="text" name="weight"><br>
                            <span class="error">* <?php echo $weightErr;?></span>
                            <br><br>
                            Height in inches: <input type="text" name="height"><br>
                            <span class="error">* <?php echo $heightErr;?></span>
                            <br><br>
                            <button
                                class="btn btn-primary send-button"
                                id="submit"
                                type="submit"
                                value="SEND">
                                <i class="fa fa-paper-plane"></i>
                                <span class="send-text">SEND</span>
                            </button>
                        </form>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && is_validInt($h) && is_validInt($w) && !empty($name)) {
                            print <<<RESULT
                                <h3> $name's BMI is :</h3>
                                $bmi
                                <h3> It is :</h3>
                                $rslt
                            RESULT;
                            
                                print <<<HERE
                                <br><br><br>
                                <h3> Feedback Form </h3>
                                <form action = "feedback.php"
                                    method = "post">
                                    
                                <fieldset>
                                    <label>First Name:</label>
                                    <input type = "text"
                                        name = "fName"
                                        />
                                        <br/>
                                    <label>Last Name:</label>
                                    <input type = "text"
                                        name = "lName"
                                        />
                                    <br/> 
                                    <label>Email:</label>
                                    <input type = "text"
                                        name = "email"
                                        />
                                    <br/> 
                                    <label>Feedback, add any feedback or questions you have about your results:</label>
                                    <textarea name = "comments"
                                            rows = "20"
                                            cols = "60"> BMI = $bmi
                                    </textarea>
                                    <br/>         
                                    <button
                                        class="btn btn-primary send-button"
                                        id="submit"
                                        type="submit"
                                    </button>
                                    Submit Information
                                    </button>
                                </fieldset>
                                </form>
                            HERE;
                        }
                        
                        
                        ?>

                </div>
            </div>
        </section>                
    </body>

</html>
