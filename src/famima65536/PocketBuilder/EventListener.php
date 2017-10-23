<?php

namespace famima65536\PocketBuilder;

use pocketmine\event\Listener;

class EventListener implements Listener {

  private $main; /** @var PocketBuilder */

  public static function register(PocketBuilder $main) {
    new EventListener($main);
  }

  private function __construct(PocketBuilder $main) {
    $this->main = $main;
  }
}
