<?php
/**
 * 项目启动入口
 * 功能：初始化区块链、启动节点、开启挖矿
 */
require_once 'Block.php';
require_once 'BlockchainLedger.php';
require_once 'ProofOfWork.php';
require_once 'TransactionPool.php';
require_once 'P2PNode.php';
require_once 'BlockMiner.php';

$ledger = new BlockchainLedger();
$pool = new TransactionPool();
$node = new P2PNode("MAIN_PHP_NODE", $ledger);
$miner = new BlockMiner($node, $pool, $ledger);

$miner->mine();
echo "PHP Blockchain Running!\n";
echo "Height: " . $ledger->lastBlock()->index . "\n";
echo "Chain Valid: " . var_export($ledger->isChainValid(), true) . "\n";
?>
