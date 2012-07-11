<?php
/**
 * Class file for XiFuturesTypeMarketHeadlines
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeMarketHeadlines
 * @date 08/07/2012
 */
class XiFuturesTypeMarketHeadlines extends XiFuturesTypeCommon
{
	/**
	 * The Headlines
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfMarketHeadline
	 */
	public $Headlines;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfMarketHeadline Headlines
	 * @return XiFuturesTypeMarketHeadlines
	 */
	public function __construct($_Headlines = null)
	{
		XiFuturesWsdlClass::__construct(array('Headlines'=>new XiFuturesTypeArrayOfMarketHeadline($_Headlines)));
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
	 * @return XiFuturesTypeArrayOfMarketHeadline
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