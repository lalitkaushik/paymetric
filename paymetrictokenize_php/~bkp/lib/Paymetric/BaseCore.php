<?php
namespace Paymetric;
//
//Base class for all XiPay classes 
//encapsulating baisic property handling plus info items 
//
die;
class BaseCore
{
    protected $PropertyList; 
    
    //
    //Expect subclass to override this method 
    //
    protected function &GetPropertyList()
    {
        return $PropertyList; //pure virtual 
    }
    
    //
    //Give sub classes a chance to validate array properties 
    //should throw exceptions when validation fails. 
    //
    protected function ValidateArrayProperty($key, $value)
    {
        return true; //valid 
    } 

    //
    //IsValid will be used to see if an object has all required properties 
    //
    public function IsValid()
    {
        return true;//base class will always say yes I am valid!
    }
    
    //
    //Call virtual method to get the subclass property list 
    //
    public function __construct()
    {
        $this->PropertyList = $this->GetPropertyList();
    }
    
    //
    //Magic functions _get and __set
    //
    
    public function __get($key)
    {
        if (!empty($this->PropertyList[$key])){
            return $this->$key;
        }else{
            throw new Exception("BaseCore::Get - Property $key not exists!");
        }
    }
    
    public function __set($key, $value)
    {
        if (empty($this->PropertyList[$key]))
        {
            throw new Exception("BaseCore::Set - Property $key not defined!");
        }
        
        //enforce the type constraints 
        $typeCheck = "\$typeMatch = " . $this->PropertyList[$key] . ";";
        //echo $typeCheck ;
        
        eval($typeCheck);
        
        //echo $typeCheck;
        //echo $typeMatch;
        //echo "\n";
        
        if ($typeMatch <> 1){
            throw new Exception("BaseCore::Set - Value $key not match its intended type. Evaluation of $typeCheck failed.");
        }
        
        if (is_array($value)){
            $this->ValidateArrayProperty($key, $value);
        }
        
        $this->$key = $value;
    }
}
class_alias('Paymetric\BaseCore', 'Paymetric_BaseCore');