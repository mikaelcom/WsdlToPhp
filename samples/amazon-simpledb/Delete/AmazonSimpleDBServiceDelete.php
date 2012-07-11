<?php
/**
 * Class file for AmazonSimpleDBServiceDelete
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBServiceDelete
 * @date 10/07/2012
 */
class AmazonSimpleDBServiceDelete extends AmazonSimpleDBWsdlClass
{
	/**
	 * Method to call DeleteDomain
	 * Meta informations :
	 * 	- documentation : The DeleteDomain operation deletes a domain. Any items (and their attributes) in the domain are deleted as well. The DeleteDomain operation may take 10 or more seconds to complete.
	 * @uses AmazonSimpleDBWsdlClass::getSoapClient()
	 * @uses AmazonSimpleDBWsdlClass::setResult()
	 * @uses AmazonSimpleDBWsdlClass::getResult()
	 * @uses AmazonSimpleDBWsdlClass::saveLastError()
	 * @uses AmazonSimpleDBTypeDeleteDomain::getDomainName()
	 * @param AmazonSimpleDBTypeDeleteDomain DeleteDomain
	 * @return AmazonSimpleDBTypeDeleteDomainResponse
	 */
	public function DeleteDomain(AmazonSimpleDBTypeDeleteDomain $_AmazonSimpleDBTypeDeleteDomain)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteDomain(array('DomainName'=>$_AmazonSimpleDBTypeDeleteDomain->getDomainName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteAttributes
	 * Meta informations :
	 * 	- documentation : Deletes one or more attributes associated with the item. If all attributes of an item are deleted, the item is deleted.
	 * @uses AmazonSimpleDBWsdlClass::getSoapClient()
	 * @uses AmazonSimpleDBWsdlClass::setResult()
	 * @uses AmazonSimpleDBWsdlClass::getResult()
	 * @uses AmazonSimpleDBWsdlClass::saveLastError()
	 * @uses AmazonSimpleDBTypeDeleteAttributes::getDomainName()
	 * @uses AmazonSimpleDBTypeDeleteAttributes::getItemName()
	 * @uses AmazonSimpleDBTypeDeleteAttributes::getAttribute()
	 * @uses AmazonSimpleDBTypeDeleteAttributes::getExpected()
	 * @param AmazonSimpleDBTypeDeleteAttributes DeleteAttributes
	 * @return AmazonSimpleDBTypeDeleteAttributesResponse
	 */
	public function DeleteAttributes(AmazonSimpleDBTypeDeleteAttributes $_AmazonSimpleDBTypeDeleteAttributes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteAttributes(array('DomainName'=>$_AmazonSimpleDBTypeDeleteAttributes->getDomainName(),'ItemName'=>$_AmazonSimpleDBTypeDeleteAttributes->getItemName(),'Attribute'=>$_AmazonSimpleDBTypeDeleteAttributes->getAttribute(),'Expected'=>$_AmazonSimpleDBTypeDeleteAttributes->getExpected())));
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
	 * @return AmazonSimpleDBTypeDeleteAttributesResponse
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