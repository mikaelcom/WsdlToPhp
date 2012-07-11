<?php
/**
 * Class file for SOTelVerificationTypeTelephoneInfo
 * @date 08/07/2012
 */
/**
 * Class SOTelVerificationTypeTelephoneInfo
 * @date 08/07/2012
 */
class SOTelVerificationTypeTelephoneInfo extends SOTelVerificationWsdlClass
{
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Country;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The TokensUsed
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $TokensUsed;
	/**
	 * The VerificationCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $VerificationCode;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $TransactionID;
	/**
	 * The Message
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Message;
	/**
	 * The CallerID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CallerID;
	/**
	 * The CallerIDName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CallerIDName;
	/**
	 * The VerificationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $VerificationDate;
	/**
	 * The Provider
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOTelVerificationTypeProviderInfo
	 */
	public $Provider;
	/**
	 * The Contact
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOTelVerificationTypeContactInfo
	 */
	public $Contact;
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
	 * @param string Country
	 * @param string Description
	 * @param int TokensUsed
	 * @param string VerificationCode
	 * @param int TransactionID
	 * @param string Message
	 * @param string CallerID
	 * @param string CallerIDName
	 * @param string VerificationDate
	 * @param SOTelVerificationTypeProviderInfo Provider
	 * @param SOTelVerificationTypeContactInfo Contact
	 * @param SOTelVerificationTypeError Error
	 * @param string Debug
	 * @return SOTelVerificationTypeTelephoneInfo
	 */
	public function __construct($_Country = null,$_Description = null,$_TokensUsed,$_VerificationCode = null,$_TransactionID,$_Message = null,$_CallerID = null,$_CallerIDName = null,$_VerificationDate = null,$_Provider = null,$_Contact = null,$_Error = null,$_Debug = null)
	{
		parent::__construct(array('Country'=>$_Country,'Description'=>$_Description,'TokensUsed'=>$_TokensUsed,'VerificationCode'=>$_VerificationCode,'TransactionID'=>$_TransactionID,'Message'=>$_Message,'CallerID'=>$_CallerID,'CallerIDName'=>$_CallerIDName,'VerificationDate'=>$_VerificationDate,'Provider'=>$_Provider,'Contact'=>$_Contact,'Error'=>$_Error,'Debug'=>$_Debug));
	}
	/**
	 * Set Country
	 * @param string Country
	 * @return string
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = $_Country);
	}
	/**
	 * Get Country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->Country;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
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
	 * Set VerificationCode
	 * @param string VerificationCode
	 * @return string
	 */
	public function setVerificationCode($_VerificationCode)
	{
		return ($this->VerificationCode = $_VerificationCode);
	}
	/**
	 * Get VerificationCode
	 * @return string
	 */
	public function getVerificationCode()
	{
		return $this->VerificationCode;
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
	 * Set Message
	 * @param string Message
	 * @return string
	 */
	public function setMessage($_Message)
	{
		return ($this->Message = $_Message);
	}
	/**
	 * Get Message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->Message;
	}
	/**
	 * Set CallerID
	 * @param string CallerID
	 * @return string
	 */
	public function setCallerID($_CallerID)
	{
		return ($this->CallerID = $_CallerID);
	}
	/**
	 * Get CallerID
	 * @return string
	 */
	public function getCallerID()
	{
		return $this->CallerID;
	}
	/**
	 * Set CallerIDName
	 * @param string CallerIDName
	 * @return string
	 */
	public function setCallerIDName($_CallerIDName)
	{
		return ($this->CallerIDName = $_CallerIDName);
	}
	/**
	 * Get CallerIDName
	 * @return string
	 */
	public function getCallerIDName()
	{
		return $this->CallerIDName;
	}
	/**
	 * Set VerificationDate
	 * @param string VerificationDate
	 * @return string
	 */
	public function setVerificationDate($_VerificationDate)
	{
		return ($this->VerificationDate = $_VerificationDate);
	}
	/**
	 * Get VerificationDate
	 * @return string
	 */
	public function getVerificationDate()
	{
		return $this->VerificationDate;
	}
	/**
	 * Set Provider
	 * @param ProviderInfo Provider
	 * @return ProviderInfo
	 */
	public function setProvider($_Provider)
	{
		return ($this->Provider = $_Provider);
	}
	/**
	 * Get Provider
	 * @return SOTelVerificationTypeProviderInfo
	 */
	public function getProvider()
	{
		return $this->Provider;
	}
	/**
	 * Set Contact
	 * @param ContactInfo Contact
	 * @return ContactInfo
	 */
	public function setContact($_Contact)
	{
		return ($this->Contact = $_Contact);
	}
	/**
	 * Get Contact
	 * @return SOTelVerificationTypeContactInfo
	 */
	public function getContact()
	{
		return $this->Contact;
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