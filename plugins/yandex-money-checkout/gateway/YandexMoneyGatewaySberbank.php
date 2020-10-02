<?php
use YandexCheckout\Model\PaymentMethodType;

if ( ! class_exists('YandexMoneyCheckoutGateway')) {
    return;
}

class YandexMoneyGatewaySberbank extends YandexMoneyCheckoutGateway
{
    public $paymentMethod = PaymentMethodType::SBERBANK;

    public $id = 'ym_api_sberbank';

    public function __construct()
    {
        parent::__construct();

        $this->icon = YandexMoneyCheckout::$pluginUrl.'/assets/images/sb.png';

        $this->method_description = __('Оплата через Сбербанк', 'yandexcheckout');
        $this->method_title       = __('Сбербанк Онлайн', 'yandexcheckout');

        $this->defaultTitle       = __('Оплата через Сбербанк', 'yandexcheckout');
        $this->defaultDescription = __('Сбербанк Онлайн', 'yandexcheckout');

        $this->title              = $this->getTitle();
        $this->description        = $this->getDescription();
    }
}