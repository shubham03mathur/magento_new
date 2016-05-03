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
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
    public function saveData($data){
        if(isset($data['title'])){
             print_r($data); die();
            $model = $this->setTitle($data['title']);
            $model = $this->setEmail($data['email']);
            $model = $this->setIsActive($data['IsActive']);
            return $model->save();
        }
        return;
    }
    public function deleteById($id){
        if($id){
            return $this->load($id)->delete();
        }
    }
    public function getDataById($id){
        if($id){
            return $this->load($id)->getData();
        }
    }
    public function saveEdit($data){
        $model = $this->load($data['id']);
        $model->setTitle($data['title']);
        $model->setEmail($data['email']);
        $model->setIsActive($data['status']);
        return $model->save();
    }
}
?>
