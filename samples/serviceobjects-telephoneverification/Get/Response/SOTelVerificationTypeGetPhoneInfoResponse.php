<?php
/**
 * Class file for SOTelVerificationTypeGetPhoneInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOTelVerificationTypeGetPhoneInfoResponse
 * @date 08/07/2012
 */
class SOTelVerificationTypeGetPhoneInfoResponse extends SOTelVerificationWsdlClass
{
	/**
	 * The GetPhoneInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOTelVerificationTypeTelephoneInfo
	 */
	public $GetPhoneInfoResult;
	/**
	 * Constructor
	 * @param SOTelVerificationTypeTelephoneInfo GetPhoneInfoResult
	 * @return SOTelVerificationTypeGetPhoneInfoResponse
	 */
	public function __construct($_GetPhoneInfoResult = null)
	{
		parent::__construct(array('GetPhoneInfoResult'=>$_GetPhoneInfoResult));
	}
	/**
	 * Set GetPhoneInfoResult
	 * @param TelephoneInfo GetPhoneInfoResult
	 * @return TelephoneInfo
	 */
	public function setGetPhoneInfoResult($_GetPhoneInfoResult)
	{
		return ($this->GetPhoneInfoResult = $_GetPhoneInfoResult);
	}
	/**
	 * Get GetPhoneInfoResult
	 * @return SOTelVerificationTypeTelephoneInfo
	 */
	public function getGetPhoneInfoResult()
	{
		return $this->GetPhoneInfoResult;
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