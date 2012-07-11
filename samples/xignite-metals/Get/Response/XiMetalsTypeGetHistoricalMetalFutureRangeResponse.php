<?php
/**
 * Class file for XiMetalsTypeGetHistoricalMetalFutureRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetHistoricalMetalFutureRangeResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetHistoricalMetalFutureRangeResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetHistoricalMetalFutureRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeFutureQuotes
	 */
	public $GetHistoricalMetalFutureRangeResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeFutureQuotes GetHistoricalMetalFutureRangeResult
	 * @return XiMetalsTypeGetHistoricalMetalFutureRangeResponse
	 */
	public function __construct($_GetHistoricalMetalFutureRangeResult = null)
	{
		parent::__construct(array('GetHistoricalMetalFutureRangeResult'=>$_GetHistoricalMetalFutureRangeResult));
	}
	/**
	 * Set GetHistoricalMetalFutureRangeResult
	 * @param FutureQuotes GetHistoricalMetalFutureRangeResult
	 * @return FutureQuotes
	 */
	public function setGetHistoricalMetalFutureRangeResult($_GetHistoricalMetalFutureRangeResult)
	{
		return ($this->GetHistoricalMetalFutureRangeResult = $_GetHistoricalMetalFutureRangeResult);
	}
	/**
	 * Get GetHistoricalMetalFutureRangeResult
	 * @return XiMetalsTypeFutureQuotes
	 */
	public function getGetHistoricalMetalFutureRangeResult()
	{
		return $this->GetHistoricalMetalFutureRangeResult;
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