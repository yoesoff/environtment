<?php
namespace Yoesoff\HelloWorld\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$a = 0;
		$b = 9;
		print_r($this->getRequest()->getParams());
		exit;
	}
}