<?php
namespace Commerce\Gateways\Omnipay;

use Commerce\Gateways\OffsiteGatewayAdapter;

class WechatPay_Pos_GatewayAdapter extends OffsiteGatewayAdapter
{
    public function handle()
    {
        return "WechatPay_Pos";
    }
}
