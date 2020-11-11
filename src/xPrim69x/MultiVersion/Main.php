<?php

namespace xPrim69x\MultiVersion;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\event\player\PlayerKickEvent;
use pocketmine\network\mcpe\protocol\ProtocolInfo;

class Main extends PluginBase implements Listener{

	public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onKick(PlayerKickEvent $event){
	if($event->getReason() === "Could not connect: Outdated Server!")
		$event->setCancelled();
	}

}
