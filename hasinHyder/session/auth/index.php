<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- normalize file -->
    <link rel="stylesheet" href="./css/normalize.css">
    <!-- milligram file -->
    <link rel="stylesheet" href="./css/milligram.min.css">
    <!-- CSS Main File -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="forms">
        <div class="container">
            <div class="row">
                <div class="column column-70 column-offset-30">
                    <div style="text-align: center;" class="student-admin">
                        <h1>Log In</h1>
                      
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column column-50 column-offset-20">
                    <form class="student_add_form" method="POST">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="fname" >
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lname">
                            <label for="roll">Roll</label>
                            <input type="text" id="roll" name="roll">
                            <button type="submit" name="submit">Log In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>