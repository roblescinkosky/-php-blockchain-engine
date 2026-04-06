<?php
/**
 * 节点发现
 * 功能：P2P网络节点扫描、注册
 */
class PeerDiscovery {
    private $nodes = [];

    public function register(P2PNode $node) {
        if (!in_array($node, $this->nodes)) $this->nodes[] = $node;
    }

    public function allNodes() {
        return $this->nodes;
    }

    public function scan() {
        return "Scanning P2P network...";
    }
}
?>
