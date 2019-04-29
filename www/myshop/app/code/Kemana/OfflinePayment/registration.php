<?php
// http://excellencemagentoblog.com/blog/2018/03/15/creating-custom-payment-method-in-magento-2/
use Magento\Framework\Component\ComponentRegistrar as registrar;

registrar::register(registrar::MODULE, 'Kemana_OfflinePayment', __DIR__);