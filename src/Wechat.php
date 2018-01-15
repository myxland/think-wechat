<?php

namespace myxland\wechat;

use EasyWeChat\Factory;

/**
 * Class Wechat  微信类
 *
 * @package myxland\wechat
 * @method static \EasyWeChat\Payment\Application            payment(array $config)
 * @method static \EasyWeChat\MiniProgram\Application        miniProgram(array $config)
 * @method static \EasyWeChat\OpenPlatform\Application       openPlatform(array $config)
 * @method static \EasyWeChat\OfficialAccount\Application    officialAccount(array $config)
 * @method static \EasyWeChat\BasicService\Application       basicService(array $config)
 * @method static \EasyWeChat\Work\Application               work(array $config)
 */
class Wechat
{

    protected static $officialAccount;
    protected static $payment;
    protected static $miniProgram;
    protected static $openPlatform;
    protected static $work;

    public static function app($name)
    {
        if (! isset(self::$$name)) {
            $config = config('wechat.' . $name);
            if (! $config) {
                throw new \InvalidArgumentException("missing wechat config");
            }
            self::$$name = Factory::$name($config);
        }

        return self::$$name;
    }

    public static function __callStatic($name, $arguments)
    {
        return self::app($name);
    }
}