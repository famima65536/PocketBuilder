<?php

namespace famima65536\PocketBuilder\utils;

use pocketmine\Player;
use famima65536\PocketBuilder\other\Range;

class RangeManager {

  public static $rangeList = []; /** @var Range[string name] */

  public static function setRange(Player $player, ?Range $range = null) {
    $name = strtolower($player->getName());
    self::$rangeList[$name] = $range;
  }

  public static function getRange(Player $player) : ?Range {
    $name = strtolower($player->getName());
    return self::$rangeList[$name] ?? null;
  }

}
