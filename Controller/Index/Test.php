<?php
namespace Excellence\Table\Controller\Index;
 
 
class Test extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;       
        return parent::__construct($context);
    }
     
    public function execute()
    {
         echo 'hiih';
      //  $this->_view->loadLayout();
      //  $this->_view->renderLayout(); 
       // return $this->resultPageFactory->create(); 
    } 
}
