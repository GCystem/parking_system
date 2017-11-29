USE 'cmpe226_team_project';
DROP procedure IF EXISTS checkStatus;
DELIMITER $$
CREATE PROCEDURE checkStatus()
BEGIN
    SELECT garage_current_time_state.garage_no, garage_current_time_state.space_no, garage_current_time_state.plate_no 
    FROM garage_current_time_state
    WHERE garage_current_time_state.status = 'F' AND garage_current_time_state.empty = 'F';

END$$

DELIMITER ;