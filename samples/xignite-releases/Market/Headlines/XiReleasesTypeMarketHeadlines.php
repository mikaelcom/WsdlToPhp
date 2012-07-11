<?php
/**
 * Class file for XiReleasesTypeMarketHeadlines
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeMarketHeadlines
 * @date 08/07/2012
 */
class XiReleasesTypeMarketHeadlines extends XiReleasesTypeCommon
{
	/**
	 * The Headlines
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeArrayOfMarketHeadline
	 */
	public $Headlines;
	/**
	 * Constructor
	 * @param XiReleasesTypeArrayOfMarketHeadline Headlines
	 * @return XiReleasesTypeMarketHeadlines
	 */
	public function __construct($_Headlines = null)
	{
		XiReleasesWsdlClass::__construct(array('Headlines'=>new XiReleasesTypeArrayOfMarketHeadline($_Headlines)));
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
	 * @return XiReleasesTypeArrayOfMarketHeadline
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