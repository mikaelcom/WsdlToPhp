<?php
/**
 * Class file for SOPhoneExchangeTypeGetSMSInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOPhoneExchangeTypeGetSMSInfoResponse
 * @date 08/07/2012
 */
class SOPhoneExchangeTypeGetSMSInfoResponse extends SOPhoneExchangeWsdlClass
{
	/**
	 * The GetSMSInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPhoneExchangeTypeSMSExchangeInfo
	 */
	public $GetSMSInfoResult;
	/**
	 * Constructor
	 * @param SOPhoneExchangeTypeSMSExchangeInfo GetSMSInfoResult
	 * @return SOPhoneExchangeTypeGetSMSInfoResponse
	 */
	public function __construct($_GetSMSInfoResult = null)
	{
		parent::__construct(array('GetSMSInfoResult'=>$_GetSMSInfoResult));
	}
	/**
	 * Set GetSMSInfoResult
	 * @param SMSExchangeInfo GetSMSInfoResult
	 * @return SMSExchangeInfo
	 */
	public function setGetSMSInfoResult($_GetSMSInfoResult)
	{
		return ($this->GetSMSInfoResult = $_GetSMSInfoResult);
	}
	/**
	 * Get GetSMSInfoResult
	 * @return SOPhoneExchangeTypeSMSExchangeInfo
	 */
	public function getGetSMSInfoResult()
	{
		return $this->GetSMSInfoResult;
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