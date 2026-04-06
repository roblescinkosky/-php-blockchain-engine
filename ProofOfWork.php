<?php
/**
 * 工作量证明 PoW
 * 功能：挖矿、计算符合难度的随机数
 */
class ProofOfWork {
    const DIFFICULTY = 4;

    public static function mine(Block $block) {
        $nonce = 0;
        $target = str_repeat("0", self::DIFFICULTY);
        while (true) {
            $block->nonce = $nonce;
            $hash = $block->calculateHash();
            if (substr($hash, 0, self::DIFFICULTY) === $target) {
                return $nonce;
            }
            $nonce++;
        }
    }
}
?>
