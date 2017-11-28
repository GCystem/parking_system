USE `cmpe226_team_project`;
DROP procedure IF EXISTS `getLastDateByDay`;

DELIMITER $$
USE `cmpe226_team_project`$$
CREATE PROCEDURE `getLastDateByDay`(
	in targetDay char(2), 
    out result date,
    out success char(1),
    out errMsg varchar(255))
BEGIN
	declare targetDayCode int;
    declare todayCode int;
    declare diff int;
    
    set targetDayCode = dayToCode(targetDay);
    set todayCode = weekday(now());
    
    if targetDayCode = todayCode then
		set result = now() - interval 7 day;
    elseif targetDayCode < todayCode then
		set diff = todayCode - targetDayCode;
        set result = now() - interval diff day;
    else
		set diff = 7 - (targetDayCode - todayCode);
		set result = now() - interval diff day;
    end if;
    
    set success = 'Y';
    set errMsg = '';
END$$

DELIMITER ;