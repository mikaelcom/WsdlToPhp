<?php
/**
 * Class file for SOTelVerificationTypeTransactionInfo
 * @date 08/07/2012
 */
/**
 * Class SOTelVerificationTypeTransactionInfo
 * @date 08/07/2012
 */
class SOTelVerificationTypeTransactionInfo extends SOTelVerificationWsdlClass
{
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $TransactionID;
	/**
	 * The TransactionDateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TransactionDateTime;
	/**
	 * The Operation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Operation;
	/**
	 * The PhoneNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneNumber;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Status;
	/**
	 * The StatusCode
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $StatusCode;
	/**
	 * The Data1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Data1;
	/**
	 * The Data2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Data2;
	/**
	 * The Data3
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Data3;
	/**
	 * The TokensUsed
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $TokensUsed;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOTelVerificationTypeError
	 */
	public $Error;
	/**
	 * The Debug
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Debug;
	/**
	 * Constructor
	 * @param int TransactionID
	 * @param string TransactionDateTime
	 * @param string Operation
	 * @param string PhoneNumber
	 * @param string Status
	 * @param int StatusCode
	 * @param string Data1
	 * @param string Data2
	 * @param string Data3
	 * @param int TokensUsed
	 * @param SOTelVerificationTypeError Error
	 * @param string Debug
	 * @return SOTelVerificationTypeTransactionInfo
	 */
	public function __construct($_TransactionID,$_TransactionDateTime = null,$_Operation = null,$_PhoneNumber = null,$_Status = null,$_StatusCode,$_Data1 = null,$_Data2 = null,$_Data3 = null,$_TokensUsed,$_Error = null,$_Debug = null)
	{
		parent::__construct(array('TransactionID'=>$_TransactionID,'TransactionDateTime'=>$_TransactionDateTime,'Operation'=>$_Operation,'PhoneNumber'=>$_PhoneNumber,'Status'=>$_Status,'StatusCode'=>$_StatusCode,'Data1'=>$_Data1,'Data2'=>$_Data2,'Data3'=>$_Data3,'TokensUsed'=>$_TokensUsed,'Error'=>$_Error,'Debug'=>$_Debug));
	}
	/**
	 * Set TransactionID
	 * @param int TransactionID
	 * @return int
	 */
	public function setTransactionID($_TransactionID)
	{
		return ($this->TransactionID = $_TransactionID);
	}
	/**
	 * Get TransactionID
	 * @return int
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * Set TransactionDateTime
	 * @param string TransactionDateTime
	 * @return string
	 */
	public function setTransactionDateTime($_TransactionDateTime)
	{
		return ($this->TransactionDateTime = $_TransactionDateTime);
	}
	/**
	 * Get TransactionDateTime
	 * @return string
	 */
	public function getTransactionDateTime()
	{
		return $this->TransactionDateTime;
	}
	/**
	 * Set Operation
	 * @param string Operation
	 * @return string
	 */
	public function setOperation($_Operation)
	{
		return ($this->Operation = $_Operation);
	}
	/**
	 * Get Operation
	 * @return string
	 */
	public function getOperation()
	{
		return $this->Operation;
	}
	/**
	 * Set PhoneNumber
	 * @param string PhoneNumber
	 * @return string
	 */
	public function setPhoneNumber($_PhoneNumber)
	{
		return ($this->PhoneNumber = $_PhoneNumber);
	}
	/**
	 * Get PhoneNumber
	 * @return string
	 */
	public function getPhoneNumber()
	{
		return $this->PhoneNumber;
	}
	/**
	 * Set Status
	 * @param string Status
	 * @return string
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = $_Status);
	}
	/**
	 * Get Status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set StatusCode
	 * @param int StatusCode
	 * @return int
	 */
	public function setStatusCode($_StatusCode)
	{
		return ($this->StatusCode = $_StatusCode);
	}
	/**
	 * Get StatusCode
	 * @return int
	 */
	public function getStatusCode()
	{
		return $this->StatusCode;
	}
	/**
	 * Set Data1
	 * @param string Data1
	 * @return string
	 */
	public function setData1($_Data1)
	{
		return ($this->Data1 = $_Data1);
	}
	/**
	 * Get Data1
	 * @return string
	 */
	public function getData1()
	{
		return $this->Data1;
	}
	/**
	 * Set Data2
	 * @param string Data2
	 * @return string
	 */
	public function setData2($_Data2)
	{
		return ($this->Data2 = $_Data2);
	}
	/**
	 * Get Data2
	 * @return string
	 */
	public function getData2()
	{
		return $this->Data2;
	}
	/**
	 * Set Data3
	 * @param string Data3
	 * @return string
	 */
	public function setData3($_Data3)
	{
		return ($this->Data3 = $_Data3);
	}
	/**
	 * Get Data3
	 * @return string
	 */
	public function getData3()
	{
		return $this->Data3;
	}
	/**
	 * Set TokensUsed
	 * @param int TokensUsed
	 * @return int
	 */
	public function setTokensUsed($_TokensUsed)
	{
		return ($this->TokensUsed = $_TokensUsed);
	}
	/**
	 * Get TokensUsed
	 * @return int
	 */
	public function getTokensUsed()
	{
		return $this->TokensUsed;
	}
	/**
	 * Set Error
	 * @param Error Error
	 * @return Error
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOTelVerificationTypeError
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set Debug
	 * @param string Debug
	 * @return string
	 */
	public function setDebug($_Debug)
	{
		return ($this->Debug = $_Debug);
	}
	/**
	 * Get Debug
	 * @return string
	 */
	public function getDebug()
	{
		return $this->Debug;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>