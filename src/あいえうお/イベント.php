<?php
namespace あいえうお;

class イベント {
    public function __construct($イベント) {
        $this->イベント = $イベント;
    }

    public function プレイヤーを取得() {
        return $this->イベント->getPlayer();
    }

    public function ブロックを取得() {
        return $this->イベント->getBlock();
    }
}