<!DOCTYPE html>
      
<?php 
        require "db.php";

       
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
            $option = $_POST['admin'];

            if($option == 'employee_ch'){
                $result = mysqli_query($link, 'CALL checkEmployee()');
                $count = mysqli_num_rows($result);
                $i = 1;
                echo '<h3> Violating Vehicles </h3><br>';
                while($row = mysqli_fetch_assoc($result)){
                    
                    echo '<h3>'.$i.' </h3>';
                    echo 'Garage Number: '. $row['garage_no'].'<br>';
                    echo 'Space Number: '. $row['space_no'].'<br>';
                    echo 'Plate Number: '. $row['plate_no'].'<br>';

                    $chart[$i]['garage_no'] = $row['garage_no'];                    
                    $chart[$i]['space_no'] = $row['space_no'];
                    $chart[$i]['plate_no'] = $row['plate_no'];
                    $i++;

                }

                echo '<br><a href="admin_panel.php">Back</a>';

            }
            elseif($option == 'time_limit_ch'){

            }
            elseif($option == 'compact_ch'){
                echo '<script>window.location.href = "admin_panel.php";</script>';
            }
            elseif($option == 'disability_ch'){
                echo '<script>window.location.href = "admin_panel.php";</script>';
            }
            elseif($option == 'status_ch'){
                $chart = array();
                $result = mysqli_query($link, 'CALL checkStatus()');
                $count = mysqli_num_rows($result);
                $i = 1;
                echo '<h3> Violating Vehicles </h3><br>';
                while($row = mysqli_fetch_assoc($result)){
                    
                    echo '<h3>'.$i.' </h3>';
                    echo 'Garage Number: '. $row['garage_no'].'<br>';
                    echo 'Space Number: '. $row['space_no'].'<br>';
                    echo 'Plate Number: '. $row['plate_no'].'<br>';

                    $chart[$i]['garage_no'] = $row['garage_no'];                    
                    $chart[$i]['space_no'] = $row['space_no'];
                    $chart[$i]['plate_no'] = $row['plate_no'];
                    $i++;

                }

                echo '<br><a href="admin_panel.php">Back</a>';

            }


            // echo 'option is '.$option;
            // outLog($call, $log_file_name);
        }
        else{
            backHome();
        }


?>
