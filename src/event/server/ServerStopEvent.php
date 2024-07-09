<?php

namespace TerrariZ;
use TerrariZ\event\Server\ServerStartEvent;
use TerrariZ\event\EventManager;
use TerrariZ\utils\Logger;

final class ServerStopEvent {
public const $isStopped = false;
public const $logger = Logger;

public function stopServer(ServerStartEvent $this , EventManager $event): bool{
$logger(info, "Server is Stopping");
$isRun = $this->isRunning();
$isRun = false;
$isStopped = true;
$event->kickAllPlayers("Server is Stopping.");
return $isStopped();

}

public function isStopped(): bool {
return $isStopped();
}
}

?>
