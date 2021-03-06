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
   /* public function loadByTitle($title){
        print_r('Model function Called ');
        if(!$title){
            $title = $this->getTitle();
            //random data logic. can be much more complex.
            //this is just example
        }
        $id = $this->getResource()->loadByTitle($title);
        return $this->load($id);
    }*/
   public function saveData($data)
    {
      if(isset($data['title'])){

         return $this->setData($data)->save();
      }   
      return;
     }
}
?>
