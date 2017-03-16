<?php

namespace Craft;

class XsswormpayPlugin extends BasePlugin
{

    private $commerceInstalled = false;

    public function init()
    {
        $commerce = craft()->db->createCommand()
            ->select('id')
            ->from('plugins')
            ->where("class = 'Commerce'")
            ->queryScalar();
        if($commerce){
            $this->commerceInstalled = true;
        }
    }

    public function getName()
    {
        return "Chinese Payment Gateway";
    }

    /**
     * Returns the plugin’s version number.
     *
     * @return string The plugin’s version number.
     */
    public function getVersion()
    {
        return "0.1";
    }

    /**
     * Returns the plugin developer’s name.
     *
     * @return string The plugin developer’s name.
     */
    public function getDeveloper()
    {
        return "xssworm";
    }

    /**
     * Returns the plugin developer’s URL.
     *
     * @return string The plugin developer’s URL.
     */
    public function getDeveloperUrl()
    {
        return "#";
    }

    public function commerce_registerGatewayAdapters(){
        if($this->commerceInstalled) {
            require __DIR__ . '/vendor/autoload.php';
			
			require_once __DIR__.'/Alipay_AopApp_GatewayAdapter.php';
			require_once __DIR__.'/Alipay_AopF2F_GatewayAdapter.php';
			require_once __DIR__.'/Alipay_AopWap_GatewayAdapter.php';
			require_once __DIR__.'/Alipay_LegacyApp_GatewayAdapter.php';
			require_once __DIR__.'/Alipay_LegacyExpress_GatewayAdapter.php';
			require_once __DIR__.'/Alipay_LegacyWap_GatewayAdapter.php';
			
			require_once __DIR__.'/GlobalAlipay_App_GatewayAdapter.php';
			require_once __DIR__.'/GlobalAlipay_Wap_GatewayAdapter.php';
			require_once __DIR__.'/GlobalAlipay_Web_GatewayAdapter.php';
			
			require_once __DIR__.'/UnionPay_Express_GatewayAdapter.php';
			require_once __DIR__.'/UnionPay_LegacyMobile_GatewayAdapter.php';
			require_once __DIR__.'/UnionPay_LegacyQuickPay_GatewayAdapter.php';
			
			require_once __DIR__.'/WechatPay_App_GatewayAdapter.php';
			require_once __DIR__.'/WechatPay_GatewayAdapter.php';
			require_once __DIR__.'/WechatPay_Js_GatewayAdapter.php';
			require_once __DIR__.'/WechatPay_Native_GatewayAdapter.php';
			require_once __DIR__.'/WechatPay_Pos_GatewayAdapter.php';
			
            return ['\Commerce\Gateways\Omnipay\Alipay_AopApp_GatewayAdapter',
					'\Commerce\Gateways\Omnipay\Alipay_AopF2F_GatewayAdapter',
					'\Commerce\Gateways\Omnipay\Alipay_AopWap_GatewayAdapter',
					'\Commerce\Gateways\Omnipay\Alipay_LegacyApp_GatewayAdapter',
					'\Commerce\Gateways\Omnipay\Alipay_LegacyExpress_GatewayAdapter',
					'\Commerce\Gateways\Omnipay\Alipay_LegacyWap_GatewayAdapter',
					'\Commerce\Gateways\Omnipay\GlobalAlipay_App_GatewayAdapter',
					'\Commerce\Gateways\Omnipay\GlobalAlipay_Wap_GatewayAdapter',
					'\Commerce\Gateways\Omnipay\GlobalAlipay_Web_GatewayAdapter',
					'\Commerce\Gateways\Omnipay\UnionPay_Express_GatewayAdapter',
					'\Commerce\Gateways\Omnipay\UnionPay_LegacyMobile_GatewayAdapter',
					'\Commerce\Gateways\Omnipay\UnionPay_LegacyQuickPay_GatewayAdapter',
					'\Commerce\Gateways\Omnipay\WechatPay_App_GatewayAdapter',
					'\Commerce\Gateways\Omnipay\WechatPay_GatewayAdapter',
					'\Commerce\Gateways\Omnipay\WechatPay_Js_GatewayAdapter',
					'\Commerce\Gateways\Omnipay\WechatPay_Native_GatewayAdapter',
					'\Commerce\Gateways\Omnipay\WechatPay_Pos_GatewayAdapter'];
        }
        return [];
    }
}
