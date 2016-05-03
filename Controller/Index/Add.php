<?php
namespace Excellence\Table\Controller\Index;
class Add extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    protected $testFactory;
    protected $messageManager;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Excellence\Table\Model\TestFactory $testFactory,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Message\ManagerInterface $messageManager)
    {
        $this->_testFactory = $testFactory;
        $this->resultPageFactory = $resultPageFactory; 
        $this->messageManager = $messageManager;     
        return parent::__construct($context,$messageManager);
    }
     
    public function execute()
    {
    	$test = $this->_testFactory->create();
        $post = $this->getRequest()->getPostValue();
        if(isset($post['data']['submit'])){
           $test->saveData($post);
           $this->messageManager->addSuccess( __('Data Saved Successfully!!') );
        }
        return $this->resultPageFactory->create();
    }   
}

?>
