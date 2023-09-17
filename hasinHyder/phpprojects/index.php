<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Project</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        .from{
            margin-top: 100px;
        }
    </style>
</head>
<body>

        <?php 
        
            $fname = "";
            $lname = "";
            $checked = "";

            // define("FILTER_SANITIZE_STRING", "513");

        ?>


    <section class="from">
        <div class="container">
            <div class="row">
                <div class="column column-60 column-offset-25">
                    <h3>Log In Form</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga est reiciendis repellendus officiis consequuntur modi eius sapiente, fugiat architecto deserunt.</p>
                    <p>
                        <?php
                            if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])){
                                echo "First Name: " . $fname = htmlspecialchars($_REQUEST['fname']);
                                // echo "First Name: " . $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
                            }

                            echo "<br>";

                            if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])){
                                echo "Last Name: " . $lname = htmlspecialchars($_REQUEST['lname']);
                                // echo "Last Name: " . $lname = filter_input(INPUT_POST, "lname", FILTER_SANITIZE_STRING);
                            }

                            // checkbox is a checked 
                            if(isset($_REQUEST['checkbox']) && $_REQUEST['checkbox'] == 1){
                                $checked = " checked ";
                            }
                        ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="column column-50 column-offset-25">
                    <form method="POST">
                        <fieldset>
                            <div>
                                <input name="fname" type="text" placeholder="First Name" value="<?php echo $fname;?>">
                            </div>

                            <div>
                                <input name="lname" type="text" placeholder="Last Name"  value="<?php echo $lname;?>">
                            </div>

                            <div>
                                <input name="checkbox" type="checkbox" value="1"  <?php echo $checked; ?> > 
                            </div>
                            
                            <input class="button-primary" type="submit" value="Send">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>