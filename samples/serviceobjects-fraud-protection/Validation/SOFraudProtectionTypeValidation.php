<?php
/**
 * Class file for SOFraudProtectionTypeValidation
 * @date 08/07/2012
 */
/**
 * Class SOFraudProtectionTypeValidation
 * @date 08/07/2012
 */
class SOFraudProtectionTypeValidation extends SOFraudProtectionWsdlClass
{
	/**
	 * The NameStatusCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameStatusCode;
	/**
	 * The NameStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameStatus;
	/**
	 * The NameScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameScore;
	/**
	 * The NameError
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameError;
	/**
	 * The EmailStatusCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmailStatusCode;
	/**
	 * The EmailStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmailStatus;
	/**
	 * The EmailScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmailScore;
	/**
	 * The EmailError
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmailError;
	/**
	 * The AddressStatusCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressStatusCode;
	/**
	 * The AddressStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressStatus;
	/**
	 * The AddressScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressScore;
	/**
	 * The AddressError
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressError;
	/**
	 * The PhoneStatusCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneStatusCode;
	/**
	 * The PhoneStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneStatus;
	/**
	 * The PhoneScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneScore;
	/**
	 * The PhoneError
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneError;
	/**
	 * The IPStatusCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPStatusCode;
	/**
	 * The IPStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPStatus;
	/**
	 * The IPScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPScore;
	/**
	 * The IPError
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPError;
	/**
	 * The Score
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Score;
	/**
	 * The Timers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Timers;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFraudProtectionTypeErr
	 */
	public $Error;
	/**
	 * Constructor
	 * @param string NameStatusCode
	 * @param string NameStatus
	 * @param string NameScore
	 * @param string NameError
	 * @param string EmailStatusCode
	 * @param string EmailStatus
	 * @param string EmailScore
	 * @param string EmailError
	 * @param string AddressStatusCode
	 * @param string AddressStatus
	 * @param string AddressScore
	 * @param string AddressError
	 * @param string PhoneStatusCode
	 * @param string PhoneStatus
	 * @param string PhoneScore
	 * @param string PhoneError
	 * @param string IPStatusCode
	 * @param string IPStatus
	 * @param string IPScore
	 * @param string IPError
	 * @param string Score
	 * @param string Timers
	 * @param SOFraudProtectionTypeErr Error
	 * @return SOFraudProtectionTypeValidation
	 */
	public function __construct($_NameStatusCode = null,$_NameStatus = null,$_NameScore = null,$_NameError = null,$_EmailStatusCode = null,$_EmailStatus = null,$_EmailScore = null,$_EmailError = null,$_AddressStatusCode = null,$_AddressStatus = null,$_AddressScore = null,$_AddressError = null,$_PhoneStatusCode = null,$_PhoneStatus = null,$_PhoneScore = null,$_PhoneError = null,$_IPStatusCode = null,$_IPStatus = null,$_IPScore = null,$_IPError = null,$_Score = null,$_Timers = null,$_Error = null)
	{
		parent::__construct(array('NameStatusCode'=>$_NameStatusCode,'NameStatus'=>$_NameStatus,'NameScore'=>$_NameScore,'NameError'=>$_NameError,'EmailStatusCode'=>$_EmailStatusCode,'EmailStatus'=>$_EmailStatus,'EmailScore'=>$_EmailScore,'EmailError'=>$_EmailError,'AddressStatusCode'=>$_AddressStatusCode,'AddressStatus'=>$_AddressStatus,'AddressScore'=>$_AddressScore,'AddressError'=>$_AddressError,'PhoneStatusCode'=>$_PhoneStatusCode,'PhoneStatus'=>$_PhoneStatus,'PhoneScore'=>$_PhoneScore,'PhoneError'=>$_PhoneError,'IPStatusCode'=>$_IPStatusCode,'IPStatus'=>$_IPStatus,'IPScore'=>$_IPScore,'IPError'=>$_IPError,'Score'=>$_Score,'Timers'=>$_Timers,'Error'=>$_Error));
	}
	/**
	 * Set NameStatusCode
	 * @param string NameStatusCode
	 * @return string
	 */
	public function setNameStatusCode($_NameStatusCode)
	{
		return ($this->NameStatusCode = $_NameStatusCode);
	}
	/**
	 * Get NameStatusCode
	 * @return string
	 */
	public function getNameStatusCode()
	{
		return $this->NameStatusCode;
	}
	/**
	 * Set NameStatus
	 * @param string NameStatus
	 * @return string
	 */
	public function setNameStatus($_NameStatus)
	{
		return ($this->NameStatus = $_NameStatus);
	}
	/**
	 * Get NameStatus
	 * @return string
	 */
	public function getNameStatus()
	{
		return $this->NameStatus;
	}
	/**
	 * Set NameScore
	 * @param string NameScore
	 * @return string
	 */
	public function setNameScore($_NameScore)
	{
		return ($this->NameScore = $_NameScore);
	}
	/**
	 * Get NameScore
	 * @return string
	 */
	public function getNameScore()
	{
		return $this->NameScore;
	}
	/**
	 * Set NameError
	 * @param string NameError
	 * @return string
	 */
	public function setNameError($_NameError)
	{
		return ($this->NameError = $_NameError);
	}
	/**
	 * Get NameError
	 * @return string
	 */
	public function getNameError()
	{
		return $this->NameError;
	}
	/**
	 * Set EmailStatusCode
	 * @param string EmailStatusCode
	 * @return string
	 */
	public function setEmailStatusCode($_EmailStatusCode)
	{
		return ($this->EmailStatusCode = $_EmailStatusCode);
	}
	/**
	 * Get EmailStatusCode
	 * @return string
	 */
	public function getEmailStatusCode()
	{
		return $this->EmailStatusCode;
	}
	/**
	 * Set EmailStatus
	 * @param string EmailStatus
	 * @return string
	 */
	public function setEmailStatus($_EmailStatus)
	{
		return ($this->EmailStatus = $_EmailStatus);
	}
	/**
	 * Get EmailStatus
	 * @return string
	 */
	public function getEmailStatus()
	{
		return $this->EmailStatus;
	}
	/**
	 * Set EmailScore
	 * @param string EmailScore
	 * @return string
	 */
	public function setEmailScore($_EmailScore)
	{
		return ($this->EmailScore = $_EmailScore);
	}
	/**
	 * Get EmailScore
	 * @return string
	 */
	public function getEmailScore()
	{
		return $this->EmailScore;
	}
	/**
	 * Set EmailError
	 * @param string EmailError
	 * @return string
	 */
	public function setEmailError($_EmailError)
	{
		return ($this->EmailError = $_EmailError);
	}
	/**
	 * Get EmailError
	 * @return string
	 */
	public function getEmailError()
	{
		return $this->EmailError;
	}
	/**
	 * Set AddressStatusCode
	 * @param string AddressStatusCode
	 * @return string
	 */
	public function setAddressStatusCode($_AddressStatusCode)
	{
		return ($this->AddressStatusCode = $_AddressStatusCode);
	}
	/**
	 * Get AddressStatusCode
	 * @return string
	 */
	public function getAddressStatusCode()
	{
		return $this->AddressStatusCode;
	}
	/**
	 * Set AddressStatus
	 * @param string AddressStatus
	 * @return string
	 */
	public function setAddressStatus($_AddressStatus)
	{
		return ($this->AddressStatus = $_AddressStatus);
	}
	/**
	 * Get AddressStatus
	 * @return string
	 */
	public function getAddressStatus()
	{
		return $this->AddressStatus;
	}
	/**
	 * Set AddressScore
	 * @param string AddressScore
	 * @return string
	 */
	public function setAddressScore($_AddressScore)
	{
		return ($this->AddressScore = $_AddressScore);
	}
	/**
	 * Get AddressScore
	 * @return string
	 */
	public function getAddressScore()
	{
		return $this->AddressScore;
	}
	/**
	 * Set AddressError
	 * @param string AddressError
	 * @return string
	 */
	public function setAddressError($_AddressError)
	{
		return ($this->AddressError = $_AddressError);
	}
	/**
	 * Get AddressError
	 * @return string
	 */
	public function getAddressError()
	{
		return $this->AddressError;
	}
	/**
	 * Set PhoneStatusCode
	 * @param string PhoneStatusCode
	 * @return string
	 */
	public function setPhoneStatusCode($_PhoneStatusCode)
	{
		return ($this->PhoneStatusCode = $_PhoneStatusCode);
	}
	/**
	 * Get PhoneStatusCode
	 * @return string
	 */
	public function getPhoneStatusCode()
	{
		return $this->PhoneStatusCode;
	}
	/**
	 * Set PhoneStatus
	 * @param string PhoneStatus
	 * @return string
	 */
	public function setPhoneStatus($_PhoneStatus)
	{
		return ($this->PhoneStatus = $_PhoneStatus);
	}
	/**
	 * Get PhoneStatus
	 * @return string
	 */
	public function getPhoneStatus()
	{
		return $this->PhoneStatus;
	}
	/**
	 * Set PhoneScore
	 * @param string PhoneScore
	 * @return string
	 */
	public function setPhoneScore($_PhoneScore)
	{
		return ($this->PhoneScore = $_PhoneScore);
	}
	/**
	 * Get PhoneScore
	 * @return string
	 */
	public function getPhoneScore()
	{
		return $this->PhoneScore;
	}
	/**
	 * Set PhoneError
	 * @param string PhoneError
	 * @return string
	 */
	public function setPhoneError($_PhoneError)
	{
		return ($this->PhoneError = $_PhoneError);
	}
	/**
	 * Get PhoneError
	 * @return string
	 */
	public function getPhoneError()
	{
		return $this->PhoneError;
	}
	/**
	 * Set IPStatusCode
	 * @param string IPStatusCode
	 * @return string
	 */
	public function setIPStatusCode($_IPStatusCode)
	{
		return ($this->IPStatusCode = $_IPStatusCode);
	}
	/**
	 * Get IPStatusCode
	 * @return string
	 */
	public function getIPStatusCode()
	{
		return $this->IPStatusCode;
	}
	/**
	 * Set IPStatus
	 * @param string IPStatus
	 * @return string
	 */
	public function setIPStatus($_IPStatus)
	{
		return ($this->IPStatus = $_IPStatus);
	}
	/**
	 * Get IPStatus
	 * @return string
	 */
	public function getIPStatus()
	{
		return $this->IPStatus;
	}
	/**
	 * Set IPScore
	 * @param string IPScore
	 * @return string
	 */
	public function setIPScore($_IPScore)
	{
		return ($this->IPScore = $_IPScore);
	}
	/**
	 * Get IPScore
	 * @return string
	 */
	public function getIPScore()
	{
		return $this->IPScore;
	}
	/**
	 * Set IPError
	 * @param string IPError
	 * @return string
	 */
	public function setIPError($_IPError)
	{
		return ($this->IPError = $_IPError);
	}
	/**
	 * Get IPError
	 * @return string
	 */
	public function getIPError()
	{
		return $this->IPError;
	}
	/**
	 * Set Score
	 * @param string Score
	 * @return string
	 */
	public function setScore($_Score)
	{
		return ($this->Score = $_Score);
	}
	/**
	 * Get Score
	 * @return string
	 */
	public function getScore()
	{
		return $this->Score;
	}
	/**
	 * Set Timers
	 * @param string Timers
	 * @return string
	 */
	public function setTimers($_Timers)
	{
		return ($this->Timers = $_Timers);
	}
	/**
	 * Get Timers
	 * @return string
	 */
	public function getTimers()
	{
		return $this->Timers;
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOFraudProtectionTypeErr
	 */
	public function getError()
	{
		return $this->Error;
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