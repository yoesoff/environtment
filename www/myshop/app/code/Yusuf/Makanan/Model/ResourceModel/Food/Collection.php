<?php
namespace Yusuf\Makanan\Model\ResourceModel\Food;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init('Yusuf\Makanan\Model\Food', 'Yusuf\Makanan\Model\ResourceModel\Food');
    }
}