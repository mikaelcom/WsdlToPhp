<?php
/**
 * Class file for AmazonSimpleDBServiceCreate
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBServiceCreate
 * @date 10/07/2012
 */
class AmazonSimpleDBServiceCreate extends AmazonSimpleDBWsdlClass
{
	/**
	 * Method to call CreateDomain
	 * Meta informations :
	 * 	- documentation : The CreateDomain operation creates a new domain. The domain name must be unique among the domains associated with the Access Key ID provided in the request. The CreateDomain operation may take 10 or more seconds to complete.
	 * @uses AmazonSimpleDBWsdlClass::getSoapClient()
	 * @uses AmazonSimpleDBWsdlClass::setResult()
	 * @uses AmazonSimpleDBWsdlClass::getResult()
	 * @uses AmazonSimpleDBWsdlClass::saveLastError()
	 * @uses AmazonSimpleDBTypeCreateDomain::getDomainName()
	 * @param AmazonSimpleDBTypeCreateDomain CreateDomain
	 * @return AmazonSimpleDBTypeCreateDomainResponse
	 */
	public function CreateDomain(AmazonSimpleDBTypeCreateDomain $_AmazonSimpleDBTypeCreateDomain)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateDomain(array('DomainName'=>$_AmazonSimpleDBTypeCreateDomain->getDomainName())));
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
	 * @return AmazonSimpleDBTypeCreateDomainResponse
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