
<?php
namespace zBearchenPlayz\Listener;
use zBearchenPlayz\coinsystem;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\event\player\PlayerLoginEvent;

class PlayerJoinListener implements Listener{
    
    public function onJoin(PlayerJoinEvent){