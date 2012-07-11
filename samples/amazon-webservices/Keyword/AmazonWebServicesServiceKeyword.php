<?php
/**
 * Class file for AmazonWebServicesServiceKeyword
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceKeyword
 * @date 10/07/2012
 */
class AmazonWebServicesServiceKeyword extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call KeywordSearchRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeKeywordRequest::getKeyword()
	 * @uses AmazonWebServicesTypeKeywordRequest::getPage()
	 * @uses AmazonWebServicesTypeKeywordRequest::getMode()
	 * @uses AmazonWebServicesTypeKeywordRequest::getTag()
	 * @uses AmazonWebServicesTypeKeywordRequest::getType()
	 * @uses AmazonWebServicesTypeKeywordRequest::getDevtag()
	 * @uses AmazonWebServicesTypeKeywordRequest::getSort()
	 * @uses AmazonWebServicesTypeKeywordRequest::getVariations()
	 * @uses AmazonWebServicesTypeKeywordRequest::getLocale()
	 * @param AmazonWebServicesTypeKeywordRequest KeywordRequest
	 * @return AmazonWebServicesTypeProductInfo
	 */
	public function KeywordSearchRequest(AmazonWebServicesTypeKeywordRequest $_AmazonWebServicesTypeKeywordRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->KeywordSearchRequest(array('keyword'=>$_AmazonWebServicesTypeKeywordRequest->getKeyword(),'page'=>$_AmazonWebServicesTypeKeywordRequest->getPage(),'mode'=>$_AmazonWebServicesTypeKeywordRequest->getMode(),'tag'=>$_AmazonWebServicesTypeKeywordRequest->getTag(),'type'=>$_AmazonWebServicesTypeKeywordRequest->getType(),'devtag'=>$_AmazonWebServicesTypeKeywordRequest->getDevtag(),'sort'=>$_AmazonWebServicesTypeKeywordRequest->getSort(),'variations'=>$_AmazonWebServicesTypeKeywordRequest->getVariations(),'locale'=>$_AmazonWebServicesTypeKeywordRequest->getLocale())));
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