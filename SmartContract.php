<?php
/**
 * 基础智能合约
 * 功能：条件执行、转账、余额管理
 */
class SmartContract {
    private $id;
    private $balance = 0;
    private $owner;

    public function __construct($owner) {
        $this->id = uniqid('contract_');
        $this->owner = $owner;
    }

    public function deposit($amount) {
        if ($amount > 0) $this->balance += $amount;
    }

    public function transfer($to, $amount, $condition) {
        if ($this->balance >= $amount && $amount <= $condition) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    public function getId() {
        return $this->id;
    }
}
?>
