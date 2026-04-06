<?php
/**
 * 区块链钱包
 * 功能：生成地址、创建交易、余额管理
 */
class Wallet {
    private $address;
    private $sign;
    private $balance = 0;

    public function __construct() {
        $this->sign = new DigitalSignature();
        $this->address = SHA256Hash::make($this->sign->getPublicKey());
    }

    public function createTx($receiver, $amount) {
        if ($this->balance < $amount) throw new Exception("Insufficient balance");
        $tx = new Transaction($this->address, $receiver, $amount);
        $this->balance -= $amount;
        return $tx;
    }

    public function receive(Transaction $tx) {
        if ($tx->receiver === $this->address) $this->balance += $tx->amount;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getBalance() {
        return $this->balance;
    }
}
?>
