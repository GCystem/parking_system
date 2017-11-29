USE 'cmpe226_team_project';
DROP procedure IF EXISTS checkEmployee;
DELIMITER $$
CREATE PROCEDURE checkEmployee()
BEGIN
    SELECT garage_current_time_state.garage_no, garage_current_time_state.space_no, garage_current_time_state.plate_no 
    FROM garage_current_time_state JOIN vehicle ON (
        garage_current_time_state.plate_no = vehicle.plate_no AND garage_current_time_state.employee_only = 'T' AND (vehicle.longterm_permit_type != 'E' OR (vehicle.longterm_permit_type = 'E' AND vehicle.expiry_date < CURDATE()))
    );

END$$

DELIMITER ;