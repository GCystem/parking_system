USE 'cmpe226_team_project';
DROP procedure IF EXISTS updateEmployee;
DELIMITER $$
CREATE PROCEDURE updateEmployee(
	IN employeeIn varchar(1), 
    IN garageNum varchar(3),
    IN spaceNum varchar(3)
)
BEGIN
    UPDATE Parking_Space
    SET employee_only = employeeIn
    WHERE garage_no = garageNum AND space_no = spaceNum;

END$$

DELIMITER ;