<?php
/**
 * Class file for XiScreenerTypeTripleSearchResponse
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeTripleSearchResponse
 * @date 08/07/2012
 */
class XiScreenerTypeTripleSearchResponse extends XiScreenerWsdlClass
{
	/**
	 * The TripleSearchResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeSearchResults
	 */
	public $TripleSearchResult;
	/**
	 * Constructor
	 * @param XiScreenerTypeSearchResults TripleSearchResult
	 * @return XiScreenerTypeTripleSearchResponse
	 */
	public function __construct($_TripleSearchResult = null)
	{
		parent::__construct(array('TripleSearchResult'=>$_TripleSearchResult));
	}
	/**
	 * Set TripleSearchResult
	 * @param SearchResults TripleSearchResult
	 * @return SearchResults
	 */
	public function setTripleSearchResult($_TripleSearchResult)
	{
		return ($this->TripleSearchResult = $_TripleSearchResult);
	}
	/**
	 * Get TripleSearchResult
	 * @return XiScreenerTypeSearchResults
	 */
	public function getTripleSearchResult()
	{
		return $this->TripleSearchResult;
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