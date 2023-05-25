# 測試環境
- MacOS
- php 7.3

# 測試 step1 (預備data)
`php _init_iphone.php`

# 測試 step2 (執行)
觸發concurrency 10000 個 `php buy_iphone.php`

# 測試結果第1次
```
User 659 got: 1
User 109 got: 2
User 652 got: 3
User 23 got: 5
User 460 got: 4
User 7 got: 6
User 42 got: 7
User 380 got: 9
User 220 got: 8
User 442 got: 10
```

# 測試結果第2次
```
User 364 got: 1
User 278 got: 4
User 4 got: 3
User 8 got: 2
User 195 got: 5
User 80 got: 6
User 87 got: 7
User 320 got: 8
User 463 got: 9
User 9 got: 10
```

# 測試結果第3次
```
User 914 got: 3
User 101 got: 2
User 3 got: 1
User 26 got: 4
User 2 got: 5
User 5 got: 7
User 556 got: 6
User 1010 got: 8
User 39 got: 9
User 76 got: 10
```

# sleep 或 thread 思路不在 User 搶買情境適用
