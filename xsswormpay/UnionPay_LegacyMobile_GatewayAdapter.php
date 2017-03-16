<?php
namespace Commerce\Gateways\Omnipay;

use Commerce\Gateways\OffsiteGatewayAdapter;

class UnionPay_LegacyMobile_GatewayAdapter extends OffsiteGatewayAdapter
{
    public function handle()
    {
        return "UnionPay_LegacyMobile";
    }
}
