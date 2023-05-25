<?php
//
// please execute me with 10000 process in the same time.
//
require_once __DIR__ . '/_conf.php';

$user_id = $argv[1] ?? null;
if (!$user_id) {
  die('invalid user_id');
}

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

$key = 'testiphone';

$got = null;
foreach (range(IPHONE_N, 1) as $n) {
  $got = $redis->lpop($key);
  if ($got) {
    break;
  }
}

die('User ' . $user_id . ' got: ' . $got);
