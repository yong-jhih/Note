composer install
    1.若有composer.lock這個檔案，會去安裝此檔案內相依版本的套件。一般是要部署一個別人創立的專案時，要安裝vender用的。
    2.若無composer.lock，則會照composer.json安裝，並生成composer.lock。一般是在新創專案時的步驟，寫好composer.json，下composer install，這樣的case通常只有一次。

composer require
    添加package用。要幫專案增加 package 的時候用這個！
    會去添加安裝的版本，加入相依並紀錄到composer.json和composer.lock
    composer require new/package
    composer require "xxx/xxx:2.9.1"
    
composer update
    composer update和composer update vendor/package會從composer.json安裝最新的package，並且更新composer.json和composer.lock
    注意！有的 package 改版不向下相容，會讓原本預期的行為改變，團隊中如果有某人擅自更動套件的版本可能會導致災難，清楚知道自己在做什麼再用，也因為如此一般composer.json裡的相依版本不會用dev。


composer install - 如有 composer.lock 文件，直接安装，否则从 composer.json 安装最新扩展包和依赖；
composer update - 从 composer.json 安装最新扩展包和依赖；
composer update vendor/package - 从 composer.json 或者对应包的配置，并更新到最新；
composer require new/package - 添加安装 new/package, 可以指定版本，如： composer require new/package ~2.5.