<?php

// 支付方式
enum PayWayEnum: string
{
    // 余额
    case balance = 'balance';
    // 微信
    case wechat = 'wechat';
    // 支付宝
    case alipay = 'alipay';
    // 银联刷卡
    case union = 'union';
    // 云闪付
    case cloud = 'cloud';
    // 数字人民币
    case dcpay = 'dcpay';
    // 现金
    case cash = 'cash';
}