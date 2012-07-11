<?php
/**
 * Class file for XiEnergyTypeGetTodaysEnergyHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetTodaysEnergyHeadlinesResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetTodaysEnergyHeadlinesResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetTodaysEnergyHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeMarketHeadlines
	 */
	public $GetTodaysEnergyHeadlinesResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeMarketHeadlines GetTodaysEnergyHeadlinesResult
	 * @return XiEnergyTypeGetTodaysEnergyHeadlinesResponse
	 */
	public function __construct($_GetTodaysEnergyHeadlinesResult = null)
	{
		parent::__construct(array('GetTodaysEnergyHeadlinesResult'=>$_GetTodaysEnergyHeadlinesResult));
	}
	/**
	 * Set GetTodaysEnergyHeadlinesResult
	 * @param MarketHeadlines GetTodaysEnergyHeadlinesResult
	 * @return MarketHeadlines
	 */
	public function setGetTodaysEnergyHeadlinesResult($_GetTodaysEnergyHeadlinesResult)
	{
		return ($this->GetTodaysEnergyHeadlinesResult = $_GetTodaysEnergyHeadlinesResult);
	}
	/**
	 * Get GetTodaysEnergyHeadlinesResult
	 * @return XiEnergyTypeMarketHeadlines
	 */
	public function getGetTodaysEnergyHeadlinesResult()
	{
		return $this->GetTodaysEnergyHeadlinesResult;
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