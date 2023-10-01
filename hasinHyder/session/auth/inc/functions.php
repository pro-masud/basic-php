<?php 

define("DB", "C:/xampp/htdocs/final-pro/DB/database.txt");

// seed function by default data sent to database


function seed(){
    $data = [
        [
            "id"    => 1,
            "fname"     => "Masud",
            "lname"     => "Rana",
            "roll"      => 2,
        ],
        [
            "id"    => 2,
            "fname"     => "Khalid",
            "lname"     => "Hasan",
            "roll"      => 6,
        ],
        [
            "id"    => 3,
            "fname"     => "Sofik",
            "lname"     => "Khan",
            "roll"      => 7,
        ],
        [
            "id"        => 4,
            "fname"     => "Maruf",
            "lname"     => "Khan",
            "roll"      => 9,
        ],
        [
            "id"        => 5,
            "fname"     => "Masud",
            "lname"     => "Rana",
            "roll"      => 10,
        ],
    ];

    $students = serialize($data);

    file_put_contents(DB, $students, LOCK_EX);
}



/**
 * 
 * get student data to database
 * 
 * */ 

 function getStudents(){
    $unserialize = file_get_contents(DB);
    $students = unserialize($unserialize);
    ?>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($students as $student): ?>
                <tr>
                <td><?php echo $student['id']; ?></td>
                    <td><?php echo $student['fname'] . " " .  $student['lname'] ?></td>
                    <td><?php echo $student['roll']; ?></td>
                    <td><a style="color: green;" href="index.php?task=edit&id=<?php echo $student['id']; ?>">Edit</a> | <a style="color: red;" href="index.php?task=delete&id=<?php echo $student['id']; ?>">Delete</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <?php
 }





/**
 * 
 * new student add and send to database
 * 
*/

function addNewStudents($fname, $lname, $roll){
    $founts = false;
    $unserialize = file_get_contents(DB);
    $students = unserialize($unserialize);
   

    foreach($students as $_student){
        if($_student['roll'] == $roll){
            $founts = true;
            break;
        }
    }

    if(!$founts){
        $newId = studentId($students);
        $newStudent = [
            "id"    => $newId,
            "fname" => $fname,
            "lname" => $lname,
            "roll"  => $roll,
        ];
    
        array_push($students, $newStudent);
    
    
        $serialize = serialize($students);
    
        file_put_contents(DB, $serialize, LOCK_EX);
        return true;
    }

    return false;

}



/**
 * student update information 
 * */ 

 function editStudent($id){
    $unserialize = file_get_contents(DB);
    $students = unserialize($unserialize);
   

    foreach($students as $student){
        if($student['id'] == $id){
            return $student;
        }
    }
    return false;
 }



/**
 * 
 * update student information
 * */  

 function upDateStudentInfo($id, $fname, $lname, $roll){
    $founts = false;
    $unserialize = file_get_contents(DB);
    $students = unserialize($unserialize);

    foreach($students as $_student){
        if($_student['roll'] == $roll && $_student['id'] != $id){
            $founts = true;
            break;
        }
    }
    
    if(!$founts){
        $students[$id-1]['fname']    = $fname;
        $students[$id-1]['lname']    = $lname;
        $students[$id-1]['roll']    = $roll;

        $serialize = serialize($students);
    
        file_put_contents(DB, $serialize, LOCK_EX);
        return true;
    }

    return false;    
 }


/**
 * student delete to database
 * 
 * */  

 function  deleteStudent($id){
    $unserialize = file_get_contents(DB);
    $students = unserialize($unserialize);

    foreach($students as $keys => $student){
        if($student['id'] == $id){
            unset($students[$keys]);
        }
    }

    

    $serialize = serialize($students);
    
    file_put_contents(DB, $serialize, LOCK_EX);



 }


 function studentId($students){
    $maxId = max(array_column($students, "id"));

    return $maxId + 1;
 }