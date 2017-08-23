<?php
namespace Paymetric;
//
//Transaction response used for Authorize, Manual Authorize, Capture and Void.
//
//include_once(Mage::getBaseDir('lib'). DS . 'paymetric/BaseResponse.php');
use \Paymetric\BaseResponse;
class TransactionResponse extends BaseResponse
{
    public $Transaction;
}
class_alias('Paymetric\TransactionResponse', 'Paymetric_TransactionResponse');