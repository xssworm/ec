<?php
namespace Commerce\Gateways\Omnipay;

use Commerce\Gateways\OffsiteGatewayAdapter;

class Alipay_LegacyExpress_GatewayAdapter extends OffsiteGatewayAdapter
{
    public function handle()
    {
        return "Alipay_LegacyExpress";
    }
}
