<?php
/**
 * Class file for XiGlobalFundamentalsTypeSearchFundamentalsResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeSearchFundamentalsResponse
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeSearchFundamentalsResponse extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The SearchFundamentalsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeArrayOfDescription
	 */
	public $SearchFundamentalsResult;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeArrayOfDescription SearchFundamentalsResult
	 * @return XiGlobalFundamentalsTypeSearchFundamentalsResponse
	 */
	public function __construct($_SearchFundamentalsResult = null)
	{
		parent::__construct(array('SearchFundamentalsResult'=>new XiGlobalFundamentalsTypeArrayOfDescription($_SearchFundamentalsResult)));
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
	 * @return XiGlobalFundamentalsTypeArrayOfDescription
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