<?php

namespace TerrariZ;
use TerrariZ\event\Server\ServerStartEvent;
use TerrariZ\event\Server\ServerStopEvent;
use TerrariZ\event\EventManager;
use TerrariZ\player\Player;
use TerrariZ\utils\Logger;

final class PlayerJoinEvent {
public const $player = Player;
public const $logger = Logger;


public function isServerWhitelisted() : bool {

return $whitelist;

}

public function isPlayerOnWhitelist(): bool {
if ($isServerWhitelisted() === true){
//TODO:: CHECK IF PLAYER IS ON WHITELIST;
return $isPlayerOnWhitelist;

}

public function isServerOn(ServerStartEvent $start , ServerStopEvent $stop, EventManager $event) : bool {
	$stopped = $stop->isStopped();
	$started = $start->isStarted();
	
	if ($stopped === false and $started === true){
		
		return true;
		
		
	}
	
		if ($stopped === true and $started === true){
		$logger(error,"Server is Stated on and off?");
		throw new Exception("Server is Stated off and On?");
		
	}
	// INTERNAL WAY TO KEEP SERVER ON BUT DISPLAY ONLINE?
		if ($stopped === true and $started === false){
		
		return false;
		$event->cancelJoin($player->getName() ,"Server is Offline");
		
	}
		if ($stopped === false and $started === false){
		$logger(error,"Server is Stated off but stopped is false?");
		throw new Exception("Server is Stated off but stopped is false?");
		
		
	}
	
	
	
}

}
}

?>
