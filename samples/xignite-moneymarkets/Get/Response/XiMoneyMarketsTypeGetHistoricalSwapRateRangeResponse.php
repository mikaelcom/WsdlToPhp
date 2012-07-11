<?php
/**
 * Class file for XiMoneyMarketsTypeGetHistoricalSwapRateRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetHistoricalSwapRateRangeResponse
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetHistoricalSwapRateRangeResponse extends XiMoneyMarketsWsdlClass
{
	/**
	 * The GetHistoricalSwapRateRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeArrayOfSwapRate
	 */
	public $GetHistoricalSwapRateRangeResult;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeArrayOfSwapRate GetHistoricalSwapRateRangeResult
	 * @return XiMoneyMarketsTypeGetHistoricalSwapRateRangeResponse
	 */
	public function __construct($_GetHistoricalSwapRateRangeResult = null)
	{
		parent::__construct(array('GetHistoricalSwapRateRangeResult'=>new XiMoneyMarketsTypeArrayOfSwapRate($_GetHistoricalSwapRateRangeResult)));
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
	 * @return XiMoneyMarketsTypeArrayOfSwapRate
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