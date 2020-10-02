<?php
use YandexCheckout\Common\Exceptions\ApiException;
use YandexCheckout\Model\ConfirmationType;
use YandexCheckout\Model\PaymentMethodType;
use YandexCheckout\Request\Payments\CreatePaymentRequest;

if (!class_exists('YandexMoneyCheckoutGateway')) {
    return;
}

class YandexMoneyGatewayCard extends YandexMoneyCheckoutGateway
{
    public $paymentMethod = PaymentMethodType::BANK_CARD;

    public $id = 'ym_api_bank_card';

    public function __construct()
    {
        parent::__construct();

        $this->icon                   = YandexMoneyCheckout::$pluginUrl.'/assets/images/ac_out.png';
        $this->method_description     = __('Оплата с произвольной банковской карты', 'yandexcheckout');
        $this->method_title           = __('Банковские карты', 'yandexcheckout');

        $this->defaultTitle           = __('Банковские карты — Visa, Mastercard и Maestro, «Мир»', 'yandexcheckout');
        $this->defaultDescription     = __('Оплата с произвольной банковской карты', 'yandexcheckout');

        $this->title                  = $this->getTitle();
        $this->description            = $this->getDescription();

        $this->enableRecurrentPayment = $this->get_option('save_payment_method') == 'yes';
        $this->supports               = array_merge($this->supports, array(
            'subscriptions',
            'tokenization',
            'subscription_cancellation',
            'subscription_suspension',
            'subscription_reactivation',
            'subscription_date_changes',
        ));
        $this->has_fields             = true;
    }

    public function init_form_fields()
    {
        parent::init_form_fields();
        $this->form_fields['save_payment_method'] = array(
            'title'   => __('Сохранять платежный метод', 'yandexcheckout'),
            'type'    => 'checkbox',
            'label'   => __('Покупатели могут сохранять карту для повторной оплаты', 'yandexcheckout'),
            'default' => 'no',
        );
    }

    public function is_available()
    {
        if (is_add_payment_method_page() && !$this->enableRecurrentPayment) {
            return false;
        }

        return parent::is_available();
    }

    public function payment_fields()
    {
        parent::payment_fields();
        $displayTokenization = $this->supports('tokenization') && is_checkout() && $this->enableRecurrentPayment;
        if ($displayTokenization) {
            $this->saved_payment_methods();
            $this->save_payment_method_checkbox();
        }
    }
}