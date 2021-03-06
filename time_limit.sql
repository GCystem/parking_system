USE 'cmpe226_team_project';
DROP procedure IF EXISTS updateTimeLimit;
DELIMITER $$
CREATE PROCEDURE updateTimeLimit(
	IN timeLimit int(11), 
    IN garageNum varchar(3),
    IN spaceNum varchar(3)
)
BEGIN
    UPDATE Parking_Space
    SET time_limit = timeLimit
    WHERE garage_no = garageNum AND space_no = spaceNum;

END$$

DELIMITER ;