<?php
/**
 * Class file for AmazonSimpleDBServiceList
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBServiceList
 * @date 10/07/2012
 */
class AmazonSimpleDBServiceList extends AmazonSimpleDBWsdlClass
{
	/**
	 * Method to call ListDomains
	 * Meta informations :
	 * 	- documentation : The ListDomains operation lists all domains associated with the Access Key ID. It returns domain names up to the limit set by MaxNumberOfDomains. A NextToken is returned if there are more than MaxNumberOfDomains domains. Calling ListDomains successive times with the NextToken returns up to MaxNumberOfDomains more domain names each time.
	 * @uses AmazonSimpleDBWsdlClass::getSoapClient()
	 * @uses AmazonSimpleDBWsdlClass::setResult()
	 * @uses AmazonSimpleDBWsdlClass::getResult()
	 * @uses AmazonSimpleDBWsdlClass::saveLastError()
	 * @uses AmazonSimpleDBTypeListDomains::getMaxNumberOfDomains()
	 * @uses AmazonSimpleDBTypeListDomains::getNextToken()
	 * @param AmazonSimpleDBTypeListDomains ListDomains
	 * @return AmazonSimpleDBTypeListDomainsResponse
	 */
	public function ListDomains(AmazonSimpleDBTypeListDomains $_AmazonSimpleDBTypeListDomains)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListDomains(array('MaxNumberOfDomains'=>$_AmazonSimpleDBTypeListDomains->getMaxNumberOfDomains(),'NextToken'=>$_AmazonSimpleDBTypeListDomains->getNextToken())));
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
	 * @return AmazonSimpleDBTypeListDomainsResponse
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