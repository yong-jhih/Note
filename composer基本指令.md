# composer
要新增或棄用某些套件，你應該主要操作 composer.json 檔案，然後使用 Composer 的命令來更新 composer.lock 檔案。以下是具體步驟：

## 查詢套件
你可以直接訪問 Packagist 網站，這是 Composer 的官方套件倉庫。在網站的搜索欄中輸入關鍵字，瀏覽結果並找到合適的套件。或
```
composer search [keywords]
```

## 新增套件(升級或降級也適用)
使用版本約束 Composer 支持多種版本約束語法，以靈活地指定依賴版本：
* 精確版本：指定確切版本，如 1.0.2。
* 範圍版本：使用範圍來指定版本，如 >=1.0 <2.0。
* 通配符：使用通配符來指定版本，如 1.0.*。
* 波浪號：允許小版本升級但不允許大版本升級，如 ~1.2 相當於 >=1.2 <2.0。
* 插入符號：允許向後兼容的升級，如 ^1.2.3 相當於 >=1.2.3 <2.0.0。
```
composer require [package-name]
composer require [package-name]:version
composer require guzzlehttp/guzzle:^7.0
```

## 移除套件
```
composer remove [package-name]
```

## 更新依賴
```
composer update
```

## 檢查安裝的版本
使用以下命令來列出已安裝的套件及其版本：
```
composer show guzzlehttp/guzzle
```