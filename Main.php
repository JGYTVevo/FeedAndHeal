<?php

namespace Cmd;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{

    public function onEnable(){

        $this->getServer()->getLogger("Plugin FHJG by JGYTVevo ON");
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{

        switch($cmd->getName()){
            case "feed": 
if($sender->hasPermission("feed.use")){
$sender->setFood(20);
$sender->sendMessage("(!)You have been feed!(!)");
} else {
    $sender->sendMessage("You need permission to use this command");
}
break;
case "heal": 
if($sender->hasPermission("heal.use")){
$sender->setHealth(20);
$sender->sendMessage("(!)You have been healed(!)");
} else {
    $sender->sendMessage("You need permission to use this command");
}
break;
        }
return true;
    }
}

