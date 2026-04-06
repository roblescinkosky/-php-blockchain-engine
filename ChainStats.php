<?php
/**
 * 区块链统计
 * 功能：区块数量、出块速度、算力
 */
class ChainStats {
    private $ledger;

    public function __construct($ledger) {
        $this->ledger = $ledger;
    }

    public function blockCount() {
        return count($this->ledger->chain);
    }

    public function avgBlockTime() {
        if ($this->blockCount() <= 1) return 0;
        $first = $this->ledger->chain[0]->timestamp;
        $last = $this->ledger->lastBlock()->timestamp;
        return round(($last - $first) / ($this->blockCount() - 1), 2);
    }
}
?>
