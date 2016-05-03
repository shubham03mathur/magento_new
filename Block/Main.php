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
       
        $test = $this->_testFactory->create()->getCollection();
        $this->setTestModel($test);

    }
	public function getEditUrl($id)
    {
        return $this->_urlBuilder->getUrl("excellence/index/edit/", array('id' => $id));
    }
    public function getAddUrl()
    {
        return $this->_urlBuilder->getUrl("excellence/index/Add");
    }
    public function getDeleteUrl($id)
    {
        return $this->_urlBuilder->getUrl("excellence/index/delete/", array('id' => $id));
    }
}
?>
