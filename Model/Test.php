<?php
namespace Excellence\Table\Model;
class Test extends \Magento\Framework\Model\AbstractModel implements TestInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'excellence_table_test';

    protected function _construct()
    {
        $this->_init('Excellence\Table\Model\ResourceModel\Test');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getData('table_id')];
    }
   

}
