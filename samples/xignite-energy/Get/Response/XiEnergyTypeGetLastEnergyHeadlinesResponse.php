<?php
/**
 * Class file for XiEnergyTypeGetLastEnergyHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetLastEnergyHeadlinesResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetLastEnergyHeadlinesResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetLastEnergyHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeMarketHeadlines
	 */
	public $GetLastEnergyHeadlinesResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeMarketHeadlines GetLastEnergyHeadlinesResult
	 * @return XiEnergyTypeGetLastEnergyHeadlinesResponse
	 */
	public function __construct($_GetLastEnergyHeadlinesResult = null)
	{
		parent::__construct(array('GetLastEnergyHeadlinesResult'=>$_GetLastEnergyHeadlinesResult));
	}
	/**
	 * Set GetLastEnergyHeadlinesResult
	 * @param MarketHeadlines GetLastEnergyHeadlinesResult
	 * @return MarketHeadlines
	 */
	public function setGetLastEnergyHeadlinesResult($_GetLastEnergyHeadlinesResult)
	{
		return ($this->GetLastEnergyHeadlinesResult = $_GetLastEnergyHeadlinesResult);
	}
	/**
	 * Get GetLastEnergyHeadlinesResult
	 * @return XiEnergyTypeMarketHeadlines
	 */
	public function getGetLastEnergyHeadlinesResult()
	{
		return $this->GetLastEnergyHeadlinesResult;
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