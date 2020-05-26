<?php

declare(strict_types=1);

namespace JGYTVevo\FeedAndHeal;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;
use pocketmine\utils\TextFormat as C;

class Main extends PluginBase{

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{

        switch($cmd->getName()){
            case "feed": 
if($sender->hasPermission("feed.jg")){
$sender->setFood(20);
$sender->setSaturation(20);    
$sender->sendMessage("You have been fed!");
} else {
    $sender->sendMessage(C:: RED. "Error: No permission!");
}
break;
case "heal": 
if($sender->hasPermission("heal.jg")){
$sender->setHealth(20);
$sender->sendMessage(C:: GREEN. "You have been healed!");
} else {
    $sender->sendMessage(C:: RED. "Error: No permission");
}
break;
        }
return true;
    }
}

