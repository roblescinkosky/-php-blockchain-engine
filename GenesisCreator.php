<?php
/**
 * 创世区块生成器
 * 功能：自定义创世区块
 */
class GenesisCreator {
    public static function make($data, $diff = 4) {
        $block = new Block(0, "0", time(), $data, 0);
        $block->nonce = ProofOfWork::mine($block);
        $block->hash = $block->calculateHash();
        return $block;
    }
}
?>
