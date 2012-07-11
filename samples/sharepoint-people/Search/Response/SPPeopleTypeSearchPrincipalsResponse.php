<?php
/**
 * Class file for SPPeopleTypeSearchPrincipalsResponse
 * @date 06/07/2012
 */
/**
 * Class SPPeopleTypeSearchPrincipalsResponse
 * @date 06/07/2012
 */
class SPPeopleTypeSearchPrincipalsResponse extends SPPeopleWsdlClass
{
	/**
	 * The SearchPrincipalsResult
	 * @var SPPeopleTypeArrayOfPrincipalInfo
	 */
	public $SearchPrincipalsResult;
	/**
	 * Constructor
	 * @param SPPeopleTypeArrayOfPrincipalInfo SearchPrincipalsResult
	 * @return SPPeopleTypeSearchPrincipalsResponse
	 */
	public function __construct($_SearchPrincipalsResult = null)
	{
		parent::__construct(array('SearchPrincipalsResult'=>new SPPeopleTypeArrayOfPrincipalInfo($_SearchPrincipalsResult)));
	}
	/**
	 * Set SearchPrincipalsResult
	 * @param ArrayOfPrincipalInfo SearchPrincipalsResult
	 * @return ArrayOfPrincipalInfo
	 */
	public function setSearchPrincipalsResult($_SearchPrincipalsResult)
	{
		return ($this->SearchPrincipalsResult = $_SearchPrincipalsResult);
	}
	/**
	 * Get SearchPrincipalsResult
	 * @return SPPeopleTypeArrayOfPrincipalInfo
	 */
	public function getSearchPrincipalsResult()
	{
		return $this->SearchPrincipalsResult;
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