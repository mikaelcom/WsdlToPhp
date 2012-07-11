<?php
/**
 * Class file for XiRatesTypeGetHistoricalRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetHistoricalRatesResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetHistoricalRatesResponse extends XiRatesWsdlClass
{
	/**
	 * The GetHistoricalRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeHistoricalInterestRates
	 */
	public $GetHistoricalRatesResult;
	/**
	 * Constructor
	 * @param XiRatesTypeHistoricalInterestRates GetHistoricalRatesResult
	 * @return XiRatesTypeGetHistoricalRatesResponse
	 */
	public function __construct($_GetHistoricalRatesResult = null)
	{
		parent::__construct(array('GetHistoricalRatesResult'=>$_GetHistoricalRatesResult));
	}
	/**
	 * Set GetHistoricalRatesResult
	 * @param HistoricalInterestRates GetHistoricalRatesResult
	 * @return HistoricalInterestRates
	 */
	public function setGetHistoricalRatesResult($_GetHistoricalRatesResult)
	{
		return ($this->GetHistoricalRatesResult = $_GetHistoricalRatesResult);
	}
	/**
	 * Get GetHistoricalRatesResult
	 * @return XiRatesTypeHistoricalInterestRates
	 */
	public function getGetHistoricalRatesResult()
	{
		return $this->GetHistoricalRatesResult;
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