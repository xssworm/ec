<?php
namespace Commerce\Gateways\Omnipay;

use Commerce\Gateways\OffsiteGatewayAdapter;

class WechatPay_GatewayAdapter extends OffsiteGatewayAdapter
{
    public function handle()
    {
        return "WechatPay";
    }
}
