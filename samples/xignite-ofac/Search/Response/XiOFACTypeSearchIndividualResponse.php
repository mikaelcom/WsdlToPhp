<?php
/**
 * Class file for XiOFACTypeSearchIndividualResponse
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeSearchIndividualResponse
 * @date 08/07/2012
 */
class XiOFACTypeSearchIndividualResponse extends XiOFACWsdlClass
{
	/**
	 * The SearchIndividualResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeSearchResults
	 */
	public $SearchIndividualResult;
	/**
	 * Constructor
	 * @param XiOFACTypeSearchResults SearchIndividualResult
	 * @return XiOFACTypeSearchIndividualResponse
	 */
	public function __construct($_SearchIndividualResult = null)
	{
		parent::__construct(array('SearchIndividualResult'=>$_SearchIndividualResult));
	}
	/**
	 * Set SearchIndividualResult
	 * @param SearchResults SearchIndividualResult
	 * @return SearchResults
	 */
	public function setSearchIndividualResult($_SearchIndividualResult)
	{
		return ($this->SearchIndividualResult = $_SearchIndividualResult);
	}
	/**
	 * Get SearchIndividualResult
	 * @return XiOFACTypeSearchResults
	 */
	public function getSearchIndividualResult()
	{
		return $this->SearchIndividualResult;
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