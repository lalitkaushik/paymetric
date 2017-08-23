<?php
namespace Paymetric;
//
//static class XiPaySoapOpTemplate to encapsulate XML payload structures 
//
//
class XiPaySoapOpTemplate{

//
//XiPay SoapOp Packet Template Class
//

//
//ALL # started values will be replaced with real data to make XML payload
//$TransactionHeaderReplaceables and $XiPaySoapOpTemplate must strictly match each other
//in terms of replaceables.
//

static private $XiPaySoapOpTemplate = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://Paymetric/XiPaySoap30/message/">
	<SOAP-ENV:Body>
		<ns1:SoapOp>
			<ns1:pPacketsIn>
				<ns1:count>1</ns1:count>
				<ns1:xipayvbresult>false</ns1:xipayvbresult>
				<ns1:packets>
					<ns1:ITransactionHeader>
						<ns1:AVSAddress>#AVSAddress</ns1:AVSAddress>
						<ns1:AVSCode>#AVSCode</ns1:AVSCode>
						<ns1:AVSZipCode>#AVSZipCode</ns1:AVSZipCode>
            <ns1:AccountingDocNumber>#AccountingDocNumber</ns1:AccountingDocNumber>
						<ns1:ActionCode>#ActionCode</ns1:ActionCode>
						<ns1:AdditionalInfo>#AdditionalInfo</ns1:AdditionalInfo>
						<ns1:Amount>#Amount</ns1:Amount>
						<ns1:AuthorizationCode>#AuthorizationCode</ns1:AuthorizationCode>
						<ns1:AuthorizationDate>#AuthorizationDate</ns1:AuthorizationDate>
						<ns1:AuthorizationReferenceCode>#AuthorizationReferenceCode</ns1:AuthorizationReferenceCode>
						<ns1:AuthorizationTime>#AuthorizationTime</ns1:AuthorizationTime>
						<ns1:AuthorizedThroughCartridge>#AuthorizedThroughCartridge</ns1:AuthorizedThroughCartridge>
						<ns1:BankBatchID>#BankBatchID</ns1:BankBatchID>
						<ns1:BankSubBatchID>#BankSubBatchID</ns1:BankSubBatchID>
						<ns1:BankTransactionID>#BankTransactionID</ns1:BankTransactionID>
            <ns1:BatchID>#BatchID</ns1:BatchID>
						<ns1:BillingDate>#BillingDate</ns1:BillingDate>
						<ns1:BillingPlanItem>#BillingPlanItem</ns1:BillingPlanItem>
						<ns1:CaptureDate>#CaptureDate</ns1:CaptureDate>
						<ns1:CaptureReferenceCode>#CaptureReferenceCode</ns1:CaptureReferenceCode>
						<ns1:CardCVV2>#CardCVV2</ns1:CardCVV2>
						<ns1:CardDataSource>#CardDataSource</ns1:CardDataSource>
						<ns1:CardExpirationDate>#CardExpirationDate</ns1:CardExpirationDate>
						<ns1:CardFollowOnNumber>#CardFollowOnNumber</ns1:CardFollowOnNumber>
						<ns1:CardHolderAddress1>#CardHolderAddress1</ns1:CardHolderAddress1>
						<ns1:CardHolderAddress2>#CardHolderAddress2</ns1:CardHolderAddress2>
						<ns1:CardHolderCity>#CardHolderCity</ns1:CardHolderCity>
						<ns1:CardHolderCountry>#CardHolderCountry</ns1:CardHolderCountry>
						<ns1:CardHolderDistrict>#CardHolderDistrict</ns1:CardHolderDistrict>
						<ns1:CardHolderName1>#CardHolderName1</ns1:CardHolderName1>
						<ns1:CardHolderName2>#CardHolderName2</ns1:CardHolderName2>
						<ns1:CardHolderName>#CardHolderName</ns1:CardHolderName>
						<ns1:CardHolderState>#CardHolderState</ns1:CardHolderState>
						<ns1:CardHolderZip>#CardHolderZip</ns1:CardHolderZip>
						<ns1:CardNumber>#CardNumber</ns1:CardNumber>
						<ns1:CardPresent>#CardPresent</ns1:CardPresent>
						<ns1:CardType>#CardType</ns1:CardType>
						<ns1:CardValidFrom>#CardValidFrom</ns1:CardValidFrom>
						<ns1:ChargeAmount>#ChargeAmount</ns1:ChargeAmount>
						<ns1:Client>#Client</ns1:Client>
						<ns1:CompanyCode>#CompanyCode</ns1:CompanyCode>
						<ns1:CreationDate>#CreationDate</ns1:CreationDate>
						<ns1:CurrencyKey>#CurrencyKey</ns1:CurrencyKey>
						<ns1:CustTXN>#CustTXN</ns1:CustTXN>
            <ns1:CustomerNumber>#CustomerNumber</ns1:CustomerNumber>
						<ns1:FiscalYear>#FiscalYear</ns1:FiscalYear>
						<ns1:GLAccount>#GLAccount</ns1:GLAccount>
						<ns1:LastModificationDate>#LastModificationDate</ns1:LastModificationDate>
						<ns1:LocationID>#LocationID</ns1:LocationID>
						<ns1:MerchantID>#MerchantID</ns1:MerchantID>
            <ns1:MerchantTXN></ns1:MerchantTXN>
						<ns1:MerchantTransactionID>#MerchantTransactionID</ns1:MerchantTransactionID>
						<ns1:Message>#Message</ns1:Message>
						<ns1:ModifiedStatus>#ModifiedStatus</ns1:ModifiedStatus>
						<ns1:OrderDate>#OrderDate</ns1:OrderDate>
						<ns1:OrderID>#OrderID</ns1:OrderID>
						<ns1:Origin>#Origin</ns1:Origin>
						<ns1:PONumber>#PONumber</ns1:PONumber>
						<ns1:PacketOperation>#PacketOperation</ns1:PacketOperation>
						<ns1:Preauthorized></ns1:Preauthorized>
            <ns1:ReferenceCode>#ReferenceCode</ns1:ReferenceCode>
            <ns1:ReferenceLineItem>#ReferenceLineItem</ns1:ReferenceLineItem>
						<ns1:ResponseCode>#ResponseCode</ns1:ResponseCode>
						<ns1:SalesDocNumber>#SalesDocNumber</ns1:SalesDocNumber>
						<ns1:SettlementAmount>#SettlementAmount</ns1:SettlementAmount>
						<ns1:SettlementDate>#SettlementDate</ns1:SettlementDate>
						<ns1:SettlementReferenceCode>#SettlementReferenceCode</ns1:SettlementReferenceCode>
						<ns1:ShippingCaptureDate>#ShippingCaptureDate</ns1:ShippingCaptureDate>
						<ns1:ShippingLocationID>#ShippingLocationID</ns1:ShippingLocationID>
            <ns1:ShippingMethod>#ShippingMethod</ns1:ShippingMethod>
						<ns1:StatusCode>#StatusCode</ns1:StatusCode>
						<ns1:StatusTXN>#StatusTXN</ns1:StatusTXN>
						<ns1:TaxLevel1>#TaxLevel1</ns1:TaxLevel1>
						<ns1:TaxLevel2>#TaxLevel2</ns1:TaxLevel2>
						<ns1:TaxLevel3>#TaxLevel3</ns1:TaxLevel3>
						<ns1:TaxLevel4>#TaxLevel4</ns1:TaxLevel4>
						<ns1:TerminalID>#TerminalID</ns1:TerminalID>
            <ns1:TransactionID>#TransactionID</ns1:TransactionID>
						<ns1:TransactionType>#TransactionType</ns1:TransactionType>
						<ns1:VATNumberCustomer>#VATNumberCustomer</ns1:VATNumberCustomer>
            <ns1:VATNumberMerchant>#VATNumberMerchant</ns1:VATNumberMerchant>
						<ns1:XIID>#XIID</ns1:XIID>
						<ns1:InfoItems>#InfoItems</ns1:InfoItems>
						<ns1:LineItems>#LineItems</ns1:LineItems>
            <SourceSystemInfoItems>#SourceSystemInfoItems</SourceSystemInfoItems>
            <BlobItems>#BlobItems</BlobItems>
            <CheckImages>#CheckImages</CheckImages>
          </ns1:ITransactionHeader>
				</ns1:packets>
			</ns1:pPacketsIn>
		</ns1:SoapOp>
	</SOAP-ENV:Body>
</SOAP-ENV:Envelope>
XML;

//
//When supplying data to build authorize payload, the following parameters must
//all present in the order as defined in the following array.
//
static private $TransactionHeaderReplaceables;

static private function &GetReplaceables()
{
  if (!isset(self::$TransactionHeaderReplaceables)){
    preg_match_all("/#[A-Za-z0-9]+/", self::$XiPaySoapOpTemplate, self::$TransactionHeaderReplaceables);
  }

  return self::$TransactionHeaderReplaceables[0];
}


//
//Prepare XML for a transaction object to authorize
//
static public function PrepareTransactionXML($transaction)
{
	$transaction->IsValid(); // will blow up if it's not...
	$transactionData;

	foreach(self::GetReplaceables() as $name)
	{
		$property = substr($name, 1);
		if (!is_array($transaction->$property)){
			$transactionData[] = htmlentities($transaction->$property);
		}else{

			//handle info items
			if ($property == "InfoItems" && is_array($transaction->$property)){

				$infoItems = "";
				foreach($transaction->InfoItems as $key => $value)
				{
					$infoItems .= self::PrepareInfoItemXML($key, $value);
				}

				$transactionData[] = $infoItems;

			}else if ($property == "LineItems" && is_array($transaction->$property)){

				$lineItemXML = "";
				foreach($transaction->$property as $lineItem){
					$lineItemXML .= self::PrepareLineItemXML($lineItem);
				}

				$transactionData[] = $lineItemXML;
			}else{

				$transactionData[] = "";
			}
		}
	}

	return str_replace(self::GetReplaceables(), $transactionData, self::$XiPaySoapOpTemplate);
}

//
// Line item template
//
static private $XiPayLineItemTemplate = <<<XML
<ns1:LineItem>
	<ns1:UPC>#UPC</ns1:UPC>
	<ns1:MaterialNumber>#MaterialNumber</ns1:MaterialNumber>
	<ns1:Description>#Description</ns1:Description>
	<ns1:SalesDocItemNumber>#SalesDocItemNumber</ns1:SalesDocItemNumber>
	<ns1:ActualInvoicedQuantity>#ActualInvoicedQuantity</ns1:ActualInvoicedQuantity>
	<ns1:SalesUnit>#SalesUnit</ns1:SalesUnit>
	<ns1:TaxAmount>#TaxAmount</ns1:TaxAmount>
	<ns1:NetValue>#NetValue</ns1:NetValue>
	<ns1:InfoItems>#InfoItems</ns1:InfoItems>
</ns1:LineItem>
XML;

static private $LineItemReplaceables;

//
//internal function to extract replaceable variables
//
static private function &GetLineItemReplaceables()
{
	if (!isset(self::$LineItemReplaceables)){
	    preg_match_all("/#[A-Za-z0-9]+/", self::$XiPayLineItemTemplate, self::$LineItemReplaceables);
	}

	return self::$LineItemReplaceables[0];
}

//
//Translate LineItem data into XML
//
static public function PrepareLineItemXML($lineItem){

	$lineItem->IsValid(); // will blow up if it's not...

	foreach(self::GetLineItemReplaceables() as $name)
	{
		$property = substr($name, 1);
		if ($property <> "InfoItems"){
			$lineItemData[] = htmlentities($lineItem->$property);
		}else{

			//handle info items
			if ($property == "InfoItems" && is_array($lineItem->$property)){

				$infoItems = "";
				foreach($lineItem->InfoItems as $key => $value)
				{
					$infoItems .= self::PrepareInfoItemXML($key, $value);
				}

				$lineItemData[] = $infoItems;
			}
		}
	}

	return str_replace(self::GetLineItemReplaceables(),$lineItemData, self::$XiPayLineItemTemplate);
}

//
//XML template for info items
//
static public $XiPayInfoItemTemplate = <<<XML
<ns1:InfoItem>
  <ns1:Key>#Key</ns1:Key>
  <ns1:Value>#Value</ns1:Value>
</ns1:InfoItem>
XML;

//
//translate info item into XML
//
static public function PrepareInfoItemXML($key, $value)
{

	return str_replace( array("#Key", "#Value"), array(htmlentities($key), htmlentities($value)), self::$XiPayInfoItemTemplate);
}

//
//Check image XML template
//
static public $XiPayCheckImageTemplate = <<<XML
<ns1:CheckImage>
  <ns1:Description>#Description</ns1:Description>
  <ns1:Format>#Format</ns1:Format>
  <ns1:Data>#Data</ns1:Data>
</ns1:CheckImage>
XML;

//
//Translate check image object into XML
//
static public function PrepareCheckImageXML($checkImage)
{

	return str_replace( array("#Description", "#Format", "#Data"),
						array(htmlentities($checkImage->Description), htmlentities($checkImage->Format), htmlentities($checkImage->Data)),
						self::$XiPayCheckImageTemplate);
}
}
class_alias('Paymetric\XiPaySoapOpTemplate', 'Paymetric_XiPaySoapOpTemplate');