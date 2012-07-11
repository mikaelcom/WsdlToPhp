<?php
/**
 * Class file for XiFuturesTypeGetFutureOptionsByStrikePriceResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetFutureOptionsByStrikePriceResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetFutureOptionsByStrikePriceResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetFutureOptionsByStrikePriceResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFutureOption
	 */
	public $GetFutureOptionsByStrikePriceResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFutureOption GetFutureOptionsByStrikePriceResult
	 * @return XiFuturesTypeGetFutureOptionsByStrikePriceResponse
	 */
	public function __construct($_GetFutureOptionsByStrikePriceResult = null)
	{
		parent::__construct(array('GetFutureOptionsByStrikePriceResult'=>new XiFuturesTypeArrayOfFutureOption($_GetFutureOptionsByStrikePriceResult)));
	}
	/**
	 * Set GetFutureOptionsByStrikePriceResult
	 * @param ArrayOfFutureOption GetFutureOptionsByStrikePriceResult
	 * @return ArrayOfFutureOption
	 */
	public function setGetFutureOptionsByStrikePriceResult($_GetFutureOptionsByStrikePriceResult)
	{
		return ($this->GetFutureOptionsByStrikePriceResult = $_GetFutureOptionsByStrikePriceResult);
	}
	/**
	 * Get GetFutureOptionsByStrikePriceResult
	 * @return XiFuturesTypeArrayOfFutureOption
	 */
	public function getGetFutureOptionsByStrikePriceResult()
	{
		return $this->GetFutureOptionsByStrikePriceResult;
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