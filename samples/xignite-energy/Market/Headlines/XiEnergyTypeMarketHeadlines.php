<?php
/**
 * Class file for XiEnergyTypeMarketHeadlines
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeMarketHeadlines
 * @date 08/07/2012
 */
class XiEnergyTypeMarketHeadlines extends XiEnergyTypeCommon
{
	/**
	 * The Headlines
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeArrayOfMarketHeadline
	 */
	public $Headlines;
	/**
	 * Constructor
	 * @param XiEnergyTypeArrayOfMarketHeadline Headlines
	 * @return XiEnergyTypeMarketHeadlines
	 */
	public function __construct($_Headlines = null)
	{
		XiEnergyWsdlClass::__construct(array('Headlines'=>new XiEnergyTypeArrayOfMarketHeadline($_Headlines)));
	}
	/**
	 * Set Headlines
	 * @param ArrayOfMarketHeadline Headlines
	 * @return ArrayOfMarketHeadline
	 */
	public function setHeadlines($_Headlines)
	{
		return ($this->Headlines = $_Headlines);
	}
	/**
	 * Get Headlines
	 * @return XiEnergyTypeArrayOfMarketHeadline
	 */
	public function getHeadlines()
	{
		return $this->Headlines;
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