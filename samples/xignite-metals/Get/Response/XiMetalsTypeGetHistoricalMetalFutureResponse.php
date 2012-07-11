<?php
/**
 * Class file for XiMetalsTypeGetHistoricalMetalFutureResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetHistoricalMetalFutureResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetHistoricalMetalFutureResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetHistoricalMetalFutureResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeFutureQuote
	 */
	public $GetHistoricalMetalFutureResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeFutureQuote GetHistoricalMetalFutureResult
	 * @return XiMetalsTypeGetHistoricalMetalFutureResponse
	 */
	public function __construct($_GetHistoricalMetalFutureResult = null)
	{
		parent::__construct(array('GetHistoricalMetalFutureResult'=>$_GetHistoricalMetalFutureResult));
	}
	/**
	 * Set GetHistoricalMetalFutureResult
	 * @param FutureQuote GetHistoricalMetalFutureResult
	 * @return FutureQuote
	 */
	public function setGetHistoricalMetalFutureResult($_GetHistoricalMetalFutureResult)
	{
		return ($this->GetHistoricalMetalFutureResult = $_GetHistoricalMetalFutureResult);
	}
	/**
	 * Get GetHistoricalMetalFutureResult
	 * @return XiMetalsTypeFutureQuote
	 */
	public function getGetHistoricalMetalFutureResult()
	{
		return $this->GetHistoricalMetalFutureResult;
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