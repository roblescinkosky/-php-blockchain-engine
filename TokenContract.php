<?php
/**
 * 通证发行合约
 * 功能：自定义代币、转账、燃烧
 */
class TokenContract {
    private $name;
    private $supply;
    private $balances = [];

    public function __construct($name, $total) {
        $this->name = $name;
        $this->supply = $total;
        $this->balances['root'] = $total;
    }

    public function transfer($from, $to, $amount) {
        if (($this->balances[$from] ?? 0) >= $amount) {
            $this->balances[$from] -= $amount;
            $this->balances[$to] = ($this->balances[$to] ?? 0) + $amount;
            return true;
        }
        return false;
    }

    public function burn($addr, $amount) {
        if (($this->balances[$addr] ?? 0) >= $amount) 
            $this->balances[$addr] -= $amount;
    }
}
?>
