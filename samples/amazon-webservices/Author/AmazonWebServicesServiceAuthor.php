<?php
/**
 * Class file for AmazonWebServicesServiceAuthor
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceAuthor
 * @date 10/07/2012
 */
class AmazonWebServicesServiceAuthor extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call AuthorSearchRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeAuthorRequest::getAuthor()
	 * @uses AmazonWebServicesTypeAuthorRequest::getPage()
	 * @uses AmazonWebServicesTypeAuthorRequest::getMode()
	 * @uses AmazonWebServicesTypeAuthorRequest::getTag()
	 * @uses AmazonWebServicesTypeAuthorRequest::getType()
	 * @uses AmazonWebServicesTypeAuthorRequest::getDevtag()
	 * @uses AmazonWebServicesTypeAuthorRequest::getSort()
	 * @uses AmazonWebServicesTypeAuthorRequest::getVariations()
	 * @uses AmazonWebServicesTypeAuthorRequest::getLocale()
	 * @param AmazonWebServicesTypeAuthorRequest AuthorRequest
	 * @return AmazonWebServicesTypeProductInfo
	 */
	public function AuthorSearchRequest(AmazonWebServicesTypeAuthorRequest $_AmazonWebServicesTypeAuthorRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AuthorSearchRequest(array('author'=>$_AmazonWebServicesTypeAuthorRequest->getAuthor(),'page'=>$_AmazonWebServicesTypeAuthorRequest->getPage(),'mode'=>$_AmazonWebServicesTypeAuthorRequest->getMode(),'tag'=>$_AmazonWebServicesTypeAuthorRequest->getTag(),'type'=>$_AmazonWebServicesTypeAuthorRequest->getType(),'devtag'=>$_AmazonWebServicesTypeAuthorRequest->getDevtag(),'sort'=>$_AmazonWebServicesTypeAuthorRequest->getSort(),'variations'=>$_AmazonWebServicesTypeAuthorRequest->getVariations(),'locale'=>$_AmazonWebServicesTypeAuthorRequest->getLocale())));
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