<?php
/**
 * Class file for SOGeoPhonePlusTypeGetPhoneInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhonePlusTypeGetPhoneInfoResponse
 * @date 08/07/2012
 */
class SOGeoPhonePlusTypeGetPhoneInfoResponse extends SOGeoPhonePlusWsdlClass
{
	/**
	 * The GetPhoneInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoPhonePlusTypeGetPhoneInfoResult
	 */
	public $GetPhoneInfoResult;
	/**
	 * Constructor
	 * @param SOGeoPhonePlusTypeGetPhoneInfoResult GetPhoneInfoResult
	 * @return SOGeoPhonePlusTypeGetPhoneInfoResponse
	 */
	public function __construct($_GetPhoneInfoResult = null)
	{
		parent::__construct(array('GetPhoneInfoResult'=>$_GetPhoneInfoResult));
	}
	/**
	 * Set GetPhoneInfoResult
	 * @param GetPhoneInfoResult GetPhoneInfoResult
	 * @return GetPhoneInfoResult
	 */
	public function setGetPhoneInfoResult($_GetPhoneInfoResult)
	{
		return ($this->GetPhoneInfoResult = $_GetPhoneInfoResult);
	}
	/**
	 * Get GetPhoneInfoResult
	 * @return SOGeoPhonePlusTypeGetPhoneInfoResult
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