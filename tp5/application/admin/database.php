<?php
return [
    // 数据库名
    'database'    => 'sct',
    // 数据库表前缀
    'prefix'      => 'sct_',
    // 数据库连接参数
    'params' => [
        // 使用长连接
        \PDO::ATTR_PERSISTENT => true,
    ],    
];