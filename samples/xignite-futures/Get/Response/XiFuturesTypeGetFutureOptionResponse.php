<?php
/**
 * Class file for XiFuturesTypeGetFutureOptionResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetFutureOptionResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetFutureOptionResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetFutureOptionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFutureOption
	 */
	public $GetFutureOptionResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeFutureOption GetFutureOptionResult
	 * @return XiFuturesTypeGetFutureOptionResponse
	 */
	public function __construct($_GetFutureOptionResult = null)
	{
		parent::__construct(array('GetFutureOptionResult'=>$_GetFutureOptionResult));
	}
	/**
	 * Set GetFutureOptionResult
	 * @param FutureOption GetFutureOptionResult
	 * @return FutureOption
	 */
	public function setGetFutureOptionResult($_GetFutureOptionResult)
	{
		return ($this->GetFutureOptionResult = $_GetFutureOptionResult);
	}
	/**
	 * Get GetFutureOptionResult
	 * @return XiFuturesTypeFutureOption
	 */
	public function getGetFutureOptionResult()
	{
		return $this->GetFutureOptionResult;
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