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
    public function saveData($info){
        if(isset($info['data']['title'])){
             $this->setTitle($info['data']['title']);
             $this->setEmail($info['data']['email']);
             $this->setIsActive($info['data']['IsActive']);
             return $this->save();
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
    public function saveEdit($data,$uid){
        $model = $this->load($uid);
        $model->setTitle($data['title']);
        $model->setEmail($data['email']);
        $model->setIsActive($data['IsActive']);
        return $model->save();
    }
}
?>
