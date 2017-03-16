<?php
namespace Commerce\Gateways\Omnipay;

use Commerce\Gateways\OffsiteGatewayAdapter;

class UnionPay_Express_GatewayAdapter extends OffsiteGatewayAdapter
{
    public function handle()
    {
        return "UnionPay_Express";
    }
}
