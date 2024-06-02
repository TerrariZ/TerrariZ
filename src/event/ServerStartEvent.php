<?php

namespace TerrariZ;

use TerrariZ\TerrariZ;
use TerrariZ\event\EventManager;

final class ServerStartEvent implements EventManager {

public function onStart(EventManager $event) bool {
$event->ServerStarted();
  return onStart();
}

public function onStop(EventManager $event) bool {
  $event->stopServer();
return onStop();
}

?>
