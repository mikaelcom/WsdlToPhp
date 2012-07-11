<?php
/**
 * Class file for SOGeoPhonePlusTypeGetPhoneInfo_V2Response
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhonePlusTypeGetPhoneInfo_V2Response
 * @date 08/07/2012
 */
class SOGeoPhonePlusTypeGetPhoneInfo_V2Response extends SOGeoPhonePlusWsdlClass
{
	/**
	 * The GetPhoneInfo_V2Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoPhonePlusTypeGetPhoneInfoResult_V2
	 */
	public $GetPhoneInfo_V2Result;
	/**
	 * Constructor
	 * @param SOGeoPhonePlusTypeGetPhoneInfoResult_V2 GetPhoneInfo_V2Result
	 * @return SOGeoPhonePlusTypeGetPhoneInfo_V2Response
	 */
	public function __construct($_GetPhoneInfo_V2Result = null)
	{
		parent::__construct(array('GetPhoneInfo_V2Result'=>$_GetPhoneInfo_V2Result));
	}
	/**
	 * Set GetPhoneInfo_V2Result
	 * @param GetPhoneInfoResult_V2 GetPhoneInfo_V2Result
	 * @return GetPhoneInfoResult_V2
	 */
	public function setGetPhoneInfo_V2Result($_GetPhoneInfo_V2Result)
	{
		return ($this->GetPhoneInfo_V2Result = $_GetPhoneInfo_V2Result);
	}
	/**
	 * Get GetPhoneInfo_V2Result
	 * @return SOGeoPhonePlusTypeGetPhoneInfoResult_V2
	 */
	public function getGetPhoneInfo_V2Result()
	{
		return $this->GetPhoneInfo_V2Result;
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