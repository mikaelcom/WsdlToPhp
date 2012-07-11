<?php
/**
 * Class file for SOGeoPhoneTypeGetPhoneInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhoneTypeGetPhoneInfoResponse
 * @date 08/07/2012
 */
class SOGeoPhoneTypeGetPhoneInfoResponse extends SOGeoPhoneWsdlClass
{
	/**
	 * The GetPhoneInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoPhoneTypePhoneInfo
	 */
	public $GetPhoneInfoResult;
	/**
	 * Constructor
	 * @param SOGeoPhoneTypePhoneInfo GetPhoneInfoResult
	 * @return SOGeoPhoneTypeGetPhoneInfoResponse
	 */
	public function __construct($_GetPhoneInfoResult = null)
	{
		parent::__construct(array('GetPhoneInfoResult'=>$_GetPhoneInfoResult));
	}
	/**
	 * Set GetPhoneInfoResult
	 * @param PhoneInfo GetPhoneInfoResult
	 * @return PhoneInfo
	 */
	public function setGetPhoneInfoResult($_GetPhoneInfoResult)
	{
		return ($this->GetPhoneInfoResult = $_GetPhoneInfoResult);
	}
	/**
	 * Get GetPhoneInfoResult
	 * @return SOGeoPhoneTypePhoneInfo
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