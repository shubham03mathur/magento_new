<?php
namespace Excellence\Table\Controller\Index;
 
 
class Add extends \Magento\Framework\App\Action\Action
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
    	// die();
        //print_r('add_controller called!!');
        $test = $this->_testFactory->create(); 
        //print_r($test->getData());
        $post = $this->getRequest()->getPostValue();
        print_r($post);
         /* if(isset($post['submit'])){
            $test->setTitle($post['data']['title'])->save();
        }*/																																																																																																																																																																																																																																																																																					
           
       return $this->resultPageFactory->create(); 
    } 
      
}
?>
