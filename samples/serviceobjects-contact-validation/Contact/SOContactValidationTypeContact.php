<?php
/**
 * Class file for SOContactValidationTypeContact
 * @date 08/07/2012
 */
/**
 * Class SOContactValidationTypeContact
 * @date 08/07/2012
 */
class SOContactValidationTypeContact extends SOContactValidationWsdlClass
{
	/**
	 * The NameCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameCode;
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
	 * The EmailCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmailCode;
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
	 * The AddressCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressCode;
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
	 * The AddressTypeCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressTypeCode;
	/**
	 * The AddressTypeStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressTypeStatus;
	/**
	 * The AddressTypeScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressTypeScore;
	/**
	 * The AddressTypeError
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressTypeError;
	/**
	 * The AddressType2Code
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressType2Code;
	/**
	 * The AddressType2Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressType2Status;
	/**
	 * The AddressType2Score
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressType2Score;
	/**
	 * The AddressType2Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressType2Error;
	/**
	 * The PhoneCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneCode;
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
	 * The Phone2Code
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Phone2Code;
	/**
	 * The Phone2Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Phone2Status;
	/**
	 * The Phone2Score
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Phone2Score;
	/**
	 * The Phone2Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Phone2Error;
	/**
	 * The PhoneAddressCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneAddressCode;
	/**
	 * The PhoneAddressStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneAddressStatus;
	/**
	 * The PhoneAddressScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneAddressScore;
	/**
	 * The PhoneAddressError
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneAddressError;
	/**
	 * The PhoneAddress2Code
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneAddress2Code;
	/**
	 * The PhoneAddress2Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneAddress2Status;
	/**
	 * The PhoneAddress2Score
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneAddress2Score;
	/**
	 * The PhoneAddress2Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneAddress2Error;
	/**
	 * The PhoneTypeCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneTypeCode;
	/**
	 * The PhoneTypeStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneTypeStatus;
	/**
	 * The PhoneTypeScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneTypeScore;
	/**
	 * The PhoneTypeError
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneTypeError;
	/**
	 * The PhoneType2Code
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneType2Code;
	/**
	 * The PhoneType2Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneType2Status;
	/**
	 * The PhoneType2Score
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneType2Score;
	/**
	 * The PhoneType2Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneType2Error;
	/**
	 * The IPCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPCode;
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
	 * The IPNetworkCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPNetworkCode;
	/**
	 * The IPNetworkStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPNetworkStatus;
	/**
	 * The IPNetworkScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPNetworkScore;
	/**
	 * The IPError
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IPError;
	/**
	 * The PhoneAppendStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneAppendStatus;
	/**
	 * The PhoneAppendError
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneAppendError;
	/**
	 * The NameToPhoneCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameToPhoneCode;
	/**
	 * The NameToPhoneStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameToPhoneStatus;
	/**
	 * The NameToPhoneScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameToPhoneScore;
	/**
	 * The AddressToPhoneCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressToPhoneCode;
	/**
	 * The AddressToPhoneStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressToPhoneStatus;
	/**
	 * The AddressToPhoneScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressToPhoneScore;
	/**
	 * The NameToAddressCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameToAddressCode;
	/**
	 * The NameToAddressStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameToAddressStatus;
	/**
	 * The NameToAddressScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameToAddressScore;
	/**
	 * The NameToEmailCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameToEmailCode;
	/**
	 * The NameToEmailStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameToEmailStatus;
	/**
	 * The NameToEmailScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameToEmailScore;
	/**
	 * The AddressToIPCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressToIPCode;
	/**
	 * The AddressToIPStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressToIPStatus;
	/**
	 * The AddressToIPScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressToIPScore;
	/**
	 * The NameAlternative
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameAlternative;
	/**
	 * The NameAlternativeDesc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $NameAlternativeDesc;
	/**
	 * The PhoneNumberAlternative
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneNumberAlternative;
	/**
	 * The PhoneNumberAlternativeDesc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneNumberAlternativeDesc;
	/**
	 * The AddressAlternative
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressAlternative;
	/**
	 * The AddressAlternativeDesc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressAlternativeDesc;
	/**
	 * The ContactScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ContactScore;
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
	 * @var SOContactValidationTypeErr
	 */
	public $Error;
	/**
	 * Constructor
	 * @param string NameCode
	 * @param string NameStatus
	 * @param string NameScore
	 * @param string NameError
	 * @param string EmailCode
	 * @param string EmailStatus
	 * @param string EmailScore
	 * @param string EmailError
	 * @param string AddressCode
	 * @param string AddressStatus
	 * @param string AddressScore
	 * @param string AddressError
	 * @param string AddressTypeCode
	 * @param string AddressTypeStatus
	 * @param string AddressTypeScore
	 * @param string AddressTypeError
	 * @param string AddressType2Code
	 * @param string AddressType2Status
	 * @param string AddressType2Score
	 * @param string AddressType2Error
	 * @param string PhoneCode
	 * @param string PhoneStatus
	 * @param string PhoneScore
	 * @param string PhoneError
	 * @param string Phone2Code
	 * @param string Phone2Status
	 * @param string Phone2Score
	 * @param string Phone2Error
	 * @param string PhoneAddressCode
	 * @param string PhoneAddressStatus
	 * @param string PhoneAddressScore
	 * @param string PhoneAddressError
	 * @param string PhoneAddress2Code
	 * @param string PhoneAddress2Status
	 * @param string PhoneAddress2Score
	 * @param string PhoneAddress2Error
	 * @param string PhoneTypeCode
	 * @param string PhoneTypeStatus
	 * @param string PhoneTypeScore
	 * @param string PhoneTypeError
	 * @param string PhoneType2Code
	 * @param string PhoneType2Status
	 * @param string PhoneType2Score
	 * @param string PhoneType2Error
	 * @param string IPCode
	 * @param string IPStatus
	 * @param string IPScore
	 * @param string IPNetworkCode
	 * @param string IPNetworkStatus
	 * @param string IPNetworkScore
	 * @param string IPError
	 * @param string PhoneAppendStatus
	 * @param string PhoneAppendError
	 * @param string NameToPhoneCode
	 * @param string NameToPhoneStatus
	 * @param string NameToPhoneScore
	 * @param string AddressToPhoneCode
	 * @param string AddressToPhoneStatus
	 * @param string AddressToPhoneScore
	 * @param string NameToAddressCode
	 * @param string NameToAddressStatus
	 * @param string NameToAddressScore
	 * @param string NameToEmailCode
	 * @param string NameToEmailStatus
	 * @param string NameToEmailScore
	 * @param string AddressToIPCode
	 * @param string AddressToIPStatus
	 * @param string AddressToIPScore
	 * @param string NameAlternative
	 * @param string NameAlternativeDesc
	 * @param string PhoneNumberAlternative
	 * @param string PhoneNumberAlternativeDesc
	 * @param string AddressAlternative
	 * @param string AddressAlternativeDesc
	 * @param string ContactScore
	 * @param string Timers
	 * @param SOContactValidationTypeErr Error
	 * @return SOContactValidationTypeContact
	 */
	public function __construct($_NameCode = null,$_NameStatus = null,$_NameScore = null,$_NameError = null,$_EmailCode = null,$_EmailStatus = null,$_EmailScore = null,$_EmailError = null,$_AddressCode = null,$_AddressStatus = null,$_AddressScore = null,$_AddressError = null,$_AddressTypeCode = null,$_AddressTypeStatus = null,$_AddressTypeScore = null,$_AddressTypeError = null,$_AddressType2Code = null,$_AddressType2Status = null,$_AddressType2Score = null,$_AddressType2Error = null,$_PhoneCode = null,$_PhoneStatus = null,$_PhoneScore = null,$_PhoneError = null,$_Phone2Code = null,$_Phone2Status = null,$_Phone2Score = null,$_Phone2Error = null,$_PhoneAddressCode = null,$_PhoneAddressStatus = null,$_PhoneAddressScore = null,$_PhoneAddressError = null,$_PhoneAddress2Code = null,$_PhoneAddress2Status = null,$_PhoneAddress2Score = null,$_PhoneAddress2Error = null,$_PhoneTypeCode = null,$_PhoneTypeStatus = null,$_PhoneTypeScore = null,$_PhoneTypeError = null,$_PhoneType2Code = null,$_PhoneType2Status = null,$_PhoneType2Score = null,$_PhoneType2Error = null,$_IPCode = null,$_IPStatus = null,$_IPScore = null,$_IPNetworkCode = null,$_IPNetworkStatus = null,$_IPNetworkScore = null,$_IPError = null,$_PhoneAppendStatus = null,$_PhoneAppendError = null,$_NameToPhoneCode = null,$_NameToPhoneStatus = null,$_NameToPhoneScore = null,$_AddressToPhoneCode = null,$_AddressToPhoneStatus = null,$_AddressToPhoneScore = null,$_NameToAddressCode = null,$_NameToAddressStatus = null,$_NameToAddressScore = null,$_NameToEmailCode = null,$_NameToEmailStatus = null,$_NameToEmailScore = null,$_AddressToIPCode = null,$_AddressToIPStatus = null,$_AddressToIPScore = null,$_NameAlternative = null,$_NameAlternativeDesc = null,$_PhoneNumberAlternative = null,$_PhoneNumberAlternativeDesc = null,$_AddressAlternative = null,$_AddressAlternativeDesc = null,$_ContactScore = null,$_Timers = null,$_Error = null)
	{
		parent::__construct(array('NameCode'=>$_NameCode,'NameStatus'=>$_NameStatus,'NameScore'=>$_NameScore,'NameError'=>$_NameError,'EmailCode'=>$_EmailCode,'EmailStatus'=>$_EmailStatus,'EmailScore'=>$_EmailScore,'EmailError'=>$_EmailError,'AddressCode'=>$_AddressCode,'AddressStatus'=>$_AddressStatus,'AddressScore'=>$_AddressScore,'AddressError'=>$_AddressError,'AddressTypeCode'=>$_AddressTypeCode,'AddressTypeStatus'=>$_AddressTypeStatus,'AddressTypeScore'=>$_AddressTypeScore,'AddressTypeError'=>$_AddressTypeError,'AddressType2Code'=>$_AddressType2Code,'AddressType2Status'=>$_AddressType2Status,'AddressType2Score'=>$_AddressType2Score,'AddressType2Error'=>$_AddressType2Error,'PhoneCode'=>$_PhoneCode,'PhoneStatus'=>$_PhoneStatus,'PhoneScore'=>$_PhoneScore,'PhoneError'=>$_PhoneError,'Phone2Code'=>$_Phone2Code,'Phone2Status'=>$_Phone2Status,'Phone2Score'=>$_Phone2Score,'Phone2Error'=>$_Phone2Error,'PhoneAddressCode'=>$_PhoneAddressCode,'PhoneAddressStatus'=>$_PhoneAddressStatus,'PhoneAddressScore'=>$_PhoneAddressScore,'PhoneAddressError'=>$_PhoneAddressError,'PhoneAddress2Code'=>$_PhoneAddress2Code,'PhoneAddress2Status'=>$_PhoneAddress2Status,'PhoneAddress2Score'=>$_PhoneAddress2Score,'PhoneAddress2Error'=>$_PhoneAddress2Error,'PhoneTypeCode'=>$_PhoneTypeCode,'PhoneTypeStatus'=>$_PhoneTypeStatus,'PhoneTypeScore'=>$_PhoneTypeScore,'PhoneTypeError'=>$_PhoneTypeError,'PhoneType2Code'=>$_PhoneType2Code,'PhoneType2Status'=>$_PhoneType2Status,'PhoneType2Score'=>$_PhoneType2Score,'PhoneType2Error'=>$_PhoneType2Error,'IPCode'=>$_IPCode,'IPStatus'=>$_IPStatus,'IPScore'=>$_IPScore,'IPNetworkCode'=>$_IPNetworkCode,'IPNetworkStatus'=>$_IPNetworkStatus,'IPNetworkScore'=>$_IPNetworkScore,'IPError'=>$_IPError,'PhoneAppendStatus'=>$_PhoneAppendStatus,'PhoneAppendError'=>$_PhoneAppendError,'NameToPhoneCode'=>$_NameToPhoneCode,'NameToPhoneStatus'=>$_NameToPhoneStatus,'NameToPhoneScore'=>$_NameToPhoneScore,'AddressToPhoneCode'=>$_AddressToPhoneCode,'AddressToPhoneStatus'=>$_AddressToPhoneStatus,'AddressToPhoneScore'=>$_AddressToPhoneScore,'NameToAddressCode'=>$_NameToAddressCode,'NameToAddressStatus'=>$_NameToAddressStatus,'NameToAddressScore'=>$_NameToAddressScore,'NameToEmailCode'=>$_NameToEmailCode,'NameToEmailStatus'=>$_NameToEmailStatus,'NameToEmailScore'=>$_NameToEmailScore,'AddressToIPCode'=>$_AddressToIPCode,'AddressToIPStatus'=>$_AddressToIPStatus,'AddressToIPScore'=>$_AddressToIPScore,'NameAlternative'=>$_NameAlternative,'NameAlternativeDesc'=>$_NameAlternativeDesc,'PhoneNumberAlternative'=>$_PhoneNumberAlternative,'PhoneNumberAlternativeDesc'=>$_PhoneNumberAlternativeDesc,'AddressAlternative'=>$_AddressAlternative,'AddressAlternativeDesc'=>$_AddressAlternativeDesc,'ContactScore'=>$_ContactScore,'Timers'=>$_Timers,'Error'=>$_Error));
	}
	/**
	 * Set NameCode
	 * @param string NameCode
	 * @return string
	 */
	public function setNameCode($_NameCode)
	{
		return ($this->NameCode = $_NameCode);
	}
	/**
	 * Get NameCode
	 * @return string
	 */
	public function getNameCode()
	{
		return $this->NameCode;
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
	 * Set EmailCode
	 * @param string EmailCode
	 * @return string
	 */
	public function setEmailCode($_EmailCode)
	{
		return ($this->EmailCode = $_EmailCode);
	}
	/**
	 * Get EmailCode
	 * @return string
	 */
	public function getEmailCode()
	{
		return $this->EmailCode;
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
	 * Set AddressCode
	 * @param string AddressCode
	 * @return string
	 */
	public function setAddressCode($_AddressCode)
	{
		return ($this->AddressCode = $_AddressCode);
	}
	/**
	 * Get AddressCode
	 * @return string
	 */
	public function getAddressCode()
	{
		return $this->AddressCode;
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
	 * Set AddressTypeCode
	 * @param string AddressTypeCode
	 * @return string
	 */
	public function setAddressTypeCode($_AddressTypeCode)
	{
		return ($this->AddressTypeCode = $_AddressTypeCode);
	}
	/**
	 * Get AddressTypeCode
	 * @return string
	 */
	public function getAddressTypeCode()
	{
		return $this->AddressTypeCode;
	}
	/**
	 * Set AddressTypeStatus
	 * @param string AddressTypeStatus
	 * @return string
	 */
	public function setAddressTypeStatus($_AddressTypeStatus)
	{
		return ($this->AddressTypeStatus = $_AddressTypeStatus);
	}
	/**
	 * Get AddressTypeStatus
	 * @return string
	 */
	public function getAddressTypeStatus()
	{
		return $this->AddressTypeStatus;
	}
	/**
	 * Set AddressTypeScore
	 * @param string AddressTypeScore
	 * @return string
	 */
	public function setAddressTypeScore($_AddressTypeScore)
	{
		return ($this->AddressTypeScore = $_AddressTypeScore);
	}
	/**
	 * Get AddressTypeScore
	 * @return string
	 */
	public function getAddressTypeScore()
	{
		return $this->AddressTypeScore;
	}
	/**
	 * Set AddressTypeError
	 * @param string AddressTypeError
	 * @return string
	 */
	public function setAddressTypeError($_AddressTypeError)
	{
		return ($this->AddressTypeError = $_AddressTypeError);
	}
	/**
	 * Get AddressTypeError
	 * @return string
	 */
	public function getAddressTypeError()
	{
		return $this->AddressTypeError;
	}
	/**
	 * Set AddressType2Code
	 * @param string AddressType2Code
	 * @return string
	 */
	public function setAddressType2Code($_AddressType2Code)
	{
		return ($this->AddressType2Code = $_AddressType2Code);
	}
	/**
	 * Get AddressType2Code
	 * @return string
	 */
	public function getAddressType2Code()
	{
		return $this->AddressType2Code;
	}
	/**
	 * Set AddressType2Status
	 * @param string AddressType2Status
	 * @return string
	 */
	public function setAddressType2Status($_AddressType2Status)
	{
		return ($this->AddressType2Status = $_AddressType2Status);
	}
	/**
	 * Get AddressType2Status
	 * @return string
	 */
	public function getAddressType2Status()
	{
		return $this->AddressType2Status;
	}
	/**
	 * Set AddressType2Score
	 * @param string AddressType2Score
	 * @return string
	 */
	public function setAddressType2Score($_AddressType2Score)
	{
		return ($this->AddressType2Score = $_AddressType2Score);
	}
	/**
	 * Get AddressType2Score
	 * @return string
	 */
	public function getAddressType2Score()
	{
		return $this->AddressType2Score;
	}
	/**
	 * Set AddressType2Error
	 * @param string AddressType2Error
	 * @return string
	 */
	public function setAddressType2Error($_AddressType2Error)
	{
		return ($this->AddressType2Error = $_AddressType2Error);
	}
	/**
	 * Get AddressType2Error
	 * @return string
	 */
	public function getAddressType2Error()
	{
		return $this->AddressType2Error;
	}
	/**
	 * Set PhoneCode
	 * @param string PhoneCode
	 * @return string
	 */
	public function setPhoneCode($_PhoneCode)
	{
		return ($this->PhoneCode = $_PhoneCode);
	}
	/**
	 * Get PhoneCode
	 * @return string
	 */
	public function getPhoneCode()
	{
		return $this->PhoneCode;
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
	 * Set Phone2Code
	 * @param string Phone2Code
	 * @return string
	 */
	public function setPhone2Code($_Phone2Code)
	{
		return ($this->Phone2Code = $_Phone2Code);
	}
	/**
	 * Get Phone2Code
	 * @return string
	 */
	public function getPhone2Code()
	{
		return $this->Phone2Code;
	}
	/**
	 * Set Phone2Status
	 * @param string Phone2Status
	 * @return string
	 */
	public function setPhone2Status($_Phone2Status)
	{
		return ($this->Phone2Status = $_Phone2Status);
	}
	/**
	 * Get Phone2Status
	 * @return string
	 */
	public function getPhone2Status()
	{
		return $this->Phone2Status;
	}
	/**
	 * Set Phone2Score
	 * @param string Phone2Score
	 * @return string
	 */
	public function setPhone2Score($_Phone2Score)
	{
		return ($this->Phone2Score = $_Phone2Score);
	}
	/**
	 * Get Phone2Score
	 * @return string
	 */
	public function getPhone2Score()
	{
		return $this->Phone2Score;
	}
	/**
	 * Set Phone2Error
	 * @param string Phone2Error
	 * @return string
	 */
	public function setPhone2Error($_Phone2Error)
	{
		return ($this->Phone2Error = $_Phone2Error);
	}
	/**
	 * Get Phone2Error
	 * @return string
	 */
	public function getPhone2Error()
	{
		return $this->Phone2Error;
	}
	/**
	 * Set PhoneAddressCode
	 * @param string PhoneAddressCode
	 * @return string
	 */
	public function setPhoneAddressCode($_PhoneAddressCode)
	{
		return ($this->PhoneAddressCode = $_PhoneAddressCode);
	}
	/**
	 * Get PhoneAddressCode
	 * @return string
	 */
	public function getPhoneAddressCode()
	{
		return $this->PhoneAddressCode;
	}
	/**
	 * Set PhoneAddressStatus
	 * @param string PhoneAddressStatus
	 * @return string
	 */
	public function setPhoneAddressStatus($_PhoneAddressStatus)
	{
		return ($this->PhoneAddressStatus = $_PhoneAddressStatus);
	}
	/**
	 * Get PhoneAddressStatus
	 * @return string
	 */
	public function getPhoneAddressStatus()
	{
		return $this->PhoneAddressStatus;
	}
	/**
	 * Set PhoneAddressScore
	 * @param string PhoneAddressScore
	 * @return string
	 */
	public function setPhoneAddressScore($_PhoneAddressScore)
	{
		return ($this->PhoneAddressScore = $_PhoneAddressScore);
	}
	/**
	 * Get PhoneAddressScore
	 * @return string
	 */
	public function getPhoneAddressScore()
	{
		return $this->PhoneAddressScore;
	}
	/**
	 * Set PhoneAddressError
	 * @param string PhoneAddressError
	 * @return string
	 */
	public function setPhoneAddressError($_PhoneAddressError)
	{
		return ($this->PhoneAddressError = $_PhoneAddressError);
	}
	/**
	 * Get PhoneAddressError
	 * @return string
	 */
	public function getPhoneAddressError()
	{
		return $this->PhoneAddressError;
	}
	/**
	 * Set PhoneAddress2Code
	 * @param string PhoneAddress2Code
	 * @return string
	 */
	public function setPhoneAddress2Code($_PhoneAddress2Code)
	{
		return ($this->PhoneAddress2Code = $_PhoneAddress2Code);
	}
	/**
	 * Get PhoneAddress2Code
	 * @return string
	 */
	public function getPhoneAddress2Code()
	{
		return $this->PhoneAddress2Code;
	}
	/**
	 * Set PhoneAddress2Status
	 * @param string PhoneAddress2Status
	 * @return string
	 */
	public function setPhoneAddress2Status($_PhoneAddress2Status)
	{
		return ($this->PhoneAddress2Status = $_PhoneAddress2Status);
	}
	/**
	 * Get PhoneAddress2Status
	 * @return string
	 */
	public function getPhoneAddress2Status()
	{
		return $this->PhoneAddress2Status;
	}
	/**
	 * Set PhoneAddress2Score
	 * @param string PhoneAddress2Score
	 * @return string
	 */
	public function setPhoneAddress2Score($_PhoneAddress2Score)
	{
		return ($this->PhoneAddress2Score = $_PhoneAddress2Score);
	}
	/**
	 * Get PhoneAddress2Score
	 * @return string
	 */
	public function getPhoneAddress2Score()
	{
		return $this->PhoneAddress2Score;
	}
	/**
	 * Set PhoneAddress2Error
	 * @param string PhoneAddress2Error
	 * @return string
	 */
	public function setPhoneAddress2Error($_PhoneAddress2Error)
	{
		return ($this->PhoneAddress2Error = $_PhoneAddress2Error);
	}
	/**
	 * Get PhoneAddress2Error
	 * @return string
	 */
	public function getPhoneAddress2Error()
	{
		return $this->PhoneAddress2Error;
	}
	/**
	 * Set PhoneTypeCode
	 * @param string PhoneTypeCode
	 * @return string
	 */
	public function setPhoneTypeCode($_PhoneTypeCode)
	{
		return ($this->PhoneTypeCode = $_PhoneTypeCode);
	}
	/**
	 * Get PhoneTypeCode
	 * @return string
	 */
	public function getPhoneTypeCode()
	{
		return $this->PhoneTypeCode;
	}
	/**
	 * Set PhoneTypeStatus
	 * @param string PhoneTypeStatus
	 * @return string
	 */
	public function setPhoneTypeStatus($_PhoneTypeStatus)
	{
		return ($this->PhoneTypeStatus = $_PhoneTypeStatus);
	}
	/**
	 * Get PhoneTypeStatus
	 * @return string
	 */
	public function getPhoneTypeStatus()
	{
		return $this->PhoneTypeStatus;
	}
	/**
	 * Set PhoneTypeScore
	 * @param string PhoneTypeScore
	 * @return string
	 */
	public function setPhoneTypeScore($_PhoneTypeScore)
	{
		return ($this->PhoneTypeScore = $_PhoneTypeScore);
	}
	/**
	 * Get PhoneTypeScore
	 * @return string
	 */
	public function getPhoneTypeScore()
	{
		return $this->PhoneTypeScore;
	}
	/**
	 * Set PhoneTypeError
	 * @param string PhoneTypeError
	 * @return string
	 */
	public function setPhoneTypeError($_PhoneTypeError)
	{
		return ($this->PhoneTypeError = $_PhoneTypeError);
	}
	/**
	 * Get PhoneTypeError
	 * @return string
	 */
	public function getPhoneTypeError()
	{
		return $this->PhoneTypeError;
	}
	/**
	 * Set PhoneType2Code
	 * @param string PhoneType2Code
	 * @return string
	 */
	public function setPhoneType2Code($_PhoneType2Code)
	{
		return ($this->PhoneType2Code = $_PhoneType2Code);
	}
	/**
	 * Get PhoneType2Code
	 * @return string
	 */
	public function getPhoneType2Code()
	{
		return $this->PhoneType2Code;
	}
	/**
	 * Set PhoneType2Status
	 * @param string PhoneType2Status
	 * @return string
	 */
	public function setPhoneType2Status($_PhoneType2Status)
	{
		return ($this->PhoneType2Status = $_PhoneType2Status);
	}
	/**
	 * Get PhoneType2Status
	 * @return string
	 */
	public function getPhoneType2Status()
	{
		return $this->PhoneType2Status;
	}
	/**
	 * Set PhoneType2Score
	 * @param string PhoneType2Score
	 * @return string
	 */
	public function setPhoneType2Score($_PhoneType2Score)
	{
		return ($this->PhoneType2Score = $_PhoneType2Score);
	}
	/**
	 * Get PhoneType2Score
	 * @return string
	 */
	public function getPhoneType2Score()
	{
		return $this->PhoneType2Score;
	}
	/**
	 * Set PhoneType2Error
	 * @param string PhoneType2Error
	 * @return string
	 */
	public function setPhoneType2Error($_PhoneType2Error)
	{
		return ($this->PhoneType2Error = $_PhoneType2Error);
	}
	/**
	 * Get PhoneType2Error
	 * @return string
	 */
	public function getPhoneType2Error()
	{
		return $this->PhoneType2Error;
	}
	/**
	 * Set IPCode
	 * @param string IPCode
	 * @return string
	 */
	public function setIPCode($_IPCode)
	{
		return ($this->IPCode = $_IPCode);
	}
	/**
	 * Get IPCode
	 * @return string
	 */
	public function getIPCode()
	{
		return $this->IPCode;
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
	 * Set IPNetworkCode
	 * @param string IPNetworkCode
	 * @return string
	 */
	public function setIPNetworkCode($_IPNetworkCode)
	{
		return ($this->IPNetworkCode = $_IPNetworkCode);
	}
	/**
	 * Get IPNetworkCode
	 * @return string
	 */
	public function getIPNetworkCode()
	{
		return $this->IPNetworkCode;
	}
	/**
	 * Set IPNetworkStatus
	 * @param string IPNetworkStatus
	 * @return string
	 */
	public function setIPNetworkStatus($_IPNetworkStatus)
	{
		return ($this->IPNetworkStatus = $_IPNetworkStatus);
	}
	/**
	 * Get IPNetworkStatus
	 * @return string
	 */
	public function getIPNetworkStatus()
	{
		return $this->IPNetworkStatus;
	}
	/**
	 * Set IPNetworkScore
	 * @param string IPNetworkScore
	 * @return string
	 */
	public function setIPNetworkScore($_IPNetworkScore)
	{
		return ($this->IPNetworkScore = $_IPNetworkScore);
	}
	/**
	 * Get IPNetworkScore
	 * @return string
	 */
	public function getIPNetworkScore()
	{
		return $this->IPNetworkScore;
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
	 * Set PhoneAppendStatus
	 * @param string PhoneAppendStatus
	 * @return string
	 */
	public function setPhoneAppendStatus($_PhoneAppendStatus)
	{
		return ($this->PhoneAppendStatus = $_PhoneAppendStatus);
	}
	/**
	 * Get PhoneAppendStatus
	 * @return string
	 */
	public function getPhoneAppendStatus()
	{
		return $this->PhoneAppendStatus;
	}
	/**
	 * Set PhoneAppendError
	 * @param string PhoneAppendError
	 * @return string
	 */
	public function setPhoneAppendError($_PhoneAppendError)
	{
		return ($this->PhoneAppendError = $_PhoneAppendError);
	}
	/**
	 * Get PhoneAppendError
	 * @return string
	 */
	public function getPhoneAppendError()
	{
		return $this->PhoneAppendError;
	}
	/**
	 * Set NameToPhoneCode
	 * @param string NameToPhoneCode
	 * @return string
	 */
	public function setNameToPhoneCode($_NameToPhoneCode)
	{
		return ($this->NameToPhoneCode = $_NameToPhoneCode);
	}
	/**
	 * Get NameToPhoneCode
	 * @return string
	 */
	public function getNameToPhoneCode()
	{
		return $this->NameToPhoneCode;
	}
	/**
	 * Set NameToPhoneStatus
	 * @param string NameToPhoneStatus
	 * @return string
	 */
	public function setNameToPhoneStatus($_NameToPhoneStatus)
	{
		return ($this->NameToPhoneStatus = $_NameToPhoneStatus);
	}
	/**
	 * Get NameToPhoneStatus
	 * @return string
	 */
	public function getNameToPhoneStatus()
	{
		return $this->NameToPhoneStatus;
	}
	/**
	 * Set NameToPhoneScore
	 * @param string NameToPhoneScore
	 * @return string
	 */
	public function setNameToPhoneScore($_NameToPhoneScore)
	{
		return ($this->NameToPhoneScore = $_NameToPhoneScore);
	}
	/**
	 * Get NameToPhoneScore
	 * @return string
	 */
	public function getNameToPhoneScore()
	{
		return $this->NameToPhoneScore;
	}
	/**
	 * Set AddressToPhoneCode
	 * @param string AddressToPhoneCode
	 * @return string
	 */
	public function setAddressToPhoneCode($_AddressToPhoneCode)
	{
		return ($this->AddressToPhoneCode = $_AddressToPhoneCode);
	}
	/**
	 * Get AddressToPhoneCode
	 * @return string
	 */
	public function getAddressToPhoneCode()
	{
		return $this->AddressToPhoneCode;
	}
	/**
	 * Set AddressToPhoneStatus
	 * @param string AddressToPhoneStatus
	 * @return string
	 */
	public function setAddressToPhoneStatus($_AddressToPhoneStatus)
	{
		return ($this->AddressToPhoneStatus = $_AddressToPhoneStatus);
	}
	/**
	 * Get AddressToPhoneStatus
	 * @return string
	 */
	public function getAddressToPhoneStatus()
	{
		return $this->AddressToPhoneStatus;
	}
	/**
	 * Set AddressToPhoneScore
	 * @param string AddressToPhoneScore
	 * @return string
	 */
	public function setAddressToPhoneScore($_AddressToPhoneScore)
	{
		return ($this->AddressToPhoneScore = $_AddressToPhoneScore);
	}
	/**
	 * Get AddressToPhoneScore
	 * @return string
	 */
	public function getAddressToPhoneScore()
	{
		return $this->AddressToPhoneScore;
	}
	/**
	 * Set NameToAddressCode
	 * @param string NameToAddressCode
	 * @return string
	 */
	public function setNameToAddressCode($_NameToAddressCode)
	{
		return ($this->NameToAddressCode = $_NameToAddressCode);
	}
	/**
	 * Get NameToAddressCode
	 * @return string
	 */
	public function getNameToAddressCode()
	{
		return $this->NameToAddressCode;
	}
	/**
	 * Set NameToAddressStatus
	 * @param string NameToAddressStatus
	 * @return string
	 */
	public function setNameToAddressStatus($_NameToAddressStatus)
	{
		return ($this->NameToAddressStatus = $_NameToAddressStatus);
	}
	/**
	 * Get NameToAddressStatus
	 * @return string
	 */
	public function getNameToAddressStatus()
	{
		return $this->NameToAddressStatus;
	}
	/**
	 * Set NameToAddressScore
	 * @param string NameToAddressScore
	 * @return string
	 */
	public function setNameToAddressScore($_NameToAddressScore)
	{
		return ($this->NameToAddressScore = $_NameToAddressScore);
	}
	/**
	 * Get NameToAddressScore
	 * @return string
	 */
	public function getNameToAddressScore()
	{
		return $this->NameToAddressScore;
	}
	/**
	 * Set NameToEmailCode
	 * @param string NameToEmailCode
	 * @return string
	 */
	public function setNameToEmailCode($_NameToEmailCode)
	{
		return ($this->NameToEmailCode = $_NameToEmailCode);
	}
	/**
	 * Get NameToEmailCode
	 * @return string
	 */
	public function getNameToEmailCode()
	{
		return $this->NameToEmailCode;
	}
	/**
	 * Set NameToEmailStatus
	 * @param string NameToEmailStatus
	 * @return string
	 */
	public function setNameToEmailStatus($_NameToEmailStatus)
	{
		return ($this->NameToEmailStatus = $_NameToEmailStatus);
	}
	/**
	 * Get NameToEmailStatus
	 * @return string
	 */
	public function getNameToEmailStatus()
	{
		return $this->NameToEmailStatus;
	}
	/**
	 * Set NameToEmailScore
	 * @param string NameToEmailScore
	 * @return string
	 */
	public function setNameToEmailScore($_NameToEmailScore)
	{
		return ($this->NameToEmailScore = $_NameToEmailScore);
	}
	/**
	 * Get NameToEmailScore
	 * @return string
	 */
	public function getNameToEmailScore()
	{
		return $this->NameToEmailScore;
	}
	/**
	 * Set AddressToIPCode
	 * @param string AddressToIPCode
	 * @return string
	 */
	public function setAddressToIPCode($_AddressToIPCode)
	{
		return ($this->AddressToIPCode = $_AddressToIPCode);
	}
	/**
	 * Get AddressToIPCode
	 * @return string
	 */
	public function getAddressToIPCode()
	{
		return $this->AddressToIPCode;
	}
	/**
	 * Set AddressToIPStatus
	 * @param string AddressToIPStatus
	 * @return string
	 */
	public function setAddressToIPStatus($_AddressToIPStatus)
	{
		return ($this->AddressToIPStatus = $_AddressToIPStatus);
	}
	/**
	 * Get AddressToIPStatus
	 * @return string
	 */
	public function getAddressToIPStatus()
	{
		return $this->AddressToIPStatus;
	}
	/**
	 * Set AddressToIPScore
	 * @param string AddressToIPScore
	 * @return string
	 */
	public function setAddressToIPScore($_AddressToIPScore)
	{
		return ($this->AddressToIPScore = $_AddressToIPScore);
	}
	/**
	 * Get AddressToIPScore
	 * @return string
	 */
	public function getAddressToIPScore()
	{
		return $this->AddressToIPScore;
	}
	/**
	 * Set NameAlternative
	 * @param string NameAlternative
	 * @return string
	 */
	public function setNameAlternative($_NameAlternative)
	{
		return ($this->NameAlternative = $_NameAlternative);
	}
	/**
	 * Get NameAlternative
	 * @return string
	 */
	public function getNameAlternative()
	{
		return $this->NameAlternative;
	}
	/**
	 * Set NameAlternativeDesc
	 * @param string NameAlternativeDesc
	 * @return string
	 */
	public function setNameAlternativeDesc($_NameAlternativeDesc)
	{
		return ($this->NameAlternativeDesc = $_NameAlternativeDesc);
	}
	/**
	 * Get NameAlternativeDesc
	 * @return string
	 */
	public function getNameAlternativeDesc()
	{
		return $this->NameAlternativeDesc;
	}
	/**
	 * Set PhoneNumberAlternative
	 * @param string PhoneNumberAlternative
	 * @return string
	 */
	public function setPhoneNumberAlternative($_PhoneNumberAlternative)
	{
		return ($this->PhoneNumberAlternative = $_PhoneNumberAlternative);
	}
	/**
	 * Get PhoneNumberAlternative
	 * @return string
	 */
	public function getPhoneNumberAlternative()
	{
		return $this->PhoneNumberAlternative;
	}
	/**
	 * Set PhoneNumberAlternativeDesc
	 * @param string PhoneNumberAlternativeDesc
	 * @return string
	 */
	public function setPhoneNumberAlternativeDesc($_PhoneNumberAlternativeDesc)
	{
		return ($this->PhoneNumberAlternativeDesc = $_PhoneNumberAlternativeDesc);
	}
	/**
	 * Get PhoneNumberAlternativeDesc
	 * @return string
	 */
	public function getPhoneNumberAlternativeDesc()
	{
		return $this->PhoneNumberAlternativeDesc;
	}
	/**
	 * Set AddressAlternative
	 * @param string AddressAlternative
	 * @return string
	 */
	public function setAddressAlternative($_AddressAlternative)
	{
		return ($this->AddressAlternative = $_AddressAlternative);
	}
	/**
	 * Get AddressAlternative
	 * @return string
	 */
	public function getAddressAlternative()
	{
		return $this->AddressAlternative;
	}
	/**
	 * Set AddressAlternativeDesc
	 * @param string AddressAlternativeDesc
	 * @return string
	 */
	public function setAddressAlternativeDesc($_AddressAlternativeDesc)
	{
		return ($this->AddressAlternativeDesc = $_AddressAlternativeDesc);
	}
	/**
	 * Get AddressAlternativeDesc
	 * @return string
	 */
	public function getAddressAlternativeDesc()
	{
		return $this->AddressAlternativeDesc;
	}
	/**
	 * Set ContactScore
	 * @param string ContactScore
	 * @return string
	 */
	public function setContactScore($_ContactScore)
	{
		return ($this->ContactScore = $_ContactScore);
	}
	/**
	 * Get ContactScore
	 * @return string
	 */
	public function getContactScore()
	{
		return $this->ContactScore;
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
	 * @return SOContactValidationTypeErr
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