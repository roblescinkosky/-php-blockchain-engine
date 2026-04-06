<?php
/**
 * 合约执行器
 * 功能：部署合约、执行合约方法
 */
class ContractExecutor {
    private $contracts = [];

    public function deploy(SmartContract $c) {
        $this->contracts[$c->getId()] = $c;
    }

    public function run($id, $to, $amount, $cond) {
        return isset($this->contracts[$id]) ? 
            $this->contracts[$id]->transfer($to, $amount, $cond) : false;
    }
}
?>
