<?php
/**
 * Class file for SPPeopleServiceSearch
 * @date 06/07/2012
 */
/**
 * Class SPPeopleServiceSearch
 * @date 06/07/2012
 */
class SPPeopleServiceSearch extends SPPeopleWsdlClass
{
	/**
	 * Method to call SearchPrincipals
	 * @uses SPPeopleWsdlClass::getSoapClient()
	 * @uses SPPeopleWsdlClass::setResult()
	 * @uses SPPeopleWsdlClass::getResult()
	 * @uses SPPeopleWsdlClass::saveLastError()
	 * @uses SPPeopleTypeSearchPrincipals::getSearchText()
	 * @uses SPPeopleTypeSearchPrincipals::getMaxResults()
	 * @uses SPPeopleTypeSearchPrincipals::getPrincipalType()
	 * @param SPPeopleTypeSearchPrincipals SearchPrincipals
	 * @return SPPeopleTypeSearchPrincipalsResponse
	 */
	public function SearchPrincipals(SPPeopleTypeSearchPrincipals $_SPPeopleTypeSearchPrincipals)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchPrincipals(array('searchText'=>$_SPPeopleTypeSearchPrincipals->getSearchText(),'maxResults'=>$_SPPeopleTypeSearchPrincipals->getMaxResults(),'principalType'=>$_SPPeopleTypeSearchPrincipals->getPrincipalType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return SPPeopleTypeSearchPrincipalsResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>