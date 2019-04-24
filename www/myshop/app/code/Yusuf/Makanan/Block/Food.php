<?php

namespace Yusuf\Makanan\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Yusuf\Makanan\Model\FoodFactory;
use Magento\Framework\Data\Form\FormKey;

class Food extends Template
{
    /**
     * Constructor
     *
     * @param Context $context
     * @param array $data
     */
    public function __construct(Context $context, FormKey $formKey, FoodFactory $foodFactory) {
        parent::__construct($context);
        $this->form_key = $formKey;
        $this->foodFactory = $foodFactory->create();
    }

    /**
     * @return array
     */
    public function getFood()
    {
        $id = $this->getRequest()->getParam('id');

        $food = $this->foodFactory->load($id);

        return $food;
    }

    public function getFormKey()
    {
         return $this->formKey->getFormKey();
    }

}