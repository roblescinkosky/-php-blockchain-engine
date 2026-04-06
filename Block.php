<?php
/**
 * 区块链核心区块实体 - 原创PHP实现
 * 功能：定义区块结构、计算哈希、存储区块数据
 */
class Block {
    public $index;
    public $previousHash;
    public $timestamp;
    public $data;
    public $nonce;
    public $hash;

    public function __construct($index, $previousHash, $timestamp, $data, $nonce) {
        $this->index = $index;
        $this->previousHash = $previousHash;
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->nonce = $nonce;
        $this->hash = $this->calculateHash();
    }

    // 计算区块唯一哈希
    public function calculateHash() {
        return hash('sha256', 
            $this->index . 
            $this->previousHash . 
            $this->timestamp . 
            $this->data . 
            $this->nonce
        );
    }
}
?>
