<?php
    /**
     * Created by PhpStorm.
     * User: vjcspy
     * Date: 8/5/15
     * Time: 2:28 PM
     */
class SM_XPos_Model_Adminhtml_System_Config_Backend_NumberResultSearch extends Mage_Core_Model_Config_Data{
    /**
     * Processing object before save data
     *
     * @return Mage_Core_Model_Abstract
     */
    protected function _beforeSave()
    {
        $numberSearch = $this->getValue();
        if(!$numberSearch){
            Mage::throwException("Please check number of products displayed!");
        }
        return parent::_beforeSave(); // TODO: Change the autogenerated stub
    }

}