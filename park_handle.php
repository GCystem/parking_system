<!DOCTYPE html>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<?php 
        require "db.php";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $option = $_POST['admin'];

            if($option == 'employee_ch'){
                $result = mysqli_query($link, 'CALL checkEmployee()');
                $count = mysqli_num_rows($result);
                $i = 1;
                echo '<h3> Violating Vehicles </h3><br>';
                while($row = mysqli_fetch_assoc($result)){
                    
                    echo '<h3>'.$i.'. </h3>';
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
            elseif($option == 'status_ch'){
                $chart = array();
                $result = mysqli_query($link, 'CALL checkStatus()');
                $count = mysqli_num_rows($result);
                $i = 1;
                echo '<h3> Violating Vehicles </h3><br>';
                while($row = mysqli_fetch_assoc($result)){
                    
                    echo '<h3>'.$i.'. </h3>';
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
