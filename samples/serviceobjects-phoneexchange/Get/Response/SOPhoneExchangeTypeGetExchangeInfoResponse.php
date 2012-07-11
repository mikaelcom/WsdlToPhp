<?php
/**
 * Class file for SOPhoneExchangeTypeGetExchangeInfoResponse
 * @date 08/07/2012
 */
/**
 * Class SOPhoneExchangeTypeGetExchangeInfoResponse
 * @date 08/07/2012
 */
class SOPhoneExchangeTypeGetExchangeInfoResponse extends SOPhoneExchangeWsdlClass
{
	/**
	 * The GetExchangeInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPhoneExchangeTypeExchangeInfo
	 */
	public $GetExchangeInfoResult;
	/**
	 * Constructor
	 * @param SOPhoneExchangeTypeExchangeInfo GetExchangeInfoResult
	 * @return SOPhoneExchangeTypeGetExchangeInfoResponse
	 */
	public function __construct($_GetExchangeInfoResult = null)
	{
		parent::__construct(array('GetExchangeInfoResult'=>$_GetExchangeInfoResult));
	}
	/**
	 * Set GetExchangeInfoResult
	 * @param ExchangeInfo GetExchangeInfoResult
	 * @return ExchangeInfo
	 */
	public function setGetExchangeInfoResult($_GetExchangeInfoResult)
	{
		return ($this->GetExchangeInfoResult = $_GetExchangeInfoResult);
	}
	/**
	 * Get GetExchangeInfoResult
	 * @return SOPhoneExchangeTypeExchangeInfo
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