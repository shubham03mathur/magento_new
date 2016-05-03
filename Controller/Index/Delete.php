<?php
namespace Excellence\Table\Controller\Index;
use Magento\Framework\Controller\ResultFactory; 
class Delete extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    protected $testFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Excellence\Table\Model\TestFactory $testFactory,
        \Magento\Framework\Message\ManagerInterface $messageManager)
       
    {
	    $this->messageManager = $messageManager;
        $this->_testFactory = $testFactory;      
        return parent::__construct($context);
    }
     
    public function execute()
    {
        print_r('Delete Processing');
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
		print_r('Delete Processing again');
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
