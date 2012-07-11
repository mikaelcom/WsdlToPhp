<?php
/**
 * Class file for XiSecurityTypeGetHistoricalMonthlyMarketCapitalizationResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeGetHistoricalMonthlyMarketCapitalizationResponse
 * @date 08/07/2012
 */
class XiSecurityTypeGetHistoricalMonthlyMarketCapitalizationResponse extends XiSecurityWsdlClass
{
	/**
	 * The GetHistoricalMonthlyMarketCapitalizationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeHistoricalMarketCapitalization
	 */
	public $GetHistoricalMonthlyMarketCapitalizationResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeHistoricalMarketCapitalization GetHistoricalMonthlyMarketCapitalizationResult
	 * @return XiSecurityTypeGetHistoricalMonthlyMarketCapitalizationResponse
	 */
	public function __construct($_GetHistoricalMonthlyMarketCapitalizationResult = null)
	{
		parent::__construct(array('GetHistoricalMonthlyMarketCapitalizationResult'=>$_GetHistoricalMonthlyMarketCapitalizationResult));
	}
	/**
	 * Set GetHistoricalMonthlyMarketCapitalizationResult
	 * @param HistoricalMarketCapitalization GetHistoricalMonthlyMarketCapitalizationResult
	 * @return HistoricalMarketCapitalization
	 */
	public function setGetHistoricalMonthlyMarketCapitalizationResult($_GetHistoricalMonthlyMarketCapitalizationResult)
	{
		return ($this->GetHistoricalMonthlyMarketCapitalizationResult = $_GetHistoricalMonthlyMarketCapitalizationResult);
	}
	/**
	 * Get GetHistoricalMonthlyMarketCapitalizationResult
	 * @return XiSecurityTypeHistoricalMarketCapitalization
	 */
	public function getGetHistoricalMonthlyMarketCapitalizationResult()
	{
		return $this->GetHistoricalMonthlyMarketCapitalizationResult;
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