<?php

namespace Yusuf\Makanan\Controller\Actiona;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Yusuf\Makanan\Model\FoodFactory;

class Save extends \Magento\Framework\App\Action\Action
{
	/**
     * @var Food
     */
    protected $_food;

    public function __construct(Context $context, FoodFactory $food) 
    {
        $this->_food = $food;
        parent::__construct($context);
    }

	public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        
        $food = $this->_food->create();

        if(isset($data['makanan_id']) && (isset($data['_method']) && $data['_method'] == 'delete' ) ) { // Update
            
            $food = $food->load($data['makanan_id']);

            if ($food->delete()){
                $this->messageManager->addSuccessMessage(__('Nice, You just REMOVED the data.'));
            } else {
                $this->messageManager->addErrorMessage(__('Data was not REMOVED.'));
            }
            
        } else {

            $food->setData($data);

            if ($food->save()){
                $this->messageManager->addSuccessMessage(__('Nice, You just saved the data.'));
            } else {
                $this->messageManager->addErrorMessage(__('Data was not saved.'));
            }
        }

        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('makanan/listing/listing');
        return $resultRedirect;
    }
}