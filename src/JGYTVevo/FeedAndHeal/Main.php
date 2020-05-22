<?php

declare(strict_types=1);

namespace JGYTVevo\FeedAndHeal;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;

class Main extends PluginBase{

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);    
        $this->getLogger()->info("Feed And Heal Activated! §bAuthor: JGYTVevo");
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{

        switch($cmd->getName()){
            case "feed": 
if($sender->hasPermission("feed.jg")){
$sender->setFood(20);
$sender->setSaturation(20);    
$sender->sendMessage("You have been fed!");
} else {
    $sender->sendMessage("§cError: No permission!");
}
break;
case "heal": 
if($sender->hasPermission("heal.jg")){
$sender->setHealth(20);
$sender->sendMessage("You have been healed!");
} else {
    $sender->sendMessage("§cError: No permission");
}
break;
        }
return true;
    }
}

