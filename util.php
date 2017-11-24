<?
function writeAppLog($msg = "no msg"){
	date_default_timezone_set('America/Los_Angeles');
	$date_str = date("H:i:s");
	$msg = "[".$date_str."]: ".$msg;
	//Save string to log, use FILE_APPEND to append.
	file_put_contents('./logs/log_'.date("j.n.Y").'.txt', $msg, FILE_APPEND);
}

?>