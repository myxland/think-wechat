<?php

/**
 * 微信配置信息
 */
return [

    /**
     * 微信公众号配置
     */
    'officialAccount' => [
        /**
         * Debug 模式，bool 值：true/false
         *
         * 当值为 false 时，所有的日志都不会记录
         */
        'debug'         => true,

        /**
         * 账号基本信息，请从微信公众平台/开放平台获取
         */
        'app_id'        => 'your-app-id',         // AppID
        'secret'        => 'your-app-secret',     // AppSecret
        'token'         => 'your-token',          // Token
        'aes_key'       => '',                    // EncodingAESKey，兼容与安全模式下请一定要填写！！！

        /**
         * 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
         * 使用自定义类名时，构造函数将会接收一个 `EasyWeChat\Kernel\Http\Response` 实例
         */
        'response_type' => 'array',

        /**
         * 日志配置
         *
         * level: 日志级别, 可选为：
         *         debug/info/notice/warning/error/critical/alert/emergency
         * permission：日志文件权限(可选)，默认为null（若为null值,monolog会取0644）
         * file：日志文件位置(绝对路径!!!)，要求可写权限
         */
        'log'           => [
            'level'      => 'debug',
            'permission' => 0777,
            'file'       => '/tmp/easywechat.log',
        ],

        /**
         * 接口请求相关配置，超时时间等，具体可用参数请参考：
         * http://docs.guzzlephp.org/en/stable/request-config.html
         *
         * - retries: 重试次数，默认 1，指定当 http 请求失败时重试的次数。
         * - retry_delay: 重试延迟间隔（单位：ms），默认 500
         * - log_template: 指定 HTTP 日志模板，请参考：https://github.com/guzzle/guzzle/blob/master/src/MessageFormatter.php
         */
        'http'          => [
            'retries'     => 1,
            'retry_delay' => 500,
            'timeout'     => 5.0,
            'base_uri'    => 'https://api.weixin.qq.com/',
        ],

        /**
         * OAuth 配置
         *
         * scopes：公众平台（snsapi_userinfo / snsapi_base），开放平台：snsapi_login
         * callback：OAuth授权完成后的回调页地址
         */
        'oauth'         => [
            'scopes'   => ['snsapi_userinfo'],
            'callback' => '/examples/oauth_callback.php',
        ],
    ],

    /**
     * 微信支付配置
     */
    'payment'         => [
        // 必要配置
        'app_id'    => 'xxxx',
        'mch_id'    => 'your-mch-id',
        'key'       => 'key-for-signature',   // API 密钥

        // 如需使用敏感接口（如退款、发送红包等）需要配置 API 证书路径(登录商户平台下载 API 证书)
        'cert_path' => 'path/to/your/cert.pem', // XXX: 绝对路径！！！！
        'key_path'  => 'path/to/your/key',      // XXX: 绝对路径！！！！

        'notify_url' => '默认的订单回调地址',     // 你也可以在下单时单独设置来想覆盖它
    ],

    /**
     * 小程序配置
     */
    'miniProgram'     => [
        /**
         * 账号基本信息，请从微信公众平台/开放平台获取
         */
        'app_id'  => 'your-app-id',         // AppID
        'secret'  => 'your-app-secret',     // AppSecret
        'token'   => 'your-token',          // Token
        'aes_key' => '',                    // EncodingAESKey，兼容与安全模式下请一定要填写！！！
    ],

    /**
     * 开放平台
     */
    'openPlatform'    => [
        /**
         * 账号基本信息，请从微信公众平台/开放平台获取
         */
        'app_id'  => 'your-app-id',         // AppID
        'secret'  => 'your-app-secret',     // AppSecret
        'token'   => 'your-token',          // Token
        'aes_key' => '',                    // EncodingAESKey，兼容与安全模式下请一定要填写！！！
    ],

    /**
     * 企业微信
     */
    'work'            => [
        'corp_id' => 'xxxxxxxxxxxxxxxxx',

        'agent_id'      => 100020, // 如果有 agend_id 则填写
        'secret'        => 'xxxxxxxxxx',

        // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
        'response_type' => 'array',

        'log' => [
            'level' => 'debug',
            'file'  => __DIR__ . '/wechat.log',
        ],
    ],
];