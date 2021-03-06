Pingpp PHP SDK
=================
## 简介
lib 文件夹下是 PHP SDK 文件，<br>
example 文件夹里面是简单的接入示例，该示例仅供参考。

## 版本要求
PHP 版本 5.3 及以上

## 安装
### 使用 Composer
在 `composer.json` 中添加以下代码
```
{
  "require": {
    "pingplusplus/pingpp-php": "dev-master"
  }
}
```
然后执行
```
composer install
```
使用 Composer 的 autoload 引入
```php
require_once('vendor/autoload.php');
```
### 手动引入
``` php
require_once('/path/to/pingpp-php/init.php');
```

## 接入方法
### 初始化
```php
\Pingpp\Pingpp::setApiKey('YOUR-KEY');
```

### 支付
```php
$ch = \Pingpp\Charge::create(
    array(
        'order_no'  => '123456789',
        'app'       => array('id' => 'YOUR-APP-ID'),
        'channel'   => 'alipay',
        'amount'    => 100,
        'client_ip' => '127.0.0.1',
        'currency'  => 'cny',
        'subject'   => 'Your Subject',
        'body'      => 'Your Body',
        'extra'     => $extra
    )
);
```

### 查询
```php
\Pingpp\Charge::retrieve('CHARGE_ID');
```

```php
\Pingpp\Charge::all(array('limit' => 5));
```

### 退款
``` php
$ch = \Pingpp\Charge::retrieve('CHARGE_ID');
$re = $ch->refunds->create(array('description' => 'Refund Description');
```

### 退款查询
```php
$ch = \Pingpp\Charge::retrieve('CHARGE_ID');
$ch->refunds->retrieve('REFUND_ID');
```

```php
$ch = \Pingpp\Charge::retrieve('CHARGE_ID');
$ch->refunds->all(array('limit' => 5));
```

### 微信红包
```php
\Pingpp\RedEnvelope::create(
    array(
        'order_no'  => '123456789',
        'app'       => array('id' => 'YOUR-APP-ID'),
        'channel'   => 'wx_pub',
        'amount'    => 100,
        'currency'  => 'cny',
        'subject'   => 'Your Subject',
        'body'      => 'Your Body',
        'extra'     => array(
            'nick_name' => 'Nick Name',
            'send_name' => 'Send Name'
        ),
        'recipient'   => 'Openid',
        'description' => 'Your Description'
    )
);
```

### 查询
```php
\Pingpp\RedEnvelope::retrieve('RED_ID');
```

```php
\Pingpp\RedEnvelope::all(array('limit' => 5));
```

### 微信公众号获取签名
如果使用微信 JS-SDK 来调起支付，需要在创建 `charge` 后，获取签名（`signature`），传给 HTML5 SDK。
```php
$jsapi_ticket_arr = \Pingpp\WxpubOAuth::getJsapiTicket($wx_app_id, $wx_app_secret);
$ticket = $jsapi_ticket_arr['ticket'];
```
**正常情况下，`jsapi_ticket` 的有效期为 7200 秒。由于获取 `jsapi_ticket` 的 api 调用次数非常有限，频繁刷新 `jsapi_ticket` 会导致 api 调用受限，影响自身业务，开发者必须在自己的服务器全局缓存 `jsapi_ticket`。**
```php
$signature = \Pingpp\WxpubOauth::getSignature($charge, $ticket);
```
然后在 HTML5 SDK 里调用
```js
pingpp.createPayment(charge, callback, signature, false);
```

**详细信息请参考 [API 文档](https://pingxx.com/document/api?php)。**
