<?php
/**
 * Class file for SPPeopleTypeResolvePrincipalsResponse
 * @date 06/07/2012
 */
/**
 * Class SPPeopleTypeResolvePrincipalsResponse
 * @date 06/07/2012
 */
class SPPeopleTypeResolvePrincipalsResponse extends SPPeopleWsdlClass
{
	/**
	 * The ResolvePrincipalsResult
	 * @var SPPeopleTypeArrayOfPrincipalInfo
	 */
	public $ResolvePrincipalsResult;
	/**
	 * Constructor
	 * @param SPPeopleTypeArrayOfPrincipalInfo ResolvePrincipalsResult
	 * @return SPPeopleTypeResolvePrincipalsResponse
	 */
	public function __construct($_ResolvePrincipalsResult = null)
	{
		parent::__construct(array('ResolvePrincipalsResult'=>new SPPeopleTypeArrayOfPrincipalInfo($_ResolvePrincipalsResult)));
	}
	/**
	 * Set ResolvePrincipalsResult
	 * @param ArrayOfPrincipalInfo ResolvePrincipalsResult
	 * @return ArrayOfPrincipalInfo
	 */
	public function setResolvePrincipalsResult($_ResolvePrincipalsResult)
	{
		return ($this->ResolvePrincipalsResult = $_ResolvePrincipalsResult);
	}
	/**
	 * Get ResolvePrincipalsResult
	 * @return SPPeopleTypeArrayOfPrincipalInfo
	 */
	public function getResolvePrincipalsResult()
	{
		return $this->ResolvePrincipalsResult;
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