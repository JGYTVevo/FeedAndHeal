<?php

namespace Cmd;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{

    public function onEnable(){

        $this->getServer()->getLogger("FHJG Enabled");
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{

        switch($cmd->getName()){
            case "feed": 
if($sender->hasPermission("feed.jg")){
$sender->setFood(20);
$sender->setSaturation(20);    
$sender->sendMessage("[CONSOLE] Has Feed Your Hunger!");
} else {
    $sender->sendMessage("[!] No permission please message staff if needed");
}
break;
case "heal": 
if($sender->hasPermission("heal.jg")){
$sender->setHealth(20);
$sender->sendMessage("[CONSOLE] Has Healed You!");
} else {
    $sender->sendMessage("[!] No permission please message staff if needed");
}
break;
        }
return true;
    }
}

