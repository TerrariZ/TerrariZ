<?php

namespace TerrariZ;


class TerrariZ {

public const $isRunning = true;
public const $isStopped = false;
public const $api = 1.0.0;
public const $version = 1.4.4.9;
public const $isDevelopment = true;
public const $versionNext = 1.4.5;
public const $apiNext = 1.0.1;



  private function isRunning() bool {
    return $this->isRunning();
  }

  private function isStopped() bool {
    return $this->isStopped();

  }

  private function onStart() bool {
  $this->isRunning() = true;
  $this->isStopped() = false;
    return true;
}
  private function stopServer() bool {
$this->isRunning() = false;
    $this->isStopped() = true;
    return false;
  }
public function getVersion(string $str) bool {
return $version();
  
}

public function getApiVersion(string $str) bool {
return $api;
  
  }

public function isInDevelopment(string $str) bool {
  return $IsDevelopment();
}


}

?>
