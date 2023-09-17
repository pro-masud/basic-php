<?php 
    include "function.php";
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

            // array for language here

            $language = ['PHP', 'JavaScript', 'Python', 'Go', 'Ruby', 'C', 'C++', 'C#']
           

        ?>


    <section class="from">
        <div class="container">
        <div class="row">
                <div class="column column-60 column-offset-25">
                    <h3>Programming Language</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga est reiciendis repellendus officiis consequuntur modi eius sapiente, fugiat architecto deserunt.</p>
                    <p>
                        <?php 
    
                            $number = $_POST['langu'] ?? [];
                            if(isset($number) && $number != ""){
                                echo join(", ", $number);
                            }

                        ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="column column-50 column-offset-25">
                    <form method="POST">
                        <fieldset>
                            <p style="font-weight: blod;">Select Your Programming lenguage</p>
                            
                            <select style="height: 300px;" name="langu[]" id="langu" multiple>
                                <option selected disabled value="">Selected Language</option>
                                <?php selectOption($language, $number); ?>
                            </select>
                            
                            <input class="button-primary" type="submit" value="Send">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>