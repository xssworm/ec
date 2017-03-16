<?php
namespace Commerce\Gateways\Omnipay;

use Commerce\Gateways\OffsiteGatewayAdapter;

class GlobalAlipay_Web_GatewayAdapter extends OffsiteGatewayAdapter
{
    public function handle()
    {
        return "GlobalAlipay_Web";
    }
}
