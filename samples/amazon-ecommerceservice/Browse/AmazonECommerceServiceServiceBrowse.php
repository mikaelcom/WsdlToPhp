<?php
/**
 * Class file for AmazonECommerceServiceServiceBrowse
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceServiceBrowse
 * @date 10/07/2012
 */
class AmazonECommerceServiceServiceBrowse extends AmazonECommerceServiceWsdlClass
{
	/**
	 * Method to call BrowseNodeLookup
	 * @uses AmazonECommerceServiceWsdlClass::getSoapClient()
	 * @uses AmazonECommerceServiceWsdlClass::setResult()
	 * @uses AmazonECommerceServiceWsdlClass::getResult()
	 * @uses AmazonECommerceServiceWsdlClass::saveLastError()
	 * @uses AmazonECommerceServiceTypeBrowseNodeLookup::getMarketplaceDomain()
	 * @uses AmazonECommerceServiceTypeBrowseNodeLookup::getAWSAccessKeyId()
	 * @uses AmazonECommerceServiceTypeBrowseNodeLookup::getAssociateTag()
	 * @uses AmazonECommerceServiceTypeBrowseNodeLookup::getValidate()
	 * @uses AmazonECommerceServiceTypeBrowseNodeLookup::getXMLEscaping()
	 * @uses AmazonECommerceServiceTypeBrowseNodeLookup::getShared()
	 * @uses AmazonECommerceServiceTypeBrowseNodeLookup::getRequest()
	 * @param AmazonECommerceServiceTypeBrowseNodeLookup BrowseNodeLookup
	 * @return AmazonECommerceServiceTypeBrowseNodeLookupResponse
	 */
	public function BrowseNodeLookup(AmazonECommerceServiceTypeBrowseNodeLookup $_AmazonECommerceServiceTypeBrowseNodeLookup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BrowseNodeLookup(array('MarketplaceDomain'=>$_AmazonECommerceServiceTypeBrowseNodeLookup->getMarketplaceDomain(),'AWSAccessKeyId'=>$_AmazonECommerceServiceTypeBrowseNodeLookup->getAWSAccessKeyId(),'AssociateTag'=>$_AmazonECommerceServiceTypeBrowseNodeLookup->getAssociateTag(),'Validate'=>$_AmazonECommerceServiceTypeBrowseNodeLookup->getValidate(),'XMLEscaping'=>$_AmazonECommerceServiceTypeBrowseNodeLookup->getXMLEscaping(),'Shared'=>$_AmazonECommerceServiceTypeBrowseNodeLookup->getShared(),'Request'=>$_AmazonECommerceServiceTypeBrowseNodeLookup->getRequest())));
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
	 * @return AmazonECommerceServiceTypeBrowseNodeLookupResponse
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