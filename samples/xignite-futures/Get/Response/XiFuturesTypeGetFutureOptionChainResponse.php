<?php
/**
 * Class file for XiFuturesTypeGetFutureOptionChainResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetFutureOptionChainResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetFutureOptionChainResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetFutureOptionChainResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFutureOption
	 */
	public $GetFutureOptionChainResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFutureOption GetFutureOptionChainResult
	 * @return XiFuturesTypeGetFutureOptionChainResponse
	 */
	public function __construct($_GetFutureOptionChainResult = null)
	{
		parent::__construct(array('GetFutureOptionChainResult'=>new XiFuturesTypeArrayOfFutureOption($_GetFutureOptionChainResult)));
	}
	/**
	 * Set GetFutureOptionChainResult
	 * @param ArrayOfFutureOption GetFutureOptionChainResult
	 * @return ArrayOfFutureOption
	 */
	public function setGetFutureOptionChainResult($_GetFutureOptionChainResult)
	{
		return ($this->GetFutureOptionChainResult = $_GetFutureOptionChainResult);
	}
	/**
	 * Get GetFutureOptionChainResult
	 * @return XiFuturesTypeArrayOfFutureOption
	 */
	public function getGetFutureOptionChainResult()
	{
		return $this->GetFutureOptionChainResult;
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