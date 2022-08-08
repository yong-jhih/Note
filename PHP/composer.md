## composer 套件管理
**https://speakerdeck.com/jaceju/begining-composer**

1. 新專案(無資料.專案建立者)
    1. 建立composer.json: composer init
    2. 下載套件(composer.json): composer install

2. ### 版控
    1. 僅加入composer.json及composer.lock

3. ### 專案協作者
    1. 版控專案下載(無安裝composer套件.僅有composer.json及composer.lock)
    2. 下載套件(composer.json): composer install
<hr>
解决composer install遇到：Your requirements could not be resolved to an installable set of packages<br>
解决办法：直接忽略版本就是了
composer install --ignore-platform-reqs 或者 composer update --ignore-platform-reqs