<?php

// 支付场景
enum PayStyleEnum: string
{
    // 用户扫商户二维码
    case activeScan = 'activeScan';
    // 商户扫用户付款码
    case passiveScan = 'passiveScan';
    // 小程序
    case applet = 'applet';
    // 刷脸支付
    case faceScan = 'faceScan';
    // 银联刷卡
    case pos = 'pos';
}