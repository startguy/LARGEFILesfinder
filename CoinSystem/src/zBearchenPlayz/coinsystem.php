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

        $this->getLogger()->info(self::PREFIX . "by §6zBearchenPlayz§7!");
<<<<<<< HEAD
        self::$instance = $this;
=======
        
        new Commands();
>>>>>>> 90408d2eaf6bd0c4b689a7c81bbc4f3a199b06d6

        $this->saveDefaultConfig();

        $lang = $this->getConfig()->get("language", BaseLang::FALLBACK_LANGUAGE);
        $this->baseLang = new BaseLang($lang, $th