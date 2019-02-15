<?php
namespace あいえうお;

class ブロック {
    public function __construct($ブロック) {
        $this->ブロック = $ブロック;
    }

    public function IDを取得() {
        return $this->ブロック->getId();
    }

    public function メタ値を取得() {
        return $this->ブロック->getDamage();
    }
}