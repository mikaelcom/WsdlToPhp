<?php
/**
 * Class file for XiRatesTypeGetHistoricalSwapRateRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetHistoricalSwapRateRangeResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetHistoricalSwapRateRangeResponse extends XiRatesWsdlClass
{
	/**
	 * The GetHistoricalSwapRateRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfSwapRate
	 */
	public $GetHistoricalSwapRateRangeResult;
	/**
	 * Constructor
	 * @param XiRatesTypeArrayOfSwapRate GetHistoricalSwapRateRangeResult
	 * @return XiRatesTypeGetHistoricalSwapRateRangeResponse
	 */
	public function __construct($_GetHistoricalSwapRateRangeResult = null)
	{
		parent::__construct(array('GetHistoricalSwapRateRangeResult'=>new XiRatesTypeArrayOfSwapRate($_GetHistoricalSwapRateRangeResult)));
	}
	/**
	 * Set GetHistoricalSwapRateRangeResult
	 * @param ArrayOfSwapRate GetHistoricalSwapRateRangeResult
	 * @return ArrayOfSwapRate
	 */
	public function setGetHistoricalSwapRateRangeResult($_GetHistoricalSwapRateRangeResult)
	{
		return ($this->GetHistoricalSwapRateRangeResult = $_GetHistoricalSwapRateRangeResult);
	}
	/**
	 * Get GetHistoricalSwapRateRangeResult
	 * @return XiRatesTypeArrayOfSwapRate
	 */
	public function getGetHistoricalSwapRateRangeResult()
	{
		return $this->GetHistoricalSwapRateRangeResult;
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