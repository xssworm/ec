<?php
namespace Commerce\Gateways\Omnipay;

use Commerce\Gateways\OffsiteGatewayAdapter;

class Alipay_AopApp_GatewayAdapter extends OffsiteGatewayAdapter
{
    public function handle()
    {
        return "Alipay_AopApp";
    }
}
