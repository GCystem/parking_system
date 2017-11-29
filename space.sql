USE 'cmpe226_team_project';
DROP procedure IF EXISTS updateSpace;
DELIMITER $$
CREATE PROCEDURE updateSpace(
	IN statusIn varchar(1), 
    IN garageNum varchar(3),
    IN spaceNum varchar(3)
)
BEGIN
    UPDATE Parking_Space
    SET status = statusIn
    WHERE garage_no = garageNum AND space_no = spaceNum;

END$$

DELIMITER ;