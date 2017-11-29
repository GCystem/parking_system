USE 'cmpe226_team_project';
DROP procedure IF EXISTS updateSpaceGarage;
DELIMITER $$
CREATE PROCEDURE updateSpaceGarage(
	IN statusIn varchar(1), 
    IN garageNum varchar(3)
)
BEGIN
    UPDATE Parking_Space
    SET status = statusIn
    WHERE garage_no = garageNum;

END$$

DELIMITER ;