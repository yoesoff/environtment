<?php
namespace Mojambe\Blog\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Posts extends Template
{
    public function __construct(Context $context) {
        parent::__construct($context);
    }

    public function sayHello()
	{
		return __('Hello World');
	}
}