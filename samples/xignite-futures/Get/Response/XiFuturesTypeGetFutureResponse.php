<?php
/**
 * Class file for XiFuturesTypeGetFutureResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetFutureResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetFutureResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetFutureResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFuture
	 */
	public $GetFutureResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeFuture GetFutureResult
	 * @return XiFuturesTypeGetFutureResponse
	 */
	public function __construct($_GetFutureResult = null)
	{
		parent::__construct(array('GetFutureResult'=>$_GetFutureResult));
	}
	/**
	 * Set GetFutureResult
	 * @param Future GetFutureResult
	 * @return Future
	 */
	public function setGetFutureResult($_GetFutureResult)
	{
		return ($this->GetFutureResult = $_GetFutureResult);
	}
	/**
	 * Get GetFutureResult
	 * @return XiFuturesTypeFuture
	 */
	public function getGetFutureResult()
	{
		return $this->GetFutureResult;
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