<!DOCTYPE html>
      
<?php 
        require "db.php";
        // $call = mysqli_prepare($link, 'CALL test(@res)');
        // mysqli_stmt_bind_param($call, 'iii', $procInput1, $procInput2, $procInput3);
        // mysqli_stmt_execute($call);
        // $select = mysqli_query($link, 'SELECT @res');
        // $result = mysqli_fetch_assoc($select);

        // echo $result['@res'];
        // echo '<br>------TEST-------------<br>';
       
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
            echo 'option is '.$option;
            // outLog($call, $log_file_name);
        }
        else{
            // echo '<script>window.location.href = "admin_panel.php";</script>';
            echo 'not post';
        }


?>
