<?php
namespace Excellence\Table\Controller\Index;
class Edit extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Excellence\Table\Model\TestFactory $testFactory,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->_testFactory = $testFactory;
        $this->resultPageFactory = $resultPageFactory;       
        return parent::__construct($context);
    }
     
    public function execute()
    {
        $test = $this->_testFactory->create();
        $post = $this->getRequest()->getPost('data');
        $id   = $this->getRequest()->getParam('id');
        if(isset($post['submit'])) {
            $test->saveEdit($post,$id);
        }
        return $this->resultPageFactory->create(); 
    } 
}