USE `cmpe226_team_project`;
DROP procedure IF EXISTS `procedure`;

DELIMITER $$
USE `cmpe226_team_project`$$
CREATE PROCEDURE procedure(
    out res)
BEGIN
    select plate_no into res
    where space_no = 'S08' AND garage_no = 'G01';
END$$

DELIMITER ;