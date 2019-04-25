<?php

namespace Yusuf\Makanan\Plugin;

use Magento\Framework\Exception\LocalizedException;

class Cart
{

    /**
     * @var \Magento\Quote\Model\Quote
     */
    protected $quote;

    /**
     * Plugin constructor.
     *
     * @param \Magento\Checkout\Model\Session $checkoutSession
     */
    public function __construct(\Magento\Checkout\Model\Session $checkoutSession)
    {
        $this->quote = $checkoutSession->getQuote();
    }

    /**
     * Undocumented function
     *
     * @param \Magento\Checkout\Model\Cart $subject
     * @param [type] $productInfo
     * @param [type] $requestInfo
     * @return array
     * @throws LocalizedException
     */
    public function beforeAddProduct( \Magento\Checkout\Model\Cart $subject, $productInfo, $requestInfo = null ) {
        if ($this->quote->hasData('custom_attribute')) {
            throw new LocalizedException(__('Could not add Product to Cart'));
        }

        return [$productInfo, $requestInfo];
     } 
} 