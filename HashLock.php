<?php
/**
 * 哈希时间锁
 * 功能：跨链交易、密钥解锁
 */
class HashLock {
    private $hash;
    private $expire;
    private $unlocked = false;

    public function __construct($secret, $sec) {
        $this->hash = SHA256Hash::make($secret);
        $this->expire = time() + $sec;
    }

    public function unlock($secret) {
        if (!$this->unlocked && time() < $this->expire && 
            SHA256Hash::make($secret) === $this->hash) {
            $this->unlocked = true;
            return true;
        }
        return false;
    }
}
?>
