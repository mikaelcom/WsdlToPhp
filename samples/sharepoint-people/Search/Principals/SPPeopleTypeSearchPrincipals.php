<?php
/**
 * Class file for SPPeopleTypeSearchPrincipals
 * @date 06/07/2012
 */
/**
 * Class SPPeopleTypeSearchPrincipals
 * @date 06/07/2012
 */
class SPPeopleTypeSearchPrincipals extends SPPeopleWsdlClass
{
	/**
	 * The searchText
	 * @var string
	 */
	public $searchText;
	/**
	 * The maxResults
	 * @var int
	 */
	public $maxResults;
	/**
	 * The principalType
	 * @var SPPrincipalType
	 */
	public $principalType;
	/**
	 * Constructor
	 * @param string searchText
	 * @param int maxResults
	 * @param SPPrincipalType principalType
	 * @return SPPeopleTypeSearchPrincipals
	 */
	public function __construct($_searchText = null,$_maxResults = null,$_principalType = null)
	{
		parent::__construct(array('searchText'=>$_searchText,'maxResults'=>$_maxResults,'principalType'=>$_principalType));
	}
	/**
	 * Set searchText
	 * @param string searchText
	 * @return string
	 */
	public function setSearchText($_searchText)
	{
		return ($this->searchText = $_searchText);
	}
	/**
	 * Get searchText
	 * @return string
	 */
	public function getSearchText()
	{
		return $this->searchText;
	}
	/**
	 * Set maxResults
	 * @param int maxResults
	 * @return int
	 */
	public function setMaxResults($_maxResults)
	{
		return ($this->maxResults = $_maxResults);
	}
	/**
	 * Get maxResults
	 * @return int
	 */
	public function getMaxResults()
	{
		return $this->maxResults;
	}
	/**
	 * Set principalType
	 * @param SPPrincipalType principalType
	 * @return SPPrincipalType
	 */
	public function setPrincipalType($_principalType)
	{
		return ($this->principalType = $_principalType);
	}
	/**
	 * Get principalType
	 * @return SPPrincipalType
	 */
	public function getPrincipalType()
	{
		return $this->principalType;
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