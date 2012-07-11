<?php
/**
 * Class file for SPPeopleServiceResolve
 * @date 06/07/2012
 */
/**
 * Class SPPeopleServiceResolve
 * @date 06/07/2012
 */
class SPPeopleServiceResolve extends SPPeopleWsdlClass
{
	/**
	 * Method to call ResolvePrincipals
	 * @uses SPPeopleWsdlClass::getSoapClient()
	 * @uses SPPeopleWsdlClass::setResult()
	 * @uses SPPeopleWsdlClass::getResult()
	 * @uses SPPeopleWsdlClass::saveLastError()
	 * @uses SPPeopleTypeResolvePrincipals::getPrincipalKeys()
	 * @uses SPPeopleTypeResolvePrincipals::getPrincipalType()
	 * @uses SPPeopleTypeResolvePrincipals::getAddToUserInfoList()
	 * @param SPPeopleTypeResolvePrincipals ResolvePrincipals
	 * @return SPPeopleTypeResolvePrincipalsResponse
	 */
	public function ResolvePrincipals(SPPeopleTypeResolvePrincipals $_SPPeopleTypeResolvePrincipals)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ResolvePrincipals(array('principalKeys'=>$_SPPeopleTypeResolvePrincipals->getPrincipalKeys(),'principalType'=>$_SPPeopleTypeResolvePrincipals->getPrincipalType(),'addToUserInfoList'=>$_SPPeopleTypeResolvePrincipals->getAddToUserInfoList())));
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
	 * @return SPPeopleTypeResolvePrincipalsResponse
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