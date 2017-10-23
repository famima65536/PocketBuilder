<?php

namespace famima65536\PocketBuilder\utils;


use pocketmine\Player;

use famima65536\PocketBuilder\other\Range;

class Editor {

  public static function showRange(Player $player, ?Range $range = null) : bool {
    $range = $range ?? RangeManager::getRange($player) ?? null;

    if($range === null) {
      return false;
    }
    
    // TODO run ShowRangetask.

    return true;
  }

}
