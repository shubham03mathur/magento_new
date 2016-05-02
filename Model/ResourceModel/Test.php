<?php
namespace Excellence\Table\Model\ResourceModel;
class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('excellence_table_test','excellence_table_test_id');
    }
    // public function loadByTitle($title){
    //     print_r('Resource Called');
    //     $table = $this->getMainTable();
    //     $where = $this->getConnection()->quoteInto("title = ?", $title);
    //     $sql = $this->getConnection()->select()->from($table,array('excellence_table_test_id'))->where($where);
    //     $id = $this->getConnection()->fetchOne($sql);
    //     return $id;
    // }
}
?>