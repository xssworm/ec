<?php
namespace Commerce\Gateways\Omnipay;

use Commerce\Gateways\OffsiteGatewayAdapter;

class Alipay_LegacyWap_GatewayAdapter extends OffsiteGatewayAdapter
{
    public function handle()
    {
        return "Alipay_LegacyWap";
    }
}
