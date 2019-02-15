<?php
namespace あいえうお;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerInteractEvent;

class タップID extends PluginBase implements Listener{

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }

    public function 触ったとき(PlayerInteractEvent $イベント) {
        $プレイヤー = $イベント->getPlayer();

        $ブロック = $イベント->getBlock();
        $ブロックのID = $ブロック->getId();
        $ブロックのメタ値 = $ブロック->getDamage();

        $プレイヤー->sendTip($ブロックのID.":".$ブロックのメタ値);
    }
}