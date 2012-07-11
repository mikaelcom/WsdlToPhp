<?php
/**
 * Class file for AmazonWebServicesServiceSimilarity
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceSimilarity
 * @date 10/07/2012
 */
class AmazonWebServicesServiceSimilarity extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call SimilaritySearchRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeSimilarityRequest::getAsin()
	 * @uses AmazonWebServicesTypeSimilarityRequest::getTag()
	 * @uses AmazonWebServicesTypeSimilarityRequest::getType()
	 * @uses AmazonWebServicesTypeSimilarityRequest::getDevtag()
	 * @uses AmazonWebServicesTypeSimilarityRequest::getLocale()
	 * @param AmazonWebServicesTypeSimilarityRequest SimilarityRequest
	 * @return AmazonWebServicesTypeProductInfo
	 */
	public function SimilaritySearchRequest(AmazonWebServicesTypeSimilarityRequest $_AmazonWebServicesTypeSimilarityRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SimilaritySearchRequest(array('asin'=>$_AmazonWebServicesTypeSimilarityRequest->getAsin(),'tag'=>$_AmazonWebServicesTypeSimilarityRequest->getTag(),'type'=>$_AmazonWebServicesTypeSimilarityRequest->getType(),'devtag'=>$_AmazonWebServicesTypeSimilarityRequest->getDevtag(),'locale'=>$_AmazonWebServicesTypeSimilarityRequest->getLocale())));
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
	 * @return AmazonWebServicesTypeProductInfo
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