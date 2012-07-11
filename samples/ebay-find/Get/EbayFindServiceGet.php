<?php
/**
 * Class file for EbayFindServiceGet
 * @date 04/07/2012
 */
/**
 * Class EbayFindServiceGet
 * @date 04/07/2012
 */
class EbayFindServiceGet extends EbayFindWsdlClass
{
	/**
	 * Method to call getSearchKeywordsRecommendation
	 * @uses EbayFindWsdlClass::getSoapClient()
	 * @uses EbayFindWsdlClass::setResult()
	 * @uses EbayFindWsdlClass::getResult()
	 * @uses EbayFindWsdlClass::saveLastError()
	 * @uses EbayFindTypeGetSearchKeywordsRecommendationRequest::getKeywords()
	 * @param EbayFindTypeGetSearchKeywordsRecommendationRequest GetSearchKeywordsRecommendationRequest
	 * @return EbayFindTypeGetSearchKeywordsRecommendationResponse
	 */
	public function getSearchKeywordsRecommendation(EbayFindTypeGetSearchKeywordsRecommendationRequest $_EbayFindTypeGetSearchKeywordsRecommendationRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getSearchKeywordsRecommendation(array('keywords'=>$_EbayFindTypeGetSearchKeywordsRecommendationRequest->getKeywords())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call getHistograms
	 * @uses EbayFindWsdlClass::getSoapClient()
	 * @uses EbayFindWsdlClass::setResult()
	 * @uses EbayFindWsdlClass::getResult()
	 * @uses EbayFindWsdlClass::saveLastError()
	 * @uses EbayFindTypeGetHistogramsRequest::getCategoryId()
	 * @param EbayFindTypeGetHistogramsRequest GetHistogramsRequest
	 * @return EbayFindTypeGetHistogramsResponse
	 */
	public function getHistograms(EbayFindTypeGetHistogramsRequest $_EbayFindTypeGetHistogramsRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getHistograms(array('categoryId'=>$_EbayFindTypeGetHistogramsRequest->getCategoryId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call getVersion
	 * @uses EbayFindWsdlClass::getSoapClient()
	 * @uses EbayFindWsdlClass::setResult()
	 * @uses EbayFindWsdlClass::getResult()
	 * @uses EbayFindWsdlClass::saveLastError()
	 * @param EbayFindTypeGetVersionRequest GetVersionRequest
	 * @return EbayFindTypeGetVersionResponse
	 */
	public function getVersion(EbayFindTypeGetVersionRequest $_EbayFindTypeGetVersionRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getVersion(array()));
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
	 * @return EbayFindTypeGetVersionResponse
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