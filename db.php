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

?>