<?php
/**
 * Class file for SOGeoPhoneTypeGetPhoneInfoLastFirstResponse
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhoneTypeGetPhoneInfoLastFirstResponse
 * @date 08/07/2012
 */
class SOGeoPhoneTypeGetPhoneInfoLastFirstResponse extends SOGeoPhoneWsdlClass
{
	/**
	 * The GetPhoneInfoLastFirstResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoPhoneTypePhoneInfo
	 */
	public $GetPhoneInfoLastFirstResult;
	/**
	 * Constructor
	 * @param SOGeoPhoneTypePhoneInfo GetPhoneInfoLastFirstResult
	 * @return SOGeoPhoneTypeGetPhoneInfoLastFirstResponse
	 */
	public function __construct($_GetPhoneInfoLastFirstResult = null)
	{
		parent::__construct(array('GetPhoneInfoLastFirstResult'=>$_GetPhoneInfoLastFirstResult));
	}
	/**
	 * Set GetPhoneInfoLastFirstResult
	 * @param PhoneInfo GetPhoneInfoLastFirstResult
	 * @return PhoneInfo
	 */
	public function setGetPhoneInfoLastFirstResult($_GetPhoneInfoLastFirstResult)
	{
		return ($this->GetPhoneInfoLastFirstResult = $_GetPhoneInfoLastFirstResult);
	}
	/**
	 * Get GetPhoneInfoLastFirstResult
	 * @return SOGeoPhoneTypePhoneInfo
	 */
	public function getGetPhoneInfoLastFirstResult()
	{
		return $this->GetPhoneInfoLastFirstResult;
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