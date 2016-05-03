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
        $editUrl = "excellence/index/edit/id/".$id;
        return $this->_urlBuilder->getUrl($editUrl);
    }
    public function getAddUrl()
    {
        return $this->_urlBuilder->getUrl("excellence/index/Add");
    }
    public function getDeleteUrl($id)
    {
        $deleteUrl = "excellence/index/delete/id/".$id;
        return $this->_urlBuilder->getUrl($deleteUrl);
    }
}
?>
