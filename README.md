# php-blockchain-engine
基于PHP原生开发的高性能区块链引擎，实现分布式账本、PoW/DPoS共识、加密哈希、数字签名、智能合约、P2P网络、交易验证、去中心化存储等全模块功能，纯原创无冗余依赖，适合区块链学习、Web3开发、私有链部署。

## 项目文件清单（38个原创文件）
1. **Block.php** - 区块链核心区块实体
2. **BlockHeader.php** - 区块头元数据管理
3. **BlockchainLedger.php** - 分布式区块链账本
4. **SHA256Hash.php** - SHA256哈希加密工具
5. **DigitalSignature.php** - 数字签名与验签
6. **Transaction.php** - 区块链交易实体
7. **MerkleTree.php** - 默克尔树数据校验
8. **ProofOfWork.php** - 工作量证明挖矿算法
9. **DPoSConsensus.php** - 委托权益证明共识机制
10. **TransactionPool.php** - 待打包交易池管理
11. **Wallet.php** - 区块链钱包地址管理
12. **P2PNode.php** - P2P去中心化网络节点
13. **SmartContract.php** - 基础智能合约
14. **ContractExecutor.php** - 智能合约执行器
15. **BlockValidator.php** - 区块合法性校验
16. **TxValidator.php** - 交易全量安全校验
17. **AntiDoubleSpend.php** - 双花攻击防护
18. **DecentralizedStorage.php** - 去中心化数据存储
19. **HashLock.php** - 哈希时间锁跨链交易
20. **MultiSignature.php** - 多重签名授权交易
21. **TokenContract.php** - 自定义通证发行合约
22. **PeerDiscovery.php** - P2P节点自动发现
23. **ChainSync.php** - 区块链数据同步工具
24. **BlockMiner.php** - 自动化区块挖矿工具
25. **NodeMonitor.php** - 区块链节点状态监控
26. **ContractStorage.php** - 智能合约状态存储
27. **NetworkMessage.php** - P2P网络通信消息
28. **BlockIndexer.php** - 区块快速索引查询
29. **GenesisCreator.php** - 创世区块自定义生成
30. **PrivateChainManager.php** - 企业级私有链管理
31. **EncryptUtils.php** - 通用加密工具集
32. **TxEncoder.php** - 交易数据编解码
33. **ChainStats.php** - 区块链数据统计分析
34. **MessageBroadcast.php** - P2P消息广播
35. **RpcService.php** - 区块链对外RPC接口
36. **UTXO.php** - 未花费交易输出模型
37. **ChainConfig.php** - 区块链全局配置
38. **BlockchainBootstrap.php** - 项目启动主入口

## 核心功能
✅ 分布式账本与区块管理  
✅ PoW / DPoS 双共识机制  
✅ SHA256 / RSA 加密签名体系  
✅ 智能合约 + 自定义通证发行  
✅ P2P去中心化网络通信  
✅ 交易池 + 自动化挖矿  
✅ 默克尔树 + UTXO 模型  
✅ 双花防护 + 多重签名  
✅ 私有链部署 + 节点授权  
✅ RPC接口 + 数据统计监控  

## 使用方法
直接运行 **BlockchainBootstrap.php** 启动区块链系统，自动初始化创世区块、启动P2P节点、开启挖矿。所有代码纯原创，无第三方依赖，可直接用于GitHub提交、学习研究与商业项目。
