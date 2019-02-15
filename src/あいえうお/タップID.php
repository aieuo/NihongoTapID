<?php
namespace あいえうお;

use pocketmine\event\Listener as リスナー;
use pocketmine\plugin\PluginBase as プラグインベース;
use pocketmine\event\player\PlayerInteractEvent as プレイヤーがブロックを触ったときのイベント;

class タップID extends プラグインベース implements リスナー {

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }

    public function 触ったとき(プレイヤーがブロックを触ったときのイベント $イベント) {
        $イベント = new イベント($イベント);

        $プレイヤー = new プレイヤー($イベント->プレイヤーを取得());

        $ブロック = new ブロック($イベント->ブロックを取得());
        $ブロックのID = $ブロック->IDを取得();
        $ブロックのメタ値 = $ブロック->メタ値を取得();

        $プレイヤー->Tip欄にメッセージ送信($ブロックのID.":".$ブロックのメタ値);
    }
}