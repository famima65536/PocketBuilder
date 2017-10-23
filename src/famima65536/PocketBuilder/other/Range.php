<?php

namespace famima65536\PocketBuilder\other;

use pocketmine\level\Position;

class Range {

  public $position = []; /** @var Position[] */

  public function add(Position $pos) : void {
    $this->position[] = $pos;
  }

  public function calculateRangeSize() : ?int {
    if(count($this->position) < 2) {
      return null;
    }

    $posList = $this->position;

    return abs(
       ($posList[0]->x - $posList[1]->x)
     * ($posList[0]->y - $posList[1]->y)
     * ($posList[0]->z - $posList[1]->z)
    );
  }

}
