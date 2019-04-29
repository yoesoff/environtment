<?php

namespace Kemana\Payment\Model;

use Magento\Payment\Model\Method\AbstractMethod;

/**
 * Pay In Store payment method model
 */
class PaymentMethod extends AbstractMethod
{
 
    /**
     * Payment code
     *
     * @var string
     */
    protected $_code = 'paymentmethod';
 
    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = true;
}