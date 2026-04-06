<?php
/**
 * 消息广播
 * 功能：P2P网络广播交易/区块
 */
class MessageBroadcast {
    private $node;

    public function __construct($node) {
        $this->node = $node;
    }

    public function broadcastTx(Transaction $tx) {
        echo "Node {$this->node->getId()} broadcast tx: {$tx->txId}\n";
    }

    public function broadcastSync() {
        echo "Node {$this->node->getId()} request sync\n";
    }
}
?>
