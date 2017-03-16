<?php
namespace Commerce\Gateways\Omnipay;

use Commerce\Gateways\OffsiteGatewayAdapter;

class GlobalAlipay_App_GatewayAdapter extends OffsiteGatewayAdapter
{
    public function handle()
    {
        return "GlobalAlipay_App";
    }
}
