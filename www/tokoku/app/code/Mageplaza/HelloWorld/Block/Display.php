<?php
namespace Mageplaza\HelloWorld\Block;
class Display extends \Magento\Framework\View\Element\Template
{
    public function sayHello()
	{
		return __('Hello World');
	}
}