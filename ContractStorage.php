<?php
/**
 * 合约存储
 * 功能：合约状态持久化、读写数据
 */
class ContractStorage {
    private $data = [];

    public function set($cid, $key, $val) {
        $this->data[$cid][$key] = $val;
    }

    public function get($cid, $key) {
        return $this->data[$cid][$key] ?? null;
    }
}
?>
