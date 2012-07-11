<?php
/**
 * Class file for XiMetalsTypeGetDelayedMetalFutureResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetDelayedMetalFutureResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetDelayedMetalFutureResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetDelayedMetalFutureResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeFutureQuote
	 */
	public $GetDelayedMetalFutureResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeFutureQuote GetDelayedMetalFutureResult
	 * @return XiMetalsTypeGetDelayedMetalFutureResponse
	 */
	public function __construct($_GetDelayedMetalFutureResult = null)
	{
		parent::__construct(array('GetDelayedMetalFutureResult'=>$_GetDelayedMetalFutureResult));
	}
	/**
	 * Set GetDelayedMetalFutureResult
	 * @param FutureQuote GetDelayedMetalFutureResult
	 * @return FutureQuote
	 */
	public function setGetDelayedMetalFutureResult($_GetDelayedMetalFutureResult)
	{
		return ($this->GetDelayedMetalFutureResult = $_GetDelayedMetalFutureResult);
	}
	/**
	 * Get GetDelayedMetalFutureResult
	 * @return XiMetalsTypeFutureQuote
	 */
	public function getGetDelayedMetalFutureResult()
	{
		return $this->GetDelayedMetalFutureResult;
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