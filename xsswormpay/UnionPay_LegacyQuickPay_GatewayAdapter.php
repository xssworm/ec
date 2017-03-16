<?php
namespace Commerce\Gateways\Omnipay;

use Commerce\Gateways\OffsiteGatewayAdapter;

class UnionPay_LegacyQuickPay_GatewayAdapter extends OffsiteGatewayAdapter
{
    public function handle()
    {
        return "UnionPay_LegacyQuickPay";
    }
}
