<?php

namespace Yusuf\Makanan\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Yusuf\Makanan\Model\FoodFactory;

class Foods extends Template
{
    /**
     * Constructor
     *
     * @param Context $context
     * @param array $data
     */
    public function __construct(Context $context, FoodFactory $foodFactory)
    {
        parent::__construct($context);

        $this->foodFactory = $foodFactory->create();
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Daftar makanan lezat menawan'));

        // Pagination stuff
        if ($this->getFoods()) {
            $pager = $this->getLayout()
                ->createBlock('\Magento\Theme\Block\Html\Pager', 'makanan.test.pager')
                ->setAvailableLimit(array(5=>5,10=>10,15=>15))
                ->setShowPerPage(true)
                ->setCollection($this->getFoods());

	        $this->setChild('pager', $pager);
	        $this->getFoods()->load();
	    }
        
        return parent::_prepareLayout();
    }

    /**
     * @return array
     */
    public function getFoods()
    {
        $foods = $this->foodFactory->getCollection();

        // Pagination stuff
        $page = ($this->getRequest()->getParam('p'))? $this->getRequest()->getParam('p') : 1;
        $pageSize = ($this->getRequest()->getParam('limit'))? $this->getRequest()->getParam('limit') : 5;
        $foods->setPageSize($pageSize);
        $foods->setCurPage($page);

        return $foods;
    }

    public function getPagerHtml()
	{
	    return $this->getChildHtml('pager');
	}

}