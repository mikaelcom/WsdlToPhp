<?php
/**
 * Class file for XiOFACTypeSearchResponse
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeSearchResponse
 * @date 08/07/2012
 */
class XiOFACTypeSearchResponse extends XiOFACWsdlClass
{
	/**
	 * The SearchResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeSearchResults
	 */
	public $SearchResult;
	/**
	 * Constructor
	 * @param XiOFACTypeSearchResults SearchResult
	 * @return XiOFACTypeSearchResponse
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
	 * @return XiOFACTypeSearchResults
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