Thinkphp5.1 微信
======

### 安装
~~~
composer require myxland/think-wechat:dev-master
php think wechat:config
~~~

### 用法
~~~
<?php
use myxland\wechat\Wechat;

$app = Wechat::officialAccount();
$app->xxx();
~~~
doc 参见
https://www.easywechat.com/docs/master