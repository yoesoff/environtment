<?php

namespace Senheng\Def\Block\Html;

class FlashSale extends \Magento\Framework\View\Element\Template
{
 
    protected $_productCollectionFactory;

    /**
     * Current template name
     *
     * @var string
     */
    protected $_template = 'Senheng_Default::html/flash_sale.phtml';

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,        
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,        
        array $data = []
    )
    {
        $this->_productCollectionFactory = $productCollectionFactory;    
        parent::__construct($context, $data);
    }

    public function getFlashSaleProductCollection()
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        $collection->addAttributeToFilter('is_flash_sale', true);
        $collection->setPageSize(5); // fetching only 10 products

        return $collection;
    }

    public function canItemsAddToCart() {
        return true;
    }

}