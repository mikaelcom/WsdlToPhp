<?php
/**
 * Class file for SOGeoPhoneTypeGetPhoneInfo_V2Response
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhoneTypeGetPhoneInfo_V2Response
 * @date 08/07/2012
 */
class SOGeoPhoneTypeGetPhoneInfo_V2Response extends SOGeoPhoneWsdlClass
{
	/**
	 * The GetPhoneInfo_V2Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoPhoneTypePhoneInfo_V2
	 */
	public $GetPhoneInfo_V2Result;
	/**
	 * Constructor
	 * @param SOGeoPhoneTypePhoneInfo_V2 GetPhoneInfo_V2Result
	 * @return SOGeoPhoneTypeGetPhoneInfo_V2Response
	 */
	public function __construct($_GetPhoneInfo_V2Result = null)
	{
		parent::__construct(array('GetPhoneInfo_V2Result'=>$_GetPhoneInfo_V2Result));
	}
	/**
	 * Set GetPhoneInfo_V2Result
	 * @param PhoneInfo_V2 GetPhoneInfo_V2Result
	 * @return PhoneInfo_V2
	 */
	public function setGetPhoneInfo_V2Result($_GetPhoneInfo_V2Result)
	{
		return ($this->GetPhoneInfo_V2Result = $_GetPhoneInfo_V2Result);
	}
	/**
	 * Get GetPhoneInfo_V2Result
	 * @return SOGeoPhoneTypePhoneInfo_V2
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