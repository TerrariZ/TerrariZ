<?php
namespace TerrariZ;
// this is an internal temporary file till i find a home for the packets to go
interface Packets {
	
	public const ack = 0x0006;
	// ACK packets
	public const eot = 0x0004;
	// End of Transmission
	public const nack = 0x0015;
	// negative acknowledgment
	
	public function decode(string $str): bool {
		$decoded = base64_decode($str);
		return $decoded;
		
	}
	
	public function encode(string $str): bool {
		$encoded = base64_encode($str);
		return $encoded;
		
	}
	
	
}
?>