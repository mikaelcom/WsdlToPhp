<?php
/**
 * Class file for XiEdgarTypeSearchFilingsResponse
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeSearchFilingsResponse
 * @date 08/07/2012
 */
class XiEdgarTypeSearchFilingsResponse extends XiEdgarWsdlClass
{
	/**
	 * The SearchFilingsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeSearchResult
	 */
	public $SearchFilingsResult;
	/**
	 * Constructor
	 * @param XiEdgarTypeSearchResult SearchFilingsResult
	 * @return XiEdgarTypeSearchFilingsResponse
	 */
	public function __construct($_SearchFilingsResult = null)
	{
		parent::__construct(array('SearchFilingsResult'=>$_SearchFilingsResult));
	}
	/**
	 * Set SearchFilingsResult
	 * @param SearchResult SearchFilingsResult
	 * @return SearchResult
	 */
	public function setSearchFilingsResult($_SearchFilingsResult)
	{
		return ($this->SearchFilingsResult = $_SearchFilingsResult);
	}
	/**
	 * Get SearchFilingsResult
	 * @return XiEdgarTypeSearchResult
	 */
	public function getSearchFilingsResult()
	{
		return $this->SearchFilingsResult;
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