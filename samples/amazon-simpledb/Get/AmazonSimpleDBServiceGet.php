<?php
/**
 * Class file for AmazonSimpleDBServiceGet
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBServiceGet
 * @date 10/07/2012
 */
class AmazonSimpleDBServiceGet extends AmazonSimpleDBWsdlClass
{
	/**
	 * Method to call GetAttributes
	 * Meta informations :
	 * 	- documentation : Returns all of the attributes associated with the item. Optionally, the attributes returned can be limited to the specified AttributeName parameter. If the item does not exist on the replica that was accessed for this operation, an empty attribute is returned. The system does not return an error as it cannot guarantee the item does not exist on other replicas.
	 * @uses AmazonSimpleDBWsdlClass::getSoapClient()
	 * @uses AmazonSimpleDBWsdlClass::setResult()
	 * @uses AmazonSimpleDBWsdlClass::getResult()
	 * @uses AmazonSimpleDBWsdlClass::saveLastError()
	 * @uses AmazonSimpleDBTypeGetAttributes::getDomainName()
	 * @uses AmazonSimpleDBTypeGetAttributes::getItemName()
	 * @uses AmazonSimpleDBTypeGetAttributes::getAttributeName()
	 * @uses AmazonSimpleDBTypeGetAttributes::getConsistentRead()
	 * @param AmazonSimpleDBTypeGetAttributes GetAttributes
	 * @return AmazonSimpleDBTypeGetAttributesResponse
	 */
	public function GetAttributes(AmazonSimpleDBTypeGetAttributes $_AmazonSimpleDBTypeGetAttributes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAttributes(array('DomainName'=>$_AmazonSimpleDBTypeGetAttributes->getDomainName(),'ItemName'=>$_AmazonSimpleDBTypeGetAttributes->getItemName(),'AttributeName'=>$_AmazonSimpleDBTypeGetAttributes->getAttributeName(),'ConsistentRead'=>$_AmazonSimpleDBTypeGetAttributes->getConsistentRead())));
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
	 * @return AmazonSimpleDBTypeGetAttributesResponse
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