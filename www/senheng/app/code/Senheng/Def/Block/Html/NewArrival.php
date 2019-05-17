<?php

namespace Senheng\Def\Block\Html;

class NewArrival extends \Magento\Framework\View\Element\Template
{
 
    protected $_productCollectionFactory;

    /**
     * Current template name
     *
     * @var string
     */
    protected $_template = 'Senheng_Default::html/new_arrival.phtml';

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,        
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,        
        array $data = []
    )
    {
        $this->_productCollectionFactory = $productCollectionFactory;    
        parent::__construct($context, $data);
    }

    public function getProducts()
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*')
            ->setOrder('created_at', 'desc')
            ->setPageSize(5);

        return $collection;
    }

    public function canItemsAddToCart() {
        return true;
    }

}