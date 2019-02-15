<?php
namespace あいえうお;

class プレイヤー {
    public function __construct($プレイヤー) {
        $this->プレイヤー = $プレイヤー;
    }

    public function Tip欄にメッセージ送信($メッセージ) {
        return $this->プレイヤー->sendTip($メッセージ);
    }
}