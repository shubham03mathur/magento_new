<?php
namespace Excellence\Table\Controller\Index;
 
 
class Delete extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    protected $testFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Excellence\Hello\Model\TestFactory $testFactory,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
       
    {
        $this->_testFactory = $testFactory;
        $this->resultPageFactory = $resultPageFactory;      
        return parent::__construct($context);
    }
     
    public function execute()
    {
         print_r('Test');
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $test = $this->_testFactory->create();
        $id = $this->getRequest()->getParam('id');
        if($test->deleteById($id)){
            $this->messageManager->addSuccess('Record Successfully Deleted!');
            $resultRedirect->setUrl($this->_redirect->getRefererUrl());
            return $resultRedirect;
        }
      
   }
}
?>
