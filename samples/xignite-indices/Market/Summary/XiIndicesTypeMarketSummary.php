<?php
/**
 * Class file for XiIndicesTypeMarketSummary
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeMarketSummary
 * @date 08/07/2012
 */
class XiIndicesTypeMarketSummary extends XiIndicesTypeCommon
{
	/**
	 * The Indexes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeArrayOfIndex
	 */
	public $Indexes;
	/**
	 * The Indicators
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeArrayOfIndicator
	 */
	public $Indicators;
	/**
	 * Constructor
	 * @param XiIndicesTypeArrayOfIndex Indexes
	 * @param XiIndicesTypeArrayOfIndicator Indicators
	 * @return XiIndicesTypeMarketSummary
	 */
	public function __construct($_Indexes = null,$_Indicators = null)
	{
		XiIndicesWsdlClass::__construct(array('Indexes'=>new XiIndicesTypeArrayOfIndex($_Indexes),'Indicators'=>new XiIndicesTypeArrayOfIndicator($_Indicators)));
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
	 * @return XiIndicesTypeArrayOfIndex
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
	 * @return XiIndicesTypeArrayOfIndicator
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