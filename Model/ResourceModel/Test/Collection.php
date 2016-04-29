<?php
namespace Excellence\Table\Model\ResourceModel\Test;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Excellence\Table\Model\Test','Excellence\Table\Model\ResourceModel\Test');
       $test = $this->_testFactory->create();
       $collection = $test->getCollection();
       foreach($collection as $row){
          print_r($row->getData());
        }

    }
}
