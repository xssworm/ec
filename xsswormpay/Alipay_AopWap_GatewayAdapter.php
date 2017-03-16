<?php
namespace Commerce\Gateways\Omnipay;

use Commerce\Gateways\OffsiteGatewayAdapter;

class Alipay_AopWap_GatewayAdapter extends OffsiteGatewayAdapter
{
    public function handle()
    {
        return "Alipay_AopWap";
    }
}
