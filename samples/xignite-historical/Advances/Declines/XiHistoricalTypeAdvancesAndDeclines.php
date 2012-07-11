<?php
/**
 * Class file for XiHistoricalTypeAdvancesAndDeclines
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeAdvancesAndDeclines
 * @date 08/07/2012
 */
class XiHistoricalTypeAdvancesAndDeclines extends XiHistoricalTypeCommon
{
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * The MarketChanges
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfMarketChange
	 */
	public $MarketChanges;
	/**
	 * Constructor
	 * @param string AsOfDate
	 * @param XiHistoricalTypeArrayOfMarketChange MarketChanges
	 * @return XiHistoricalTypeAdvancesAndDeclines
	 */
	public function __construct($_AsOfDate = null,$_MarketChanges = null)
	{
		XiHistoricalWsdlClass::__construct(array('AsOfDate'=>$_AsOfDate,'MarketChanges'=>new XiHistoricalTypeArrayOfMarketChange($_MarketChanges)));
	}
	/**
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
	}
	/**
	 * Set MarketChanges
	 * @param ArrayOfMarketChange MarketChanges
	 * @return ArrayOfMarketChange
	 */
	public function setMarketChanges($_MarketChanges)
	{
		return ($this->MarketChanges = $_MarketChanges);
	}
	/**
	 * Get MarketChanges
	 * @return XiHistoricalTypeArrayOfMarketChange
	 */
	public function getMarketChanges()
	{
		return $this->MarketChanges;
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