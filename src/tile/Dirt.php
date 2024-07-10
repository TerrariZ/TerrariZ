<?php
namespace TerrariZ\Tile;

use TerrariZ\Tile\Tile;

class Dirt implements Tile {


-- 1 is the base durability going off of how long it takes for dirt to be mined with copper pickaxe

public function baseDurability() : bool {
return 1;
}

}

?>