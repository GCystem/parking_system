<!DOCTYPE html>
<html>
    <head>
        <title>
            Team 1 Project
        </title>
    </head>

    <body>
        <center>
            <h1 id="hello"> Enter your input </h1>
        </center>
            <form name="options" action="input_handle.php" method="post">
                
<?php 

        require "db.php";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST['admin'];
            if($input == "time_limit"){
                echo '<input type="text">BLHA<br>';
            }
            elseif($input == "space"){
                echo '';
            }
            elseif($input == "employee"){
                
            }
            elseif($input == "space_area"){
                
            }
            elseif($input == "space_garage"){
                
            }
            elseif($input == "remaining_space"){
                
            }
            elseif($input == "remaining_plate"){
                
            }
            
        }
        else{
            echo "<br>NOOO";
        }


?>

            </form>

    </body>