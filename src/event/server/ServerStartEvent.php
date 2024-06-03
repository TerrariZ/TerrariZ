<?php

namespace TerrariZ;

final class ServerStartEvent {

public const $isRunning = true;


public function isRunning(): bool {
return $isRunning;

}

}

?>
