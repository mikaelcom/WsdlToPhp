<?php
/**
 * Class file for XiOFACTypeSearchOrganizationResponse
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeSearchOrganizationResponse
 * @date 08/07/2012
 */
class XiOFACTypeSearchOrganizationResponse extends XiOFACWsdlClass
{
	/**
	 * The SearchOrganizationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeSearchResults
	 */
	public $SearchOrganizationResult;
	/**
	 * Constructor
	 * @param XiOFACTypeSearchResults SearchOrganizationResult
	 * @return XiOFACTypeSearchOrganizationResponse
	 */
	public function __construct($_SearchOrganizationResult = null)
	{
		parent::__construct(array('SearchOrganizationResult'=>$_SearchOrganizationResult));
	}
	/**
	 * Set SearchOrganizationResult
	 * @param SearchResults SearchOrganizationResult
	 * @return SearchResults
	 */
	public function setSearchOrganizationResult($_SearchOrganizationResult)
	{
		return ($this->SearchOrganizationResult = $_SearchOrganizationResult);
	}
	/**
	 * Get SearchOrganizationResult
	 * @return XiOFACTypeSearchResults
	 */
	public function getSearchOrganizationResult()
	{
		return $this->SearchOrganizationResult;
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