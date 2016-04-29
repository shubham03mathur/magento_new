<?php
namespace Excellence\Table\Block;
  
class Main extends \Magento\Framework\View\Element\Template
{   
    protected $_testFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Excellence\Table\Model\TestFactory $testFactory
    )
    {
        $this->_testFactory = $testFactory;
        parent::__construct($context);
    }
    protected function _prepareLayout()
    {
       /* $test = $this->_testFactory->create();
        $test->setData('Name','Jhon')->save();
        $test->setData('Email','Jhon@yahoomail.com')->save();
        var_dump('Done');
        exit;*/
        print_r('Test'); die();
        $test = $this->_testFactory->create();
    }
}
