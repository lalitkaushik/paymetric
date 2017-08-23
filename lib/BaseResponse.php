<?php
namespace Paymetric;
//
// Base response object with status code and message
//
define("STATUS_OK", 0);             //Call successfully made to server and get a response, 
                                    //though response may NOT be positive (like authorization failed)
define("STATUS_CLIENT_ERROR", 1);   //Call failed within the realm of client (no response obtained)
define("STATUS_SERVER_ERROR", 2);   //Call has been attempted and comes back with server exceptions

class BaseResponse 
{
    public $Status;
    public $Message;
}
class_alias('Paymetric\BaseResponse', 'Paymetric_BaseResponse');