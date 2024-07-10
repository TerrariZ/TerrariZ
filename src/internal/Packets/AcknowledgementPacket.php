<?php


namespace TerrariZ\AcknowledgementPacket;
use TerrariZ\internal\packets\PacketHandler;

abstract class AcknowledgementPacket {


public const $id = "0x0006"

public function acknowledge(PacketHander $handler) : bool {
$decodeid = $handler->decode($id);
$encodeid = $handler->encode($id);

return $decodeid + $encodeid;
}
}


?>