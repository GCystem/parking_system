USE 'cmpe226_team_project';
DROP procedure IF EXISTS updateRemainSpace;
DELIMITER $$
CREATE PROCEDURE updateRemainSpace(
	IN endTime time, 
    IN garageNum varchar(3),
    IN spaceNum varchar(3)
)
BEGIN
    UPDATE Park
    SET estimated_end_time = endTime
    WHERE garage_no = garageNum AND space_no = spaceNum
    	AND start_time IN (SELECT start_time FROM Park 
                        ORDER BY start_time DESC LIMIT 1);

END$$

DELIMITER ;