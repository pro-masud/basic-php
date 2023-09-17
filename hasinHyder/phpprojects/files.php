<?php 
    // include "function.php";

    $imgType = [
        "image/png",
        "image/jpg",
        "image/jpeg"
    ];

    if($_FILES['photos']){
        if(in_array($_FILES['photos']['type'], $imgType) !== false){
            move_uploaded_file($_FILES['photos']['tmp_name'], "./upload/ " . $_FILES['photos']['name']);
        }
    }
?>
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
        *{
            margin: 0; 
            padding: 0;
            box-sizing: border-box;
        }
        .from{
            margin-top: 100px;
        }
    </style>
</head>
<body>
<?php 

    $fname = "";
    $lname = "";
    $photos = "";


?>

    <section class="from">
        <div class="container">
            <div class="row">
                <div class="column column-60 column-offset-25">
                    <h3>Log In Form</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga est reiciendis repellendus officiis consequuntur modi eius sapiente, fugiat architecto deserunt.</p>
                    <pre>
                        <p>
                            <?php 

                               if(isset($_POST['fname']) || isset($_POST['lname']) || isset($_FILES['photos'])){
                                    echo $fname = $_POST['fname'];
                                    echo $lname = $_POST['lname'];
                                    echo $photos = $_FILES['photos']['name'];
                               }



                            ?>
                        </p>
                    </pre>
                </div>
            </div>
            <div class="row">
                <div class="column column-50 column-offset-25">
                    <form method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <div>
                                <input name="fname" type="text" placeholder="First Name">
                            </div>

                            <div>
                                <input name="lname" type="text" placeholder="Last Name">
                            </div>

                            <div>
                                <input name="photos" type="file" >
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