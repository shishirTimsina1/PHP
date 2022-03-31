<!DOCTYPE html>
<html>
    <head>
        <title>Shishir Timsina Calculators</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />   
            <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <?php
        //function to protect against attacks.
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        //function that checks if Int or not, this version is stupid but
        // other had functionality that made it make sense
        function is_validInt($data){
            if(!is_numeric($data)){
                return false;
            }
            return true;
        }
        //function that checks if input is prime or not
        function prime($data){
            $rslt = True;
            for($i = 2; $i< $data; $i++){
                if($data % $i == 0){
                    $rslt = false;
                }
            }
            return $rslt;
        }

        // if form was hit submit, then do a whole bunch of things
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            //logic for inverse calculator part
            if(empty($_POST["invNum"])){
                $invNum = 1;
                $rsltNum = '';
            } else {
                $invNum = $_POST["invNum"];
                $invNum = test_input($_POST["invNum"]);
                if(is_validInt($invNum)){
                    $rsltNum = 1/$invNum;
                } else {$rsltNum = '';}
                
            }
            
            //logic for prime num calculator
            if(empty($_POST["primeNum"])){
                $primeNum = 0;
            } else {
                $primeNum = $_POST["primeNum"];
                $invNum = test_input($_POST["primeNum"]);
            }
            if(prime($primeNum)){
                $rsltPrimeNum = "Prime";
            } else {
                $rsltPrimeNum = "Not Prime";
            }

            //logic for Bill calculator
            if(empty($_POST["beforeTax"])){
                $afterTax = 0;
                $totalBill = 0;
                $tip = 0;
                $beforeTax = 0;
            } else {
                $beforeTax = $_POST["beforeTax"];
                $taxAmount = $beforeTax * 0.07;
                $afterTax = ($beforeTax * 0.07) + $beforeTax;
                $tip = $_POST["tipAmount"] * $afterTax;
                $totalBill =  $tip + $afterTax;
            }


            if(!is_validInt($primeNum) || !is_validInt($invNum)){
                echo '<script>alert("Enter Correct info")</script>';
            }
        }

        ?>

        <section id ="fullForm">
            <div class = "full">
                <div class="lt">
                    <h2>Inverse Calculator</h2>
                    <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        Number: <input type="text" name = "invNum"> <input type = "submit" value="Submit">
                    </form>
                    <?php
                        if($_SERVER["REQUEST_METHOD"] == "POST" && is_validInt($invNum) && !empty($_POST["invNum"])){
                            print <<<RESULT
                                <h3 id = "pr"> The inverse is: $rsltNum</h3>                           
                            RESULT;
                        }
                    ?>
                </div>

                <div class="lt">
                    <h2>Prime Number Or Not</h2>
                    <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        Number: <input type="number" name = "primeNum" min="2"> <input type = "submit" value="Submit">
                    </form>
                    <?php
                        if($_SERVER["REQUEST_METHOD"] == "POST" && is_validInt($primeNum) && !empty($_POST["primeNum"])){
                            print <<<RESULT
                            <h3 id = "pr"> The number is: $rsltPrimeNum</h3>                           
                            RESULT;
                        }
                    ?>
                </div>

                <div class="lt">
                    <h2>Bill Calculator</h2>
                    <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        Before Tax: <input type="number" name = "beforeTax" min="1"> <input type = "submit" value="Submit">
                        <select name = "tipAmount">
                            <option value = "0.10">10 %</option>
                            <option value = "0.15">15 %</option>
                            <option value = "0.20">20 %</option>
                        </select>
                    </form>
                    <?php
                        if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["beforeTax"])) {
                            print <<<RS
                                <h3> Before tax:</h3>
                                $beforeTax
                                <h3> After tax:</h3>
                                $afterTax
                                <h3> Tip applied:</h3>
                                $tip
                                <h3> Total bill: </h3>
                                $totalBill
                            RS;
                        }
                    ?>
                </div>
            </div>
        </section>
    </body>

</html>