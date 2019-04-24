<?php

namespace Yusuf\Makanan\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Food extends AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('yusuf_makanan', 'makanan_id');   //here "yusuf_makanan" is table name and "makanan_id" is the primary key of custom table
    }
}