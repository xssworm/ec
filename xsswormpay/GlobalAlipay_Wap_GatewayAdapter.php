<?php
namespace Commerce\Gateways\Omnipay;

use Commerce\Gateways\OffsiteGatewayAdapter;

class GlobalAlipay_Wap_GatewayAdapter extends OffsiteGatewayAdapter
{
    public function handle()
    {
        return "GlobalAlipay_Wap";
    }
}
