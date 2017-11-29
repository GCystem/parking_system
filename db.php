<?php 

	/////////////////// MySQL Connection ////////////////////////
        $servername = "localhost";
        $username = "app";
        $sqlpassword = "app";
        $dbname = "cmpe226_team_project";
        // Create connection
        $link = new mysqli($servername, $username, $sqlpassword, $dbname);
                
        // Check connection
        if ($link->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        // echo "DB Connected successfully";


    /////////////////// Log Output     ////////////////////////

        $log_file_name = "../../"."log";
        date_default_timezone_set('America/Los_Angeles');

        function outLog($sql, $log_file_name){
            $log_content = "-- George Chen -- " . date("D M j G:i:s T Y") . "\n" . $sql . "\n\n";
            file_put_contents($log_file_name, $log_content, FILE_APPEND);
        }

?>