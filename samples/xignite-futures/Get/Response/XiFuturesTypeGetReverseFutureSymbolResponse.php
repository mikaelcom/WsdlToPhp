<?php
/**
 * Class file for XiFuturesTypeGetReverseFutureSymbolResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetReverseFutureSymbolResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetReverseFutureSymbolResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetReverseFutureSymbolResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFutureSymbol
	 */
	public $GetReverseFutureSymbolResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeFutureSymbol GetReverseFutureSymbolResult
	 * @return XiFuturesTypeGetReverseFutureSymbolResponse
	 */
	public function __construct($_GetReverseFutureSymbolResult = null)
	{
		parent::__construct(array('GetReverseFutureSymbolResult'=>$_GetReverseFutureSymbolResult));
	}
	/**
	 * Set GetReverseFutureSymbolResult
	 * @param FutureSymbol GetReverseFutureSymbolResult
	 * @return FutureSymbol
	 */
	public function setGetReverseFutureSymbolResult($_GetReverseFutureSymbolResult)
	{
		return ($this->GetReverseFutureSymbolResult = $_GetReverseFutureSymbolResult);
	}
	/**
	 * Get GetReverseFutureSymbolResult
	 * @return XiFuturesTypeFutureSymbol
	 */
	public function getGetReverseFutureSymbolResult()
	{
		return $this->GetReverseFutureSymbolResult;
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