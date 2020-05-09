
<?php 
namespace zBearchenPlayz;
use zBearchenPlayz\coinsystem;

use pocketmine\command\Commands;
use pocketmine\command\CommandSender;

class Commands implements CommandExecutor{
    
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool{
        if($cmd->getName() == "coins"){
            switch($args[0]){