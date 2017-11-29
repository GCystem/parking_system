<!DOCTYPE html>
      
<?php 
        require "db.php";
        $call = mysqli_prepare($link, 'CALL test(@res)');
        // mysqli_stmt_bind_param($call, 'iii', $procInput1, $procInput2, $procInput3);
        mysqli_stmt_execute($call);
        $select = mysqli_query($link, 'SELECT @res');
        $result = mysqli_fetch_assoc($select);

        echo $result['@res'];
        echo '<br>------TEST-------------<br>';
       
        // if(!$res){
        //     echo $link->errno;
        //     echo EEEERRRRRRORRRRRRR;
        // }
        // else{
        //     // echo var_dump($res->fetch_assoc());
        //     /* fetch associative array */
        //     // while ($row = $res->fetch_assoc()) {
        //     //     echo var_dump($row);
        //     // }
        //     echo $res;
        // }

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(!empty($_POST['time_limit_post'])){
                $input1 = $_POST['time_limit_in'];
                $input2 = $_POST['time_limit_garage_in'];
                $input3 = $_POST['time_limit_space_in'];
              
                $call = mysqli_prepare($link, 'CALL updateTimeLimit(?,?,?)');
                mysqli_stmt_bind_param($call, 'sss', $input1, $input2, $input3);
                mysqli_stmt_execute($call);
            }
            elseif(!empty($_POST['space_post'])){
                $input1 = $_POST['space_in'];
                $input2 = $_POST['space_garage_in'];
                $input3 = $_POST['space_space_in'];
              
                $call = mysqli_prepare($link, 'CALL updateSpace(?,?,?)');
                mysqli_stmt_bind_param($call, 'sss', $input1, $input2, $input3);
                mysqli_stmt_execute($call);
            }
            elseif(!empty($_POST['employee_post'])){
                $input1 = $_POST['employee_in'];
                $input2 = $_POST['employee_garage_in'];
                $input3 = $_POST['employee_space_in'];
              
                $call = mysqli_prepare($link, 'CALL updateEmployee(?,?,?)');
                mysqli_stmt_bind_param($call, 'sss', $input1, $input2, $input3);
                mysqli_stmt_execute($call);
            }
            elseif(!empty($_POST['space_area_post'])){
                $input1 = $_POST['space_area_in'];
                $input2 = $_POST['space_area_garage_in'];
                $input3 = $_POST['space_area_area_in'];
              
                $call = mysqli_prepare($link, 'CALL updateSpaceArea(?,?,?)');
                mysqli_stmt_bind_param($call, 'sss', $input1, $input2, $input3);
                mysqli_stmt_execute($call);
            }
            elseif(!empty($_POST['space_garage_post'])){
                $input1 = $_POST['space_garage_in'];
                $input2 = $_POST['space_garage_garage_in'];
              
                $call = mysqli_prepare($link, 'CALL updateSpaceGarage(?,?)');
                mysqli_stmt_bind_param($call, 'ss', $input1, $input2);
                mysqli_stmt_execute($call);
            }
            elseif(!empty($_POST['remaining_space_post'])){
                $input1 = $_POST['remaining_space_in'];
                $input2 = $_POST['remaining_space_garage_in'];
                $input3 = $_POST['remaining_space_space_in'];
              
                $call = mysqli_prepare($link, 'CALL updateRemainSpace(?,?,?)');
                mysqli_stmt_bind_param($call, 'sss', $input1, $input2, $input3);
                if(mysqli_stmt_execute($call)){
                    echo 'TRUE';
                }
                else{
                    echo 'FAIL<br>';
                    echo $link->errno;
                }
            }
            elseif(!empty($_POST['remaining_plate_post'])){
                $input1 = $_POST['remaining_plate_in'];
                $input2 = $_POST['remaining_plate_garage_in'];
                $input3 = $_POST['remaining_plate_plate_in'];
              
                $call = mysqli_prepare($link, 'CALL updateRemainPlate(?,?,?)');
                mysqli_stmt_bind_param($call, 'sss', $input1, $input2, $input3);
                mysqli_stmt_execute($call);
            }
            else{
                echo '<script>window.location.href = "admin_panel.php";</script>';
            }

        }
        else{
            echo '<script>window.location.href = "admin_panel.php";</script>';
        }


?>
