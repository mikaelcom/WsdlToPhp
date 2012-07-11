<?php
/**
 * Class file for AmazonSimpleDBServiceDomain
 * @date 10/07/2012
 */
/**
 * Class AmazonSimpleDBServiceDomain
 * @date 10/07/2012
 */
class AmazonSimpleDBServiceDomain extends AmazonSimpleDBWsdlClass
{
	/**
	 * Method to call DomainMetadata
	 * Meta informations :
	 * 	- documentation : The DomainMetadata operation returns some domain metadata values, such as the number of items, attribute names and attribute values along with their sizes.
	 * @uses AmazonSimpleDBWsdlClass::getSoapClient()
	 * @uses AmazonSimpleDBWsdlClass::setResult()
	 * @uses AmazonSimpleDBWsdlClass::getResult()
	 * @uses AmazonSimpleDBWsdlClass::saveLastError()
	 * @uses AmazonSimpleDBTypeDomainMetadata::getDomainName()
	 * @param AmazonSimpleDBTypeDomainMetadata DomainMetadata
	 * @return AmazonSimpleDBTypeDomainMetadataResponse
	 */
	public function DomainMetadata(AmazonSimpleDBTypeDomainMetadata $_AmazonSimpleDBTypeDomainMetadata)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DomainMetadata(array('DomainName'=>$_AmazonSimpleDBTypeDomainMetadata->getDomainName())));
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
	 * @return AmazonSimpleDBTypeDomainMetadataResponse
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