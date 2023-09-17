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
                                echo "First Name: " . $fname = $_REQUEST['fname'];
                            }

                            echo "<br>";

                            if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])){
                                echo "Last Name: " . $lname = $_REQUEST['lname'];
                            }
                        ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="column column-50 column-offset-25">
                    <form method="POST">
                        <fieldset>
                            <input name="fname" type="text" placeholder="First Name">

                            <input name="lname" type="text" placeholder="Last Name">
                            
                            <input class="button-primary" type="submit" value="Send">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>