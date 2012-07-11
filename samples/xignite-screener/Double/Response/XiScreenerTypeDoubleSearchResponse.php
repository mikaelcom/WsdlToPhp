<?php
/**
 * Class file for XiScreenerTypeDoubleSearchResponse
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeDoubleSearchResponse
 * @date 08/07/2012
 */
class XiScreenerTypeDoubleSearchResponse extends XiScreenerWsdlClass
{
	/**
	 * The DoubleSearchResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeSearchResults
	 */
	public $DoubleSearchResult;
	/**
	 * Constructor
	 * @param XiScreenerTypeSearchResults DoubleSearchResult
	 * @return XiScreenerTypeDoubleSearchResponse
	 */
	public function __construct($_DoubleSearchResult = null)
	{
		parent::__construct(array('DoubleSearchResult'=>$_DoubleSearchResult));
	}
	/**
	 * Set DoubleSearchResult
	 * @param SearchResults DoubleSearchResult
	 * @return SearchResults
	 */
	public function setDoubleSearchResult($_DoubleSearchResult)
	{
		return ($this->DoubleSearchResult = $_DoubleSearchResult);
	}
	/**
	 * Get DoubleSearchResult
	 * @return XiScreenerTypeSearchResults
	 */
	public function getDoubleSearchResult()
	{
		return $this->DoubleSearchResult;
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