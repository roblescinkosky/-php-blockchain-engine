<?php
/**
 * 节点监控
 * 功能：状态监控、区块高度、交易数统计
 */
class NodeMonitor {
    private $id;
    private $online = true;
    private $height = 0;
    private $txCount = 0;

    public function __construct($id) {
        $this->id = $id;
    }

    public function update($height, $tx) {
        $this->height = $height;
        $this->txCount = $tx;
    }

    public function status() {
        return "Node: {$this->id} | Online: {$this->online} | Height: {$this->height}";
    }
}
?>
