<!DOCTYPE html>

<?php 
    require "db.php";
?>


<html>
    <head>

        <title>
            Team 1 Project
        </title>
    </head>

    <body>
        <center>
            <h1 id="hello"> Admin Panel </h1>
        </center>
            <form name="options" action="input_handle.php" method="post"> 
             <input type="radio" name="admin" value="time_limit" checked> Update time limit <br> 
             <input type="radio" name="admin" value="space"> Update space status <br> 
             <input type="radio" name="admin" value="employee"> Update employee only <br> 
             <input type="radio" name="admin" value="space_area"> Update space status by area <br> 
             <input type="radio" name="admin" value="space_garage"> Update space status by garage<br> 
             <input type="radio" name="admin" value="remaining_space"> Update remaining time by space number<br>
             <input type="radio" name="admin" value="remaining_plate"> Update remaining time by plate number<br> 
             <br><input id="option_post" type="submit" value="Submit"><br>

            </form>
    <!--<script>
     function handleClick() {
         document.getElementById("hello").innerHTML = "Hello JavaScript!";
        return "THRUUUUUUUUUUUU"; // prevent further bubbling of event
      }
    </script>-->
    </body>

<!--

17. Administrators can modify the parking time limit of any parking space.
Find the parking space by garage number and parking space number, change time limit to input

UPDATE Parking_Space
SET time_limit = input_t
WHERE garage_no = input_g AND space_no = input_s

18. Administrators can set any parking space as stop-using status.
Find the parking space by garage number and parking space number, change the status to input

UPDATE Parking_Space
SET status = input_st
WHERE garage_no = input_g AND space_no = input_s

19. Administrators can set any parking space as common use or employee only.
Find the parking space by garage number and parking space number, change the UserType to input


UPDATE Parking_Space
SET employee_only = input_u
WHERE garage_no = input_g AND space_no = input_s

20. Administrators can set all the parking spaces as stop-using in specified area.
Find all the parking space in Area by garage number and area, change the Status to input


UPDATE Parking_Space
SET status= input_st
WHERE garage_no = input_g AND area = input_a

21. Administrators can set all the parking spaces as stop-using in specified garage.
Find all the parking space in Garage by garage number, change the status to input

UPDATE Parking_Space
SET status = input_st
WHERE garage_no = input_g

22. Administrators can modify the remaining parking time of any parking space given space and garage number.
Find a parking space by garage number and parking space number, change the estimated_end_time to input

UPDATE Park
SET estimated_end_time = input_eet
WHERE garage_no = input_g AND space_no = input_s
	AND start_time IN (SELECT start_time FROM Park 
ORDER BY start_time DESC LIMIT 1)



23. Administrators can modify the remaining parking time of any parking space given plate numbers and garage number. 
Find a parking space parked by a certain car by its plate number, change the estimated_end_time to input

UPDATE Park
SET estimated_end_time = input_eet
WHERE garage_no = input_g AND plate_no = input_p
	AND start_time IN (SELECT start_time FROM Park 
ORDER BY start_time DESC LIMIT 1)
-->





</html>
