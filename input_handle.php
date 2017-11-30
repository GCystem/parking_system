<!DOCTYPE html>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<?php 
        require "db.php";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(!empty($_POST['time_limit_post'])){

                $input1 = $_POST['time_limit_in'];
                $input2 = $_POST['time_limit_garage_in'];
                $input3 = $_POST['time_limit_space_in'];
              
                echo '<h3> BEFORE </h3><br>';
                $q1 = 'SELECT time_limit, garage_no, space_no FROM parking_space WHERE garage_no = "'.$input2.'" AND space_no = "'.$input3. '";';
                $select1 = mysqli_query($link, $q1);
                
                $old = mysqli_fetch_assoc($select1);
                echo 'Time Limit: '.$old['time_limit'];
                echo '<br>Garage Number: '.$old['garage_no'];
                echo '<br>Space Number: '.$old['space_no'];

                $call = mysqli_prepare($link, 'CALL updateTimeLimit(?,?,?)');
                mysqli_stmt_bind_param($call, 'sss', $input1, $input2, $input3);
                mysqli_stmt_execute($call);

                echo '<br><br><h3> AFTER </h3><br>';
                $q2 = 'SELECT time_limit, garage_no, space_no FROM parking_space WHERE garage_no = "'.$input2.'" AND space_no = "'.$input3. '";';
                $select2 = mysqli_query($link, $q2);
                
                $new = mysqli_fetch_assoc($select2);
                echo 'Time Limit: '.$new['time_limit'];
                echo '<br>Garage Number: '.$new['garage_no'];
                echo '<br>Space Number: '.$new['space_no'];

                echo '<br><a href="admin_panel.php">Back</a>';
                // outLog($call, $log_file_name);
            }
            elseif(!empty($_POST['space_post'])){
                $input1 = $_POST['space_in'];
                $input2 = $_POST['space_garage_in'];
                $input3 = $_POST['space_space_in'];
                                
                echo '<h3> BEFORE </h3><br>';
                $q1 = 'SELECT status, garage_no, space_no FROM parking_space WHERE garage_no = "'.$input2.'" AND space_no = "'.$input3. '";';
                $select1 = mysqli_query($link, $q1);
                
                $old = mysqli_fetch_assoc($select1);
                echo 'Status: '.$old['status'];
                echo '<br>Garage Number: '.$old['garage_no'];
                echo '<br>Space Number: '.$old['space_no'];
              
                $call = mysqli_prepare($link, 'CALL updateSpace(?,?,?)');
                mysqli_stmt_bind_param($call, 'sss', $input1, $input2, $input3);
                mysqli_stmt_execute($call);

                echo '<br><br><h3> AFTER </h3><br>';
                $q2 = 'SELECT status, garage_no, space_no FROM parking_space WHERE garage_no = "'.$input2.'" AND space_no = "'.$input3. '";';
                $select2 = mysqli_query($link, $q2);
                
                $new = mysqli_fetch_assoc($select2);
                echo 'Status: '.$new['status'];
                echo '<br>Garage Number: '.$new['garage_no'];
                echo '<br>Space Number: '.$new['space_no'];

                echo '<br><a href="admin_panel.php">Back</a>';
                // outLog($call, $log_file_name);
            }
            elseif(!empty($_POST['employee_post'])){
                $input1 = $_POST['employee_in'];
                $input2 = $_POST['employee_garage_in'];
                $input3 = $_POST['employee_space_in'];
              
                echo '<h3> BEFORE </h3><br>';
                $q1 = 'SELECT employee_only, garage_no, space_no FROM parking_space WHERE garage_no = "'.$input2.'" AND space_no = "'.$input3. '";';
                $select1 = mysqli_query($link, $q1);
                
                $old = mysqli_fetch_assoc($select1);
                echo 'Employee Only: '.$old['employee_only'];
                echo '<br>Garage Number: '.$old['garage_no'];
                echo '<br>Space Number: '.$old['space_no'];

                $call = mysqli_prepare($link, 'CALL updateEmployee(?,?,?)');
                mysqli_stmt_bind_param($call, 'sss', $input1, $input2, $input3);
                mysqli_stmt_execute($call);

                echo '<br><br><h3> AFTER </h3><br>';
                $q2 = 'SELECT employee_only, garage_no, space_no FROM parking_space WHERE garage_no = "'.$input2.'" AND space_no = "'.$input3. '";';
                $select2 = mysqli_query($link, $q2);
                
                $new = mysqli_fetch_assoc($select2);
                echo 'Employee Only: '.$new['employee_only'];
                echo '<br>Garage Number: '.$new['garage_no'];
                echo '<br>Space Number: '.$new['space_no'];

                echo '<br><a href="admin_panel.php">Back</a>';
                // outLog($call, $log_file_name);
            }
            elseif(!empty($_POST['space_area_post'])){
                $input1 = $_POST['space_area_in'];
                $input2 = $_POST['space_area_garage_in'];
                $input3 = $_POST['space_area_area_in'];

                $q1 = 'SELECT status, garage_no, space_no, area FROM parking_space WHERE garage_no = "'.$input2.'" AND area = "'.$input3. '";';
                $result = mysqli_query($link, $q1);
                $count = mysqli_num_rows($result);
                $i = 1;
                echo '<h3> BEFORE </h3><br>';
                while($row = mysqli_fetch_assoc($result)){
                    
                    echo '<h3>'.$i.'. </h3>';
                    echo 'Parking Status: '. $row['status'].'<br>';
                    echo 'Garage Number: '. $row['garage_no'].'<br>';
                    echo 'Space Number: '. $row['space_no'].'<br>';
                    echo 'Parking Area: '. $row['area'].'<br>';
                    $i++;
                }

              
                $call = mysqli_prepare($link, 'CALL updateSpaceArea(?,?,?)');
                mysqli_stmt_bind_param($call, 'sss', $input1, $input2, $input3);
                mysqli_stmt_execute($call);

                $q2 = 'SELECT status, garage_no, space_no, area FROM parking_space WHERE garage_no = "'.$input2.'" AND area = "'.$input3. '";';
                $result2 = mysqli_query($link, $q2);
                $count2 = mysqli_num_rows($result2);
                $i = 1;
                echo '<br><br><h3> AFTER </h3><br>';
                while($row = mysqli_fetch_assoc($result2)){
                    
                    echo '<h3>'.$i.'. </h3>';
                    echo 'Parking Status: '. $row['status'].'<br>';
                    echo 'Garage Number: '. $row['garage_no'].'<br>';
                    echo 'Space Number: '. $row['space_no'].'<br>';
                    echo 'Parking Area: '. $row['area'].'<br>';
                    $i++;
                }

                echo '<br><a href="admin_panel.php">Back</a>';
                // outLog($call, $log_file_name);
            }
            elseif(!empty($_POST['space_garage_post'])){
                $input1 = $_POST['space_garage_in'];
                $input2 = $_POST['space_garage_garage_in'];

                $q1 = 'SELECT status, garage_no, space_no FROM parking_space WHERE garage_no = "'.$input2.'";';
                $result = mysqli_query($link, $q1);
                $count = mysqli_num_rows($result);
                $i = 1;
                echo '<h3> BEFORE </h3><br>';
                while($row = mysqli_fetch_assoc($result)){
                    
                    echo '<h3>'.$i.'. </h3>';
                    echo 'Parking Status: '. $row['status'].'<br>';
                    echo 'Garage Number: '. $row['garage_no'].'<br>';
                    echo 'Space Number: '. $row['space_no'].'<br>';
                    $i++;
                }
              
                $call = mysqli_prepare($link, 'CALL updateSpaceGarage(?,?)');
                mysqli_stmt_bind_param($call, 'ss', $input1, $input2);
                mysqli_stmt_execute($call);

                $q2 = 'SELECT status, garage_no, space_no FROM parking_space WHERE garage_no = "'.$input2.'";';
                $result = mysqli_query($link, $q2);
                $count = mysqli_num_rows($result);
                $i = 1;
                echo '<br><br><h3> AFTER </h3><br>';
                while($row = mysqli_fetch_assoc($result)){
                    
                    echo '<h3>'.$i.'. </h3>';
                    echo 'Parking Status: '. $row['status'].'<br>';
                    echo 'Garage Number: '. $row['garage_no'].'<br>';
                    echo 'Space Number: '. $row['space_no'].'<br>';
                    $i++;
                }

                echo '<br><a href="admin_panel.php">Back</a>';
                // outLog($call, $log_file_name);
            }
            elseif(!empty($_POST['remaining_space_post'])){
                $input1 = $_POST['remaining_space_in'];
                $input2 = $_POST['remaining_space_garage_in'];
                $input3 = $_POST['remaining_space_space_in'];
              
                // TODO
                echo '<h3> BEFORE </h3><br>';
                $q1 = 'SELECT estimated_end_time, garage_no, space_no FROM park WHERE garage_no = "'.$input2.'" AND space_no = "'.$input3. '";';
                $select1 = mysqli_query($link, $q1);
                
                $old = mysqli_fetch_assoc($select1);
                echo 'Remaining Time: '.$old['estimated_end_time'];
                echo '<br>Garage Number: '.$old['garage_no'];
                echo '<br>Space Number: '.$old['space_no'];


                $call = mysqli_prepare($link, 'CALL updateRemainSpace(?,?,?)');
                mysqli_stmt_bind_param($call, 'sss', $input1, $input2, $input3);
                if(mysqli_stmt_execute($call)){
                    echo 'TRUE';
                }
                else{
                    echo 'FAIL<br>';
                    echo $link->errno;
                }

                echo '<br><a href="admin_panel.php">Back</a>';
                // outLog($call, $log_file_name);
            }
            elseif(!empty($_POST['remaining_plate_post'])){
                $input1 = $_POST['remaining_plate_in'];
                $input2 = $_POST['remaining_plate_garage_in'];
                $input3 = $_POST['remaining_plate_plate_in'];
              
                $call = mysqli_prepare($link, 'CALL updateRemainPlate(?,?,?)');
                mysqli_stmt_bind_param($call, 'sss', $input1, $input2, $input3);
                mysqli_stmt_execute($call);

                echo '<br><a href="admin_panel.php">Back</a>';
                // outLog($call, $log_file_name);
            }
            else{
                echo '<script>window.location.href = "admin_panel.php";</script>';
            }

        }
        else{
            echo '<script>window.location.href = "admin_panel.php";</script>';
        }


?>
