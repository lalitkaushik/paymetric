<?php
namespace Paymetric;
//
//Base class for all XiPay classes 
//encapsulating baisic property handling plus info items 
//
//include_once(Mage::getBaseDir('lib'). DS . 'paymetric/BaseCore.php');
use \Paymetric\BaseCore;
class BaseClass extends BaseCore
{
    protected $InfoItems; 
    
    //
    //Expect subclass to override this method 
    //
    protected function &GetPropertyList()
    {
        return NULL; //pure virtual 
    }
    
    //
    //Give sub classes a chance to validate array properties 
    //should throw exceptions when validation fails. 
    //
    protected function ValidateArrayProperty($key, $value)
    {
        if ($key == "InfoItems"){
            if (is_array($value)){
                foreach ($value as $k => $v){
                    if (!(is_string($k) && (!is_object($v) && !is_array($v) ) ) ){
                        throw new Exception("BaseClass::ValidateArrayProperty() - InfoItems must be an associative array with simple data types!");       
                    }
                }
            }else{
                throw new Exception("BaseClass::ValidateArrayProperty() - InfoItems property must be an associative array!");
            }
            
            return true;
        }
        
        return true; //valid 
    } 

    //
    //Call virtual method to get the subclass property list 
    //
    public function __construct()
    {
        parent::__construct();
        $this->PropertyList = $this->GetPropertyList();
    }
    
    //
    //Add an info item to line item 
    //      
    public function AddInfoItem($name, $value)
    {
        if (!is_string($name)){
            throw new Exception("BaseClass::AddInfoItem() - Property name $name is not a type of string");
        }
        
        if (is_object($value) || is_array($value)){
            throw new Exception("BaseClass::AddInfoItem() - $value is either object or array type, not a simple data type as expected");
        }
        
        $this->InfoItems[$name] = $value;
    }
    
    //
    //Delete an info item from line item
    //
    public function RemoveInfoItem($name)
    {
        if (is_string($name)){
            unset($this->InfoItems[$name]);
        }else{
            throw new Exception("BaseClass::RemoveInfoItem() - The input parameter for RemoveInfoItem is not a string");
        }
    }
    
    //
    //Clear out all info items 
    //
    public function ClearInfoItems()
    {
        $this->InfoItems = array();
    }    
}
class_alias('Paymetric\BaseClass', 'Paymetric_BaseClass');