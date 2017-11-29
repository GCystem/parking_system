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

            
            <form name="time_limit" action="input_handle.php" method="post">
            <h3>1. Update Time Limit</h3>
            New Time Limit: <br><input type="text" name="time_limit_in" value="Enter New Time Limit"><br/><br/>
            Garage Number: <br><input type="text" name="time_limit_garage_in" value="G01"><br/><br/>
            Parking Space Number: <br><input type="text" name="time_limit_space_in" value="S01"><br/><br/>
            <input name="time_limit_post" type="submit" value="Submit"><br/><br/>
            </form>

            <form name="space" action="input_handle.php" method="post">
            <h3>2. Update Space Status</h3>
            New Space Status: <br><input type="text" name="space_in" value="Select New Space Status"><br/><br/>
            Garage Number: <br><input type="text" name="space_garage_in" value="G01"><br/><br/>
            Parking Space Number: <br><input type="text" name="space_space_in" value="S01"><br/><br/>
            <input name="space_post" type="submit" value="Submit"><br/><br/>
            </form>

            <form name="employee" action="input_handle.php" method="post">
            <h3>3. Update Employee Only</h3>
            New Employee Only: <br><input type="text" name="employee_in" value="Select New Employee Status"><br/><br/>
            Garage Number: <br><input type="text" name="employee_garage_in" value="G01"><br/><br/>
            Parking Space Number: <br><input type="text" name="employee_space_in" value="S01"><br/><br/>
            <input name="employee_post" type="submit" value="Submit"><br/><br/>
            </form>

            <form name="space_area" action="input_handle.php" method="post">
            <h3>4. Update Space Status By Area</h3>
            New Space Status: <br><input type="text" name="space_area_in" value="Select New Space Status"><br/><br/>
            Garage Number: <br><input type="text" name="space_area_garage_in" value="G01"><br/><br/>
            Parking Area Number: <br><input type="text" name="space_area_area_in" value="S01"><br/><br/>
            <input name="space_area_post" type="submit" value="Submit"><br/><br/>
            </form>

            <form name="space_garage" action="input_handle.php" method="post">
            <h3>5. Update Space Status By Garage</h3>
            New Space Status: <br><input type="text" name="space_garage_in" value="Select New Space Status"><br/><br/>
            Garage Number: <br><input type="text" name="space_garage_garage_in" value="G01"><br/><br/>
            <input name="space_garage_post" type="submit" value="Submit"><br/><br/>
            </form>

            <form name="remaining_space" action="input_handle.php" method="post">
            <h3>6. Update Remaining Time By Space Number</h3>
            New Remaining Time: <br><input type="text" name="remaining_space_in" value="23:59:59"><br/><br/>
            Garage Number: <br><input type="text" name="remaining_space_garage_in" value="G01"><br/><br/>
            Parking Space Number: <br><input type="text" name="remaining_space_space_in" value="S01"><br/><br/>
            <input name="remaining_space_post" type="submit" value="Submit"><br/><br/>
            </form>
            
            <form name="remaining_plate" action="input_handle.php" method="post">
            <h3>7. Update Remaining Time By Plate Number</h3>
            New Remaining Time: <br><input type="text" name="remaining_plate_in" value="23:59:59"><br/><br/>
            Garage Number: <br><input type="text" name="remaining_plate_garage_in" value="G01"><br/><br/>
            Plate Number: <br><input type="text" name="remaining_plate_plate_in" value="ABC-111"><br/><br/>
            <input name="remaining_plate_post" type="submit" value="Submit"><br/><br/>
            </form>

            <form name="options" action="park_handle.php" method="post">
            <h3> Parking Space Monitoring </h3> 
             <input type="radio" name="admin" value="employee_ch"> Check Employee Parking<br> 
             <input type="radio" name="admin" value="time_limit_ch"> Check Time Limit <br> 
             <input type="radio" name="admin" value="compact_ch"> Check Compact Parking <br> 
             <input type="radio" name="admin" value="disability_ch"> Check Disability Parking <br> 
             <input type="radio" name="admin" value="status_ch"> Check Stop-Using Parking <br> 
             <br><input type="submit" value="Submit"><br>
            </form>
            
            <br> <br>
    </body>

</html>
