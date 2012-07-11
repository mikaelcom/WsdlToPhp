<?php
/**
 * Class file for AmazonECommerceServiceServiceItem
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceServiceItem
 * @date 10/07/2012
 */
class AmazonECommerceServiceServiceItem extends AmazonECommerceServiceWsdlClass
{
	/**
	 * Method to call ItemSearch
	 * @uses AmazonECommerceServiceWsdlClass::getSoapClient()
	 * @uses AmazonECommerceServiceWsdlClass::setResult()
	 * @uses AmazonECommerceServiceWsdlClass::getResult()
	 * @uses AmazonECommerceServiceWsdlClass::saveLastError()
	 * @uses AmazonECommerceServiceTypeItemSearch::getMarketplaceDomain()
	 * @uses AmazonECommerceServiceTypeItemSearch::getAWSAccessKeyId()
	 * @uses AmazonECommerceServiceTypeItemSearch::getAssociateTag()
	 * @uses AmazonECommerceServiceTypeItemSearch::getXMLEscaping()
	 * @uses AmazonECommerceServiceTypeItemSearch::getValidate()
	 * @uses AmazonECommerceServiceTypeItemSearch::getShared()
	 * @uses AmazonECommerceServiceTypeItemSearch::getRequest()
	 * @param AmazonECommerceServiceTypeItemSearch ItemSearch
	 * @return AmazonECommerceServiceTypeItemSearchResponse
	 */
	public function ItemSearch(AmazonECommerceServiceTypeItemSearch $_AmazonECommerceServiceTypeItemSearch)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ItemSearch(array('MarketplaceDomain'=>$_AmazonECommerceServiceTypeItemSearch->getMarketplaceDomain(),'AWSAccessKeyId'=>$_AmazonECommerceServiceTypeItemSearch->getAWSAccessKeyId(),'AssociateTag'=>$_AmazonECommerceServiceTypeItemSearch->getAssociateTag(),'XMLEscaping'=>$_AmazonECommerceServiceTypeItemSearch->getXMLEscaping(),'Validate'=>$_AmazonECommerceServiceTypeItemSearch->getValidate(),'Shared'=>$_AmazonECommerceServiceTypeItemSearch->getShared(),'Request'=>$_AmazonECommerceServiceTypeItemSearch->getRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ItemLookup
	 * @uses AmazonECommerceServiceWsdlClass::getSoapClient()
	 * @uses AmazonECommerceServiceWsdlClass::setResult()
	 * @uses AmazonECommerceServiceWsdlClass::getResult()
	 * @uses AmazonECommerceServiceWsdlClass::saveLastError()
	 * @uses AmazonECommerceServiceTypeItemLookup::getMarketplaceDomain()
	 * @uses AmazonECommerceServiceTypeItemLookup::getAWSAccessKeyId()
	 * @uses AmazonECommerceServiceTypeItemLookup::getAssociateTag()
	 * @uses AmazonECommerceServiceTypeItemLookup::getValidate()
	 * @uses AmazonECommerceServiceTypeItemLookup::getXMLEscaping()
	 * @uses AmazonECommerceServiceTypeItemLookup::getShared()
	 * @uses AmazonECommerceServiceTypeItemLookup::getRequest()
	 * @param AmazonECommerceServiceTypeItemLookup ItemLookup
	 * @return AmazonECommerceServiceTypeItemLookupResponse
	 */
	public function ItemLookup(AmazonECommerceServiceTypeItemLookup $_AmazonECommerceServiceTypeItemLookup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ItemLookup(array('MarketplaceDomain'=>$_AmazonECommerceServiceTypeItemLookup->getMarketplaceDomain(),'AWSAccessKeyId'=>$_AmazonECommerceServiceTypeItemLookup->getAWSAccessKeyId(),'AssociateTag'=>$_AmazonECommerceServiceTypeItemLookup->getAssociateTag(),'Validate'=>$_AmazonECommerceServiceTypeItemLookup->getValidate(),'XMLEscaping'=>$_AmazonECommerceServiceTypeItemLookup->getXMLEscaping(),'Shared'=>$_AmazonECommerceServiceTypeItemLookup->getShared(),'Request'=>$_AmazonECommerceServiceTypeItemLookup->getRequest())));
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
	 * @return AmazonECommerceServiceTypeItemLookupResponse
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