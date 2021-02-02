<?php

namespace xPrim69x\MultiVersion;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\mcpe\protocol\LoginPacket;
use pocketmine\network\mcpe\protocol\ProtocolInfo;

class Main extends PluginBase implements Listener{

	public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onLogin(DataPacketReceiveEvent $event) {
        $pk = $event->getPacket();
        if($pk instanceof LoginPacket){
            if($pk->protocol !== ProtocolInfo::CURRENT_PROTOCOL) {
                $pk->protocol = ProtocolInfo::CURRENT_PROTOCOL;
            }
    	}
    }

}
