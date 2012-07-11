<?php
/**
 * Class file for XiFundamentalsTypeSearchFundamentalsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeSearchFundamentalsResponse
 * @date 08/07/2012
 */
class XiFundamentalsTypeSearchFundamentalsResponse extends XiFundamentalsWsdlClass
{
	/**
	 * The SearchFundamentalsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeArrayOfDescription
	 */
	public $SearchFundamentalsResult;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeArrayOfDescription SearchFundamentalsResult
	 * @return XiFundamentalsTypeSearchFundamentalsResponse
	 */
	public function __construct($_SearchFundamentalsResult = null)
	{
		parent::__construct(array('SearchFundamentalsResult'=>new XiFundamentalsTypeArrayOfDescription($_SearchFundamentalsResult)));
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
	 * @return XiFundamentalsTypeArrayOfDescription
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