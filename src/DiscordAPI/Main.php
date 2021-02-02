<?php

declare(strict_types=1);

namespace DiscordAPI;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
    public function onEnable() : void{
        $this->getLogger()->info("DiscordAPI Enabled!");
    }
}