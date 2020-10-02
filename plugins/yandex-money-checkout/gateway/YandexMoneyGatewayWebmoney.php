<?php
use YandexCheckout\Model\PaymentMethodType;

if ( ! class_exists('YandexMoneyCheckoutGateway')) {
    return;
}


class YandexMoneyGatewayWebmoney extends YandexMoneyCheckoutGateway
{
    public $paymentMethod = PaymentMethodType::WEBMONEY;

    public $id = 'ym_api_webmoney';

    public function __construct()
    {
        parent::__construct();

        $this->icon = YandexMoneyCheckout::$pluginUrl.'/assets/images/wm.png';

        $this->method_description = __('Webmoney', 'yandexcheckout');
        $this->method_title       = __('Webmoney', 'yandexcheckout');

        $this->defaultTitle       = __('Webmoney', 'yandexcheckout');
        $this->defaultDescription = __('Webmoney', 'yandexcheckout');

        $this->title              = $this->getTitle();
        $this->description        = $this->getDescription();
    }
}