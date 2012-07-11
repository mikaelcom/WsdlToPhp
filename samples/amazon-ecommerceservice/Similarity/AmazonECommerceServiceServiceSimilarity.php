<?php
/**
 * Class file for AmazonECommerceServiceServiceSimilarity
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceServiceSimilarity
 * @date 10/07/2012
 */
class AmazonECommerceServiceServiceSimilarity extends AmazonECommerceServiceWsdlClass
{
	/**
	 * Method to call SimilarityLookup
	 * @uses AmazonECommerceServiceWsdlClass::getSoapClient()
	 * @uses AmazonECommerceServiceWsdlClass::setResult()
	 * @uses AmazonECommerceServiceWsdlClass::getResult()
	 * @uses AmazonECommerceServiceWsdlClass::saveLastError()
	 * @uses AmazonECommerceServiceTypeSimilarityLookup::getMarketplaceDomain()
	 * @uses AmazonECommerceServiceTypeSimilarityLookup::getAWSAccessKeyId()
	 * @uses AmazonECommerceServiceTypeSimilarityLookup::getAssociateTag()
	 * @uses AmazonECommerceServiceTypeSimilarityLookup::getValidate()
	 * @uses AmazonECommerceServiceTypeSimilarityLookup::getXMLEscaping()
	 * @uses AmazonECommerceServiceTypeSimilarityLookup::getShared()
	 * @uses AmazonECommerceServiceTypeSimilarityLookup::getRequest()
	 * @param AmazonECommerceServiceTypeSimilarityLookup SimilarityLookup
	 * @return AmazonECommerceServiceTypeSimilarityLookupResponse
	 */
	public function SimilarityLookup(AmazonECommerceServiceTypeSimilarityLookup $_AmazonECommerceServiceTypeSimilarityLookup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SimilarityLookup(array('MarketplaceDomain'=>$_AmazonECommerceServiceTypeSimilarityLookup->getMarketplaceDomain(),'AWSAccessKeyId'=>$_AmazonECommerceServiceTypeSimilarityLookup->getAWSAccessKeyId(),'AssociateTag'=>$_AmazonECommerceServiceTypeSimilarityLookup->getAssociateTag(),'Validate'=>$_AmazonECommerceServiceTypeSimilarityLookup->getValidate(),'XMLEscaping'=>$_AmazonECommerceServiceTypeSimilarityLookup->getXMLEscaping(),'Shared'=>$_AmazonECommerceServiceTypeSimilarityLookup->getShared(),'Request'=>$_AmazonECommerceServiceTypeSimilarityLookup->getRequest())));
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
	 * @return AmazonECommerceServiceTypeSimilarityLookupResponse
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