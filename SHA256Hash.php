<?php
/**
 * SHA256哈希工具
 * 功能：区块链通用加密计算
 */
class SHA256Hash {
    public static function make($data) {
        return hash('sha256', $data);
    }

    public static function makeDouble($data) {
        return self::make(self::make($data));
    }
}
?>
