<?php
/**
 * Class file for XiScreenerTypeSearchFundamentalsResponse
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeSearchFundamentalsResponse
 * @date 08/07/2012
 */
class XiScreenerTypeSearchFundamentalsResponse extends XiScreenerWsdlClass
{
	/**
	 * The SearchFundamentalsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeArrayOfDescription
	 */
	public $SearchFundamentalsResult;
	/**
	 * Constructor
	 * @param XiScreenerTypeArrayOfDescription SearchFundamentalsResult
	 * @return XiScreenerTypeSearchFundamentalsResponse
	 */
	public function __construct($_SearchFundamentalsResult = null)
	{
		parent::__construct(array('SearchFundamentalsResult'=>new XiScreenerTypeArrayOfDescription($_SearchFundamentalsResult)));
	}
	/**
	 * Set SearchFundamentalsResult
	 * @param ArrayOfDescription SearchFundamentalsResult
	 * @return ArrayOfDescription
	 */
	public function setSearchFundamentalsResult($_SearchFundamentalsResult)
	{
		return ($this->SearchFundamentalsResult = $_SearchFundamentalsResult);
	}
	/**
	 * Get SearchFundamentalsResult
	 * @return XiScreenerTypeArrayOfDescription
	 */
	public function getSearchFundamentalsResult()
	{
		return $this->SearchFundamentalsResult;
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