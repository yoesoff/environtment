<?php
namespace Yusuf\Makanan\Model;

use Magento\Framework\Model\AbstractModel;

class Food extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Yusuf\Makanan\Model\ResourceModel\Food');
    }
}