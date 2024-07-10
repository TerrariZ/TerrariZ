<?php

// INTERNAL 

namespace TerrariZ\PacketHandler;

abstract class PacketHandler {

        public function decode(string $str): bool {
                $decoded = base64_decode($str);
                return $decoded;

        }

        public function encode(string $str): bool {
                $encoded = base64_encode($str);
                return $encoded;

        }


}

}

?>