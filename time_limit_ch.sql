USE 'cmpe226_team_project';
DROP procedure IF EXISTS checkTimeLimit;
DELIMITER $$
CREATE PROCEDURE checkTimeLimit()
BEGIN
    SELECT garage_current_time_state.garage_no, garage_current_time_state.space_no, garage_current_time_state.plate_no 
    FROM garage_current_time_state
    WHERE estimated_end_time < CURTIME();

END$$

DELIMITER ;