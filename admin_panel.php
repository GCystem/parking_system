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
            <!--<form name="options" action="input_handle.php" method="post"> 
             <input type="radio" name="admin" value="time_limit" checked> Update time limit <br> 
             <input type="radio" name="admin" value="space"> Update space status <br> 
             <input type="radio" name="admin" value="employee"> Update employee only <br> 
             <input type="radio" name="admin" value="space_area"> Update space status by area <br> 
             <input type="radio" name="admin" value="space_garage"> Update space status by garage<br> 
             <input type="radio" name="admin" value="remaining_space"> Update remaining time by space number<br>
             <input type="radio" name="admin" value="remaining_plate"> Update remaining time by plate number<br> 
             <br><input id="option_post" type="submit" value="Submit"><br>
            </form>
            
            <br> <br>-->
            
            <form name="time_limit">
            <h3>Update Time Limit</h3>
            New Time Limit: <br><input type="text" name="time_limit_in" value="Enter New Time Limit"><br/><br/>
            Garage Number: <br><input type="text" name="time_limit_garage_in" value="G01"><br/><br/>
            Parking Space Number: <br><input type="text" name="time_limit_space_in" value="S01"><br/><br/>
            <input id="time_limit_post" type="submit" value="Submit"><br/><br/>
            </form>

            <form name="space">
            <h3>Update Space Status</h3>
            New Space Status: <br><input type="text" name="space_in" value="Select New Space Status"><br/><br/>
            Garage Number: <br><input type="text" name="space_garage_in" value="G01"><br/><br/>
            Parking Space Number: <br><input type="text" name="space_space_in" value="S01"><br/><br/>
            <input id="space_post" type="submit" value="Submit"><br/><br/>
            </form>

            <form name="employee">
            <h3>Update Employee Only</h3>
            New Employee Only: <br><input type="text" name="employee_in" value="Select New Employee Status"><br/><br/>
            Garage Number: <br><input type="text" name="employee_garage_in" value="G01"><br/><br/>
            Parking Space Number: <br><input type="text" name="employee_space_in" value="S01"><br/><br/>
            <input id="employee_post" type="submit" value="Submit"><br/><br/>
            </form>

            <form name="space_area">
            <h3>Update Space Status By Area</h3>
            New Space Status: <br><input type="text" name="space_area_in" value="Select New Space Status"><br/><br/>
            Garage Number: <br><input type="text" name="space_area_garage_in" value="G01"><br/><br/>
            Parking Area Number: <br><input type="text" name="space_area_area_in" value="S01"><br/><br/>
            <input id="space_area_post" type="submit" value="Submit"><br/><br/>
            </form>

            <form name="space_garage">
            <h3>Update Space Status By Garage</h3>
            New Space Status: <br><input type="text" name="space_garage_in" value="Select New Space Status"><br/><br/>
            Garage Number: <br><input type="text" name="space_garage_garage_in" value="G01"><br/><br/>
            <input id="space_garage_post" type="submit" value="Submit"><br/><br/>
            </form>

            <form name="remaining_space">
            <h3>Update Remaining Time By Space Number</h3>
            New Remaining Time: <br><input type="text" name="remaining_space_in" value="Enter New Remaining Time"><br/><br/>
            Garage Number: <br><input type="text" name="remaining_space_garage_in" value="G01"><br/><br/>
            Parking Space Number: <br><input type="text" name="remaining_space_space_in" value="S01"><br/><br/>
            <input id="remaining_space_post" type="submit" value="Submit"><br/><br/>
            </form>
            
            <form name="remaining_plate">
            <h3>Update Remaining Time By Plate Number</h3>
            New Remaining Time: <br><input type="text" name="remaining_plate_in" value="Enter New Remaining Time"><br/><br/>
            Garage Number: <br><input type="text" name="remaining_plate_garage_in" value="G01"><br/><br/>
            Plate Number: <br><input type="text" name="remaining_plate_space_in" value="ABC-111"><br/><br/>
            <input id="remaining_plate_post" type="submit" value="Submit"><br/><br/>
            </form>


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
