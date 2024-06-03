<?php
namespace TerrariZ;

final class Logger {
	/* LOG_EMERG	system is unusable
LOG_ALERT	action must be taken immediately
LOG_CRIT	critical conditions
LOG_ERR	error conditions
LOG_WARNING	warning conditions
LOG_NOTICE	normal, but significant, condition
LOG_INFO	informational message
LOG_DEBUG	debug-level message
*/

//call the function by going " $getLogger(info, "Text"); " 
	public const $priorities = ["emergency" => LOG_EMERG , "alert" => LOG_ALERT , "critical" => LOG_CRIT , "error" => LOG_ERR , "warning" => LOG_WARNING , "info" => LOG_INFO , "notice" => LOG_NOTICE , "debug"=> LOG_DEBUG];
	public const $timezone = date_default_timezone_get();
	public const $date = date('m/d/Y h:i:s a', time());
	public function getLogger(string $str): bool {
		$msg = $date + string $message;
		return syslog(int $priorities, $msg): true;
		
	}
}
?>