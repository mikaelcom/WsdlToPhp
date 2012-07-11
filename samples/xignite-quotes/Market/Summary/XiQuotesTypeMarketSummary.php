<?php
/**
 * Class file for XiQuotesTypeMarketSummary
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeMarketSummary
 * @date 08/07/2012
 */
class XiQuotesTypeMarketSummary extends XiQuotesTypeCommon
{
	/**
	 * The Indexes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeArrayOfIndex
	 */
	public $Indexes;
	/**
	 * The Indicators
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeArrayOfIndicator
	 */
	public $Indicators;
	/**
	 * Constructor
	 * @param XiQuotesTypeArrayOfIndex Indexes
	 * @param XiQuotesTypeArrayOfIndicator Indicators
	 * @return XiQuotesTypeMarketSummary
	 */
	public function __construct($_Indexes = null,$_Indicators = null)
	{
		XiQuotesWsdlClass::__construct(array('Indexes'=>new XiQuotesTypeArrayOfIndex($_Indexes),'Indicators'=>new XiQuotesTypeArrayOfIndicator($_Indicators)));
	}
	/**
	 * Set Indexes
	 * @param ArrayOfIndex Indexes
	 * @return ArrayOfIndex
	 */
	public function setIndexes($_Indexes)
	{
		return ($this->Indexes = $_Indexes);
	}
	/**
	 * Get Indexes
	 * @return XiQuotesTypeArrayOfIndex
	 */
	public function getIndexes()
	{
		return $this->Indexes;
	}
	/**
	 * Set Indicators
	 * @param ArrayOfIndicator Indicators
	 * @return ArrayOfIndicator
	 */
	public function setIndicators($_Indicators)
	{
		return ($this->Indicators = $_Indicators);
	}
	/**
	 * Get Indicators
	 * @return XiQuotesTypeArrayOfIndicator
	 */
	public function getIndicators()
	{
		return $this->Indicators;
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