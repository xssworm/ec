<?php
namespace Commerce\Gateways\Omnipay;

use Commerce\Gateways\OffsiteGatewayAdapter;

class WechatPay_Native_GatewayAdapter extends OffsiteGatewayAdapter
{
    public function handle()
    {
        return "WechatPay_Native";
    }
}
