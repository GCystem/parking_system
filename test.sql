USE 'cmpe226_team_project';
DROP procedure IF EXISTS test;
DELIMITER $$
CREATE PROCEDURE test(
    out res varchar(7)
)
BEGIN
    select plate_no into res
    from Park
    where space_no = "S08" AND garage_no = "G01";
END$$

DELIMITER ;