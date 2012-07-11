<?php
/**
 * Class file for XiRatesTypeGetHistoricalSwapRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetHistoricalSwapRateResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetHistoricalSwapRateResponse extends XiRatesWsdlClass
{
	/**
	 * The GetHistoricalSwapRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeSwapRate
	 */
	public $GetHistoricalSwapRateResult;
	/**
	 * Constructor
	 * @param XiRatesTypeSwapRate GetHistoricalSwapRateResult
	 * @return XiRatesTypeGetHistoricalSwapRateResponse
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
	 * @return XiRatesTypeSwapRate
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