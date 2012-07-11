<?php
/**
 * Class file for XiFuturesTypeGetNextFutureResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetNextFutureResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetNextFutureResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetNextFutureResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFuture
	 */
	public $GetNextFutureResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeFuture GetNextFutureResult
	 * @return XiFuturesTypeGetNextFutureResponse
	 */
	public function __construct($_GetNextFutureResult = null)
	{
		parent::__construct(array('GetNextFutureResult'=>$_GetNextFutureResult));
	}
	/**
	 * Set GetNextFutureResult
	 * @param Future GetNextFutureResult
	 * @return Future
	 */
	public function setGetNextFutureResult($_GetNextFutureResult)
	{
		return ($this->GetNextFutureResult = $_GetNextFutureResult);
	}
	/**
	 * Get GetNextFutureResult
	 * @return XiFuturesTypeFuture
	 */
	public function getGetNextFutureResult()
	{
		return $this->GetNextFutureResult;
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