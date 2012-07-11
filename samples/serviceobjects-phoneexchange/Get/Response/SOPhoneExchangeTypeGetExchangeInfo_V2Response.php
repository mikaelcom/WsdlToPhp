<?php
/**
 * Class file for SOPhoneExchangeTypeGetExchangeInfo_V2Response
 * @date 08/07/2012
 */
/**
 * Class SOPhoneExchangeTypeGetExchangeInfo_V2Response
 * @date 08/07/2012
 */
class SOPhoneExchangeTypeGetExchangeInfo_V2Response extends SOPhoneExchangeWsdlClass
{
	/**
	 * The GetExchangeInfo_V2Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPhoneExchangeTypeExchangeInfo
	 */
	public $GetExchangeInfo_V2Result;
	/**
	 * Constructor
	 * @param SOPhoneExchangeTypeExchangeInfo GetExchangeInfo_V2Result
	 * @return SOPhoneExchangeTypeGetExchangeInfo_V2Response
	 */
	public function __construct($_GetExchangeInfo_V2Result = null)
	{
		parent::__construct(array('GetExchangeInfo_V2Result'=>$_GetExchangeInfo_V2Result));
	}
	/**
	 * Set GetExchangeInfo_V2Result
	 * @param ExchangeInfo GetExchangeInfo_V2Result
	 * @return ExchangeInfo
	 */
	public function setGetExchangeInfo_V2Result($_GetExchangeInfo_V2Result)
	{
		return ($this->GetExchangeInfo_V2Result = $_GetExchangeInfo_V2Result);
	}
	/**
	 * Get GetExchangeInfo_V2Result
	 * @return SOPhoneExchangeTypeExchangeInfo
	 */
	public function getGetExchangeInfo_V2Result()
	{
		return $this->GetExchangeInfo_V2Result;
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