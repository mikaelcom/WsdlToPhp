<?php
/**
 * Class file for XiScreenerTypeSearchResponse
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeSearchResponse
 * @date 08/07/2012
 */
class XiScreenerTypeSearchResponse extends XiScreenerWsdlClass
{
	/**
	 * The SearchResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeSearchResults
	 */
	public $SearchResult;
	/**
	 * Constructor
	 * @param XiScreenerTypeSearchResults SearchResult
	 * @return XiScreenerTypeSearchResponse
	 */
	public function __construct($_SearchResult = null)
	{
		parent::__construct(array('SearchResult'=>$_SearchResult));
	}
	/**
	 * Set SearchResult
	 * @param SearchResults SearchResult
	 * @return SearchResults
	 */
	public function setSearchResult($_SearchResult)
	{
		return ($this->SearchResult = $_SearchResult);
	}
	/**
	 * Get SearchResult
	 * @return XiScreenerTypeSearchResults
	 */
	public function getSearchResult()
	{
		return $this->SearchResult;
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