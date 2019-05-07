<?php
namespace Mojambe\Blog\Block\Html;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class MainImage extends Template
{
    public function __construct(Context $context) {
        parent::__construct($context);
    }

    public function sayHello()
	{
		return __('Hello World Main Image');
	}
}