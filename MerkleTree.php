<?php
/**
 * 默克尔树
 * 功能：构建交易哈希树、生成默克尔根
 */
class MerkleTree {
    private $txHashes;
    private $root;

    public function __construct($txHashes) {
        $this->txHashes = $txHashes;
        $this->root = $this->buildTree();
    }

    private function buildTree() {
        $hashList = $this->txHashes;
        while (count($hashList) > 1) {
            $temp = [];
            for ($i = 0; $i < count($hashList); $i += 2) {
                $left = $hashList[$i];
                $right = isset($hashList[$i + 1]) ? $hashList[$i + 1] : $left;
                array_push($temp, SHA256Hash::make($left . $right));
            }
            $hashList = $temp;
        }
        return $hashList[0] ?? '';
    }

    public function getRoot() {
        return $this->root;
    }
}
?>
