USE 'cmpe226_team_project';
DROP procedure IF EXISTS updateSpaceArea;
DELIMITER $$
CREATE PROCEDURE updateSpaceArea(
	IN statusIn varchar(1), 
    IN garageNum varchar(3),
    IN areaNum varchar(1)
)
BEGIN
    UPDATE Parking_Space
    SET status = statusIn
    WHERE garage_no = garageNum AND area = areaNum;

END$$

DELIMITER ;