<?php
namespace zBearchenPlayz\coinsystem;
use zBearchenPlayz\Provider\MySQLDataProvider;
use zBearchenPlayz\API;
use zBearchenPlayz\Listeners\PlayerJoinListener;

use pocketmine\plugins\PluginBase;
use pocketmine\lang\BaseLang;


class CoinSystem extends PluginBase {

    const PREFIX = "§7[§eCoinSystem§7] ";

    public $provider;
    public static $instance;

    public function onEnable() {

        $this->getLogger()->i