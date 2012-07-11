<?php
/**
 * Class file for XiFuturesTypeGetFutureSymbolResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetFutureSymbolResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetFutureSymbolResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetFutureSymbolResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFutureSymbol
	 */
	public $GetFutureSymbolResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeFutureSymbol GetFutureSymbolResult
	 * @return XiFuturesTypeGetFutureSymbolResponse
	 */
	public function __construct($_GetFutureSymbolResult = null)
	{
		parent::__construct(array('GetFutureSymbolResult'=>$_GetFutureSymbolResult));
	}
	/**
	 * Set GetFutureSymbolResult
	 * @param FutureSymbol GetFutureSymbolResult
	 * @return FutureSymbol
	 */
	public function setGetFutureSymbolResult($_GetFutureSymbolResult)
	{
		return ($this->GetFutureSymbolResult = $_GetFutureSymbolResult);
	}
	/**
	 * Get GetFutureSymbolResult
	 * @return XiFuturesTypeFutureSymbol
	 */
	public function getGetFutureSymbolResult()
	{
		return $this->GetFutureSymbolResult;
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