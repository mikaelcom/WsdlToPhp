<?php
/**
 * Class file for XiEnergyTypeGetTopEnergyHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetTopEnergyHeadlinesResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetTopEnergyHeadlinesResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetTopEnergyHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeMarketHeadlines
	 */
	public $GetTopEnergyHeadlinesResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeMarketHeadlines GetTopEnergyHeadlinesResult
	 * @return XiEnergyTypeGetTopEnergyHeadlinesResponse
	 */
	public function __construct($_GetTopEnergyHeadlinesResult = null)
	{
		parent::__construct(array('GetTopEnergyHeadlinesResult'=>$_GetTopEnergyHeadlinesResult));
	}
	/**
	 * Set GetTopEnergyHeadlinesResult
	 * @param MarketHeadlines GetTopEnergyHeadlinesResult
	 * @return MarketHeadlines
	 */
	public function setGetTopEnergyHeadlinesResult($_GetTopEnergyHeadlinesResult)
	{
		return ($this->GetTopEnergyHeadlinesResult = $_GetTopEnergyHeadlinesResult);
	}
	/**
	 * Get GetTopEnergyHeadlinesResult
	 * @return XiEnergyTypeMarketHeadlines
	 */
	public function getGetTopEnergyHeadlinesResult()
	{
		return $this->GetTopEnergyHeadlinesResult;
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