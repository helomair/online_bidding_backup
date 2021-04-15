# README #

### 簡介
此為我以前開發過的專案，因已經不再營運便在此留下備份。
此專案為線上競拍系統，使用Laravel開發

### 初始設定
**如有出現錯誤訊息請聯繫工程師**
```shell
    //在專案目錄下
    composer install
    cp .env.example .env
    php artisan key:generate
    開啟.env設置DB參數
    開啟.env設置APP_NAME參數
    開啟.env設置APP_ENV=production參數
    composer dump-autoload
    php artisan migrate
    php artisan db:seed
    php artisan serve
```

### 更新指令
```shell
    composer update
    composer dump-autoload
    php artisan migrate
    php artisan db:seed
    php artisan serve
```

### 自動下標使用
**auto-in-seconds.sh**
會每秒執行一次
```
    php artisan schedule:run
```
請設置CronTab執行此shell script
```sh
    * * * * * sh /path/to/auto_in_seconds.sh
```