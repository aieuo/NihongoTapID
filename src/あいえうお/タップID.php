<?php
namespace あいえうお;

use pocketmine\event\Listener as リスナー;
use pocketmine\plugin\PluginBase as プラグインベース;
use pocketmine\event\player\PlayerInteractEvent as プレイヤーがブロックを触ったときのイベント;

class タップID extends プラグインベース implements リスナー{

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }

    public function 触ったとき(プレイヤーがブロックを触ったときのイベント $イベント) {
        $プレイヤー = $イベント->getPlayer();

        $ブロック = $イベント->getBlock();
        $ブロックのID = $ブロック->getId();
        $ブロックのメタ値 = $ブロック->getDamage();

        $プレイヤー->sendTip($ブロックのID.":".$ブロックのメタ値);
    }
}