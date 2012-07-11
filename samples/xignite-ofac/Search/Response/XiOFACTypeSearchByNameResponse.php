<?php
/**
 * Class file for XiOFACTypeSearchByNameResponse
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeSearchByNameResponse
 * @date 08/07/2012
 */
class XiOFACTypeSearchByNameResponse extends XiOFACWsdlClass
{
	/**
	 * The SearchByNameResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeSearchResults
	 */
	public $SearchByNameResult;
	/**
	 * Constructor
	 * @param XiOFACTypeSearchResults SearchByNameResult
	 * @return XiOFACTypeSearchByNameResponse
	 */
	public function __construct($_SearchByNameResult = null)
	{
		parent::__construct(array('SearchByNameResult'=>$_SearchByNameResult));
	}
	/**
	 * Set SearchByNameResult
	 * @param SearchResults SearchByNameResult
	 * @return SearchResults
	 */
	public function setSearchByNameResult($_SearchByNameResult)
	{
		return ($this->SearchByNameResult = $_SearchByNameResult);
	}
	/**
	 * Get SearchByNameResult
	 * @return XiOFACTypeSearchResults
	 */
	public function getSearchByNameResult()
	{
		return $this->SearchByNameResult;
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