<?php
/**
 * 区块矿工
 * 功能：自动挖矿、打包交易、广播区块
 */
class BlockMiner {
    private $node;
    private $pool;
    private $ledger;

    public function __construct($node, $pool, $ledger) {
        $this->node = $node;
        $this->pool = $pool;
        $this->ledger = $ledger;
    }

    public function mine() {
        if (empty($this->pool->getPending())) return;
        $last = $this->ledger->lastBlock();
        $nonce = ProofOfWork::mine($last);
        $block = new Block($last->index + 1, $last->hash, time(), "MINED BLOCK", $nonce);
        $this->ledger->addBlock($block);
        $this->node->broadcast($block);
        $this->pool->clear();
    }
}
?>
