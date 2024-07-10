<?php
namespace TerrariZ\Tile;

use TerrariZ\Tile\Tile;

class Dirt implements Tile {



public function hitPointDirt(Tile $tile) : bool {
return $tile->minimumHitPoint();

}

}

?>