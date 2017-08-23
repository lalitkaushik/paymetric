<?php
namespace Paymetric;
//
//XiPay transaction class 
//All properties are per XiPay WS WSDL
//
//include_once(Mage::getBaseDir('lib'). DS . 'paymetric/BaseClass.php');
use \Paymetric\BaseClass;
class PaymetricTransaction extends BaseClass
{
    //
    //Legal properties for transaction class and their validations
    //
    static protected $propertyList = array(     "AVSAddress"=>"is_string(\$value)",
                                                "AVSCode"=>"is_string(\$value)",
                                                "AVSZipCode"=>"is_string(\$value)",
                                                "AccountingDocNumber"=>"is_string(\$value)",
                                                "ActionCode"=>"is_string(\$value)",
                                                "AdditionalInfo"=>"is_string(\$value)",
                                                "Amount"=>"is_numeric(\$value)",
                                                "AuthorizationCode"=>"is_string(\$value)",
                                                "AuthorizationDate"=>"is_string(\$value)",
                                                "AuthorizationReferenceCode"=>"is_string(\$value)",
                                                "AuthorizationTime"=>"is_string(\$value)",
                                                "AuthorizedThroughCartridge"=>"is_string(\$value)",
                                                "BankBatchID"=>"is_string(\$value)",
                                                "BankSubBatchID"=>"is_string(\$value)",
                                                "BankTransactionID"=>"is_string(\$value)",
                                                "BatchID"=>"is_string(\$value)",
                                                "BillingDate"=>"is_string(\$value)",
                                                "BillingPlanItem"=>"is_string(\$value)",
                                                "CaptureDate"=>"is_string(\$value)",
                                                "CaptureReferenceCode"=>"is_string(\$value)",
                                                "CardCVV2"=>"is_string(\$value)",
                                                "CardDataSource"=>"is_string(\$value)",
                                                "CardExpirationDate"=>"is_string(\$value)",
                                                "CardFollowOnNumber"=>"is_string(\$value)",
                                                "CardHolderAddress1"=>"is_string(\$value)",
                                                "CardHolderAddress2"=>"is_string(\$value)",
                                                "CardHolderCity"=>"is_string(\$value)",
                                                "CardHolderCountry"=>"is_string(\$value)",
                                                "CardHolderDistrict"=>"is_string(\$value)",
                                                "CardHolderName1"=>"is_string(\$value)",
                                                "CardHolderName2"=>"is_string(\$value)",
                                                "CardHolderName"=>"is_string(\$value)",
                                                "CardHolderState"=>"is_string(\$value)",
                                                "CardHolderZip"=>"is_string(\$value)",
                                                "CardNumber"=>"is_string(\$value)",
                                                "CardPresent"=>"is_numeric(\$value)",
                                                "CardType"=>"is_string(\$value)",
                                                "CardValidFrom"=>"is_string(\$value)",
                                                "ChargeAmount"=>"is_numeric(\$value)",
                                                "Client"=>"is_string(\$value)",
                                                "CompanyCode"=>"is_string(\$value)",
                                                "CreationDate"=>"is_string(\$value)",
                                                "CurrencyKey"=>"is_string(\$value)",
                                                "CustTXN"=>"is_string(\$value)",
                                                "CustomerNumber"=>"is_string(\$value)",
                                                "FiscalYear"=>"is_string(\$value)",
                                                "GLAccount"=>"is_string(\$value)",
                                                "LastModificationDate"=>"is_string(\$value)",
                                                "LocationID"=>"is_string(\$value)",
                                                "MerchantID"=>"is_string(\$value)",
                                                "MerchantTXN"=>"is_string(\$value)",
                                                "MerchantTransactionID"=>"is_string(\$value)",
                                                "Message"=>"is_string(\$value)",
                                                "ModifiedStatus"=>"is_numeric(\$value)",
                                                "OrderDate"=>"is_string(\$value)",
                                                "OrderID"=>"is_string(\$value)",
                                                "Origin"=>"is_string(\$value)",
                                                "PONumber"=>"is_string(\$value)",
                                                "PacketOperation"=>"is_numeric(\$value)",
                                                "Preauthorized"=>"is_string(\$value)",
                                                "ReferenceCode"=>"is_string(\$value)",
                                                "ReferenceLineItem"=>"is_string(\$value)",
                                                "ResponseCode"=>"is_string(\$value)",
                                                "SalesDocNumber"=>"is_string(\$value)",
                                                "SettlementAmount"=>"is_numeric(\$value)",
                                                "SettlementDate"=>"is_string(\$value)",
                                                "SettlementReferenceCode"=>"is_string(\$value)",
                                                "ShippingCaptureDate"=>"is_string(\$value)",
                                                "ShippingLocationID"=>"is_string(\$value)",
                                                "ShippingMethod"=>"is_string(\$value)",
                                                "StatusCode"=>"is_numeric(\$value)",
                                                "StatusTXN"=>"is_string(\$value)",
                                                "TaxLevel1"=>"is_numeric(\$value)",
                                                "TaxLevel2"=>"is_numeric(\$value)",
                                                "TaxLevel3"=>"is_numeric(\$value)",
                                                "TaxLevel4"=>"is_numeric(\$value)",
                                                "TerminalID"=>"is_string(\$value)",
                                                "TransactionID"=>"is_numeric(\$value)",
                                                "TransactionType"=>"is_string(\$value)",
                                                "VATNumberCustomer"=>"is_string(\$value)",
                                                "VATNumberMerchant"=>"is_string(\$value)",
                                                "XIID"=>"is_numeric(\$value)",
                                                "InfoItems"=>"is_array(\$value)",
                                                "LineItems"=>"is_array(\$value)",
                                                "SourceSystemInfoItems"=>"is_array(\$value)",
                                                "BlobItems"=>"is_array(\$value)",
                                                "CheckImages"=>"is_array(\$value)"
                                             );


    //
    //protected property fields (data validation is according to WSDL schema)
    //

    protected $AVSAddress;
    protected $AVSCode;
    protected $AVSZipCode;
    protected $AccountingDocNumber;
    protected $ActionCode;
    protected $AdditionalInfo;
    protected $Amount;
    protected $AuthorizationCode;
    protected $AuthorizationDate = "2010-10-21T11:30:00Z";
    protected $AuthorizationReferenceCode = "0";
    protected $AuthorizationTime = "2010-10-21T11:30:00Z";
    protected $AuthorizedThroughCartridge;
    protected $BankBatchID;
    protected $BankSubBatchID;
    protected $BankTransactionID;
    protected $BatchID;
    protected $BillingDate = "2010-10-21T11:30:00Z";
    protected $BillingPlanItem;
    protected $CaptureDate = "2010-10-21T11:30:00Z";
    protected $CaptureReferenceCode;
    protected $CardCVV2;
    protected $CardDataSource;
    protected $CardExpirationDate;
    protected $CardFollowOnNumber;
    protected $CardHolderAddress1;
    protected $CardHolderAddress2;
    protected $CardHolderCity;
    protected $CardHolderCountry;
    protected $CardHolderDistrict;
    protected $CardHolderName1;
    protected $CardHolderName2;
    protected $CardHolderName;
    protected $CardHolderState;
    protected $CardHolderZip;
    protected $CardNumber;
    protected $CardPresent = 0;
    protected $CardType;
    protected $CardValidFrom;
    protected $ChargeAmount = 0;
    protected $Client;
    protected $CompanyCode;
    protected $CreationDate = "2010-10-21T11:30:00Z";
    protected $CurrencyKey;
    protected $CustTXN;
    protected $CustomerNumber;
    protected $FiscalYear;
    protected $GLAccount;
    protected $LastModificationDate = "2010-10-21T11:30:00Z";
    protected $LocationID;
    protected $MerchantID;
    protected $MerchantTXN;
    protected $MerchantTransactionID;
    protected $Message;
    protected $ModifiedStatus = 0; //must havwe a default value 
    protected $OrderDate = "2010-10-21T11:30:00Z";
    protected $OrderID;
    protected $Origin;
    protected $PONumber;
    protected $PacketOperation;
    protected $Preauthorized;
    protected $ReferenceCode;
    protected $ReferenceLineItem;
    protected $ResponseCode;
    protected $SalesDocNumber;
    protected $SettlementAmount;
    protected $SettlementDate = "2010-10-21T11:30:00Z";
    protected $SettlementReferenceCode;
    protected $ShippingCaptureDate = "2010-10-21T11:30:00Z";
    protected $ShippingLocationID;
    protected $ShippingMethod;
    protected $StatusCode = 0; //this one must have a default value to start with  
    protected $StatusTXN;
    protected $TaxLevel1 = 0;
    protected $TaxLevel2 = 0;
    protected $TaxLevel3 = 0;
    protected $TaxLevel4 = 0;
    protected $TerminalID;
    protected $TransactionID;
    protected $TransactionType;
    protected $VATNumberCustomer;
    protected $VATNumberMerchant;
    protected $XIID;
    protected $InfoItems = Array();
    protected $LineItems = Array();
    protected $SourceSystemInfoItems;
    protected $BlobItems;
    protected $CheckImages;

    //
    //Override base class GetPropertyList to supply line item property list
    //
    protected function &GetPropertyList()
    {
        return self::$propertyList;
    }

    //
    //Verify array properties
    //will throw exceptions when validation fails.
    //
    protected function ValidateArrayProperty($propertyName, $propertyValue)
    {
        if ($propertyName == "LineItems"){
            $index = 0;
            foreach ($propertyValue as $lineItem){
                if (!($lineItem instanceof LineItem)){
                    throw new Exception("Transaction::ValidateArrayProperty() - $propertyName has an invalid member at index: $index");
                }

                $index ++;
            }

            return true;
        } else if ($propertyName == "CheckImages")
        {
            $index = 0;
            foreach ($propertyValue as $checkImage){
                if (!($checkImage instanceof CheckImage)){
                    throw new Exception("Transaction::ValidateArrayProperty() - $propertyName has an invalid member at index: $index");
                }

                $index ++;
            }

            return true;
        }

        //IMPORTANT to call parent ValidateArrayProperty
        return parent::ValidateArrayProperty($propertyName, $propertyValue);
    }

    //
    //Add any required properties to the list
    //Note it's a static variable
    //
    static private $requiredPropertiesForAuthorization = array(     "Amount",
                                                                    "CardExpirationDate",
                                                                    "CardNumber",
                                                                    "ChargeAmount",
                                                                    "CurrencyKey");
    static private $requiredPropertiesForSettlement = array(    "BatchID",
                                                                "SettlementAmount",
                                                                "TransactionID");
    //
    //Check for required properties for a Transaction object
    //
    public function IsValid()
    {
        if (isset($this->TransactionID)){
            $requiredProperties = self::$requiredPropertiesForSettlement;
        }else{
            $requiredProperties = self::$requiredPropertiesForAuthorization;
        }

        foreach ($requiredProperties as $property)
        {
            if (!isset($this->$property)){
                throw new Exception("Transaction::IsValid() - Required property $property is not set");
            }
        }

        return true;
    }

    //
    //Constructor
    //
    public function __construct()
    {
        parent::__construct();
    }


    //
    //Transaction specific methods
    //

    public function AddLineItem($lineItem)
    {
        if ($lineItem instanceof LineItem)
        {
            $this->LineItems[] = $lineItem;
        }else{
            throw new Exception("Transaction::AddLineItem() - Input parameter is not an instance of class LineItem");
        }
    }

    public function ClearLineItems()
    {
        unset($this->LineItems);
    }

    public function AddCheckImage($checkImage)
    {
        if ($checkImage instanceof CheckImage)
        {
            $this->CheckImages[] = $checkImage;
        }else{
            throw new Exception("Transaction::AddCheckImage() - Input parameter is not an instance of class CheckImage");
        }
    }

    public function ClearCheckImage()
    {
        unset($this->CheckImages);
    }

}
class_alias('Paymetric\PaymetricTransaction', 'Paymetric_PaymetricTransaction');