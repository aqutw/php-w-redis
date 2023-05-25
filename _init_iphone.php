<?php
require_once __DIR__ . '/_conf.php';

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
$key = 'testiphone';
$redis->del($key);

foreach (range(IPHONE_N, 1) as $no) {
  $redis->lpush('testiphone', $no);
}

$len = $redis->llen($key);
print_r($redis->lrange($key, 0, $len));
echo 'initial ' . $len . ' iPhone completed';
