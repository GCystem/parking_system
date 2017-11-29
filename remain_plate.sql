USE 'cmpe226_team_project';
DROP procedure IF EXISTS updateRemainPlate;
DELIMITER $$
CREATE PROCEDURE updateRemainPlate(
	IN endTime time, 
    IN garageNum varchar(3),
    IN plateNum varchar(8)
)
BEGIN
    
    declare s_time time;

    SELECT start_time INTO s_time
    FROM Park
    WHERE garage_no = garageNum AND plate_no = plateNum 
    ORDER BY start_time DESC LIMIT 1;
    
    UPDATE Park
    SET estimated_end_time = endTime
    WHERE garage_no = garageNum AND plate_no = plateNum
    	AND start_time = s_time;

END$$

DELIMITER ;