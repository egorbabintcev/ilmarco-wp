<?php

use YandexCheckout\Common\Exceptions\InvalidPropertyValueException;
use YandexCheckout\Model\ConfirmationType;
use YandexCheckout\Model\PaymentData\PaymentDataQiwi;

if (!class_exists('YandexMoneyCheckoutGateway')) {
    return;
}

class YandexMoneyGatewayQiwi extends YandexMoneyCheckoutGateway
{
    public $confirmationType = ConfirmationType::REDIRECT;

    public $id = 'ym_api_qiwi';

    public function __construct()
    {
        parent::__construct();

        $this->paymentMethod      = new PaymentDataQiwi();
        $this->icon               = YandexMoneyCheckout::$pluginUrl.'/assets/images/qw.png';

        $this->method_description = __('QIWI Wallet', 'yandexcheckout');
        $this->method_title       = __('QIWI Wallet', 'yandexcheckout');

        $this->defaultTitle       = __('QIWI Wallet', 'yandexcheckout');
        $this->defaultDescription = __('QIWI Wallet', 'yandexcheckout');

        $this->title              = $this->getTitle();
        $this->description        = $this->getDescription();
        $this->has_fields         = true;
    }

    public function payment_fields()
    {
        parent::payment_fields();
        $phone_field = '<p class="form-row">
            <label for="phone-'.$this->id.'">'.__('Телефон, который привязан к Qiwi Wallet', 'yandexcheckout').'<span class="required">*</span></label>
			<input id="phone-'.$this->id.'" name="phone-'.$this->id.'"class="input-text" maxlength="18"/>
		</p>';

        echo '<fieldset>'.$phone_field.'</fieldset>';
    }

    public function createPayment($order)
    {
        if (isset($_POST['phone-ym_api_qiwi'])) {
            $phone = preg_replace('/[^\d]/', '', $_POST['phone-ym_api_qiwi']);
            try {
                $this->paymentMethod->setPhone($phone);
            } catch (Exception $e) {
                wc_add_notice(__('Поле телефон заполнено неверно.', 'yandexcheckout'), 'error');
            }
        }

        return parent::createPayment($order);
    }
}