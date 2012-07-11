<?php
/**
 * Class file for SOGeoPhoneTypeGetContactInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhoneTypeGetContactInfoResponse
 * @date 08/07/2012
 */
class SOGeoPhoneTypeGetContactInfoResponse extends SOGeoPhoneWsdlClass
{
	/**
	 * The GetContactInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoPhoneTypePhoneInfo
	 */
	public $GetContactInfoResult;
	/**
	 * Constructor
	 * @param SOGeoPhoneTypePhoneInfo GetContactInfoResult
	 * @return SOGeoPhoneTypeGetContactInfoResponse
	 */
	public function __construct($_GetContactInfoResult = null)
	{
		parent::__construct(array('GetContactInfoResult'=>$_GetContactInfoResult));
	}
	/**
	 * Set GetContactInfoResult
	 * @param PhoneInfo GetContactInfoResult
	 * @return PhoneInfo
	 */
	public function setGetContactInfoResult($_GetContactInfoResult)
	{
		return ($this->GetContactInfoResult = $_GetContactInfoResult);
	}
	/**
	 * Get GetContactInfoResult
	 * @return SOGeoPhoneTypePhoneInfo
	 */
	public function getGetContactInfoResult()
	{
		return $this->GetContactInfoResult;
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