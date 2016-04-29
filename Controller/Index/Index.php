<?php
namespace Excellence\Table\Controller\Index;
 
 
class Index extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
        )
    {
        $this->resultPageFactory = $resultPageFactory;       
        return parent::__construct($context);
    }
     
    public function execute()
   {   
        print_r('Controller Called');

     //   $this->_view->loadLayout();
       // $this->_view->renderLayout(); 
       return $this->resultPageFactory->create();
    }
}