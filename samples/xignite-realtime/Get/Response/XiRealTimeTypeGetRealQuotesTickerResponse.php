<?php
/**
 * Class file for XiRealTimeTypeGetRealQuotesTickerResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetRealQuotesTickerResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetRealQuotesTickerResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetRealQuotesTickerResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeTickerTape
	 */
	public $GetRealQuotesTickerResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeTickerTape GetRealQuotesTickerResult
	 * @return XiRealTimeTypeGetRealQuotesTickerResponse
	 */
	public function __construct($_GetRealQuotesTickerResult = null)
	{
		parent::__construct(array('GetRealQuotesTickerResult'=>$_GetRealQuotesTickerResult));
	}
	/**
	 * Set GetRealQuotesTickerResult
	 * @param TickerTape GetRealQuotesTickerResult
	 * @return TickerTape
	 */
	public function setGetRealQuotesTickerResult($_GetRealQuotesTickerResult)
	{
		return ($this->GetRealQuotesTickerResult = $_GetRealQuotesTickerResult);
	}
	/**
	 * Get GetRealQuotesTickerResult
	 * @return XiRealTimeTypeTickerTape
	 */
	public function getGetRealQuotesTickerResult()
	{
		return $this->GetRealQuotesTickerResult;
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