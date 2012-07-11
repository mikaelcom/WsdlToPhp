<?php
/**
 * Class file for SOGeoPhoneTypeGetExchangeInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhoneTypeGetExchangeInfoResponse
 * @date 08/07/2012
 */
class SOGeoPhoneTypeGetExchangeInfoResponse extends SOGeoPhoneWsdlClass
{
	/**
	 * The GetExchangeInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoPhoneTypePhoneInfo
	 */
	public $GetExchangeInfoResult;
	/**
	 * Constructor
	 * @param SOGeoPhoneTypePhoneInfo GetExchangeInfoResult
	 * @return SOGeoPhoneTypeGetExchangeInfoResponse
	 */
	public function __construct($_GetExchangeInfoResult = null)
	{
		parent::__construct(array('GetExchangeInfoResult'=>$_GetExchangeInfoResult));
	}
	/**
	 * Set GetExchangeInfoResult
	 * @param PhoneInfo GetExchangeInfoResult
	 * @return PhoneInfo
	 */
	public function setGetExchangeInfoResult($_GetExchangeInfoResult)
	{
		return ($this->GetExchangeInfoResult = $_GetExchangeInfoResult);
	}
	/**
	 * Get GetExchangeInfoResult
	 * @return SOGeoPhoneTypePhoneInfo
	 */
	public function getGetExchangeInfoResult()
	{
		return $this->GetExchangeInfoResult;
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