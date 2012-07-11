<?php
/**
 * Class file for XiMoneyMarketsTypeGetHistoricalSwapRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetHistoricalSwapRateResponse
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetHistoricalSwapRateResponse extends XiMoneyMarketsWsdlClass
{
	/**
	 * The GetHistoricalSwapRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeSwapRate
	 */
	public $GetHistoricalSwapRateResult;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeSwapRate GetHistoricalSwapRateResult
	 * @return XiMoneyMarketsTypeGetHistoricalSwapRateResponse
	 */
	public function __construct($_GetHistoricalSwapRateResult = null)
	{
		parent::__construct(array('GetHistoricalSwapRateResult'=>$_GetHistoricalSwapRateResult));
	}
	/**
	 * Set GetHistoricalSwapRateResult
	 * @param SwapRate GetHistoricalSwapRateResult
	 * @return SwapRate
	 */
	public function setGetHistoricalSwapRateResult($_GetHistoricalSwapRateResult)
	{
		return ($this->GetHistoricalSwapRateResult = $_GetHistoricalSwapRateResult);
	}
	/**
	 * Get GetHistoricalSwapRateResult
	 * @return XiMoneyMarketsTypeSwapRate
	 */
	public function getGetHistoricalSwapRateResult()
	{
		return $this->GetHistoricalSwapRateResult;
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