<?php
/**
 * Class file for AmazonWebServicesServiceDirector
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceDirector
 * @date 10/07/2012
 */
class AmazonWebServicesServiceDirector extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call DirectorSearchRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeDirectorRequest::getDirector()
	 * @uses AmazonWebServicesTypeDirectorRequest::getPage()
	 * @uses AmazonWebServicesTypeDirectorRequest::getMode()
	 * @uses AmazonWebServicesTypeDirectorRequest::getTag()
	 * @uses AmazonWebServicesTypeDirectorRequest::getType()
	 * @uses AmazonWebServicesTypeDirectorRequest::getDevtag()
	 * @uses AmazonWebServicesTypeDirectorRequest::getSort()
	 * @uses AmazonWebServicesTypeDirectorRequest::getVariations()
	 * @uses AmazonWebServicesTypeDirectorRequest::getLocale()
	 * @param AmazonWebServicesTypeDirectorRequest DirectorRequest
	 * @return AmazonWebServicesTypeProductInfo
	 */
	public function DirectorSearchRequest(AmazonWebServicesTypeDirectorRequest $_AmazonWebServicesTypeDirectorRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DirectorSearchRequest(array('director'=>$_AmazonWebServicesTypeDirectorRequest->getDirector(),'page'=>$_AmazonWebServicesTypeDirectorRequest->getPage(),'mode'=>$_AmazonWebServicesTypeDirectorRequest->getMode(),'tag'=>$_AmazonWebServicesTypeDirectorRequest->getTag(),'type'=>$_AmazonWebServicesTypeDirectorRequest->getType(),'devtag'=>$_AmazonWebServicesTypeDirectorRequest->getDevtag(),'sort'=>$_AmazonWebServicesTypeDirectorRequest->getSort(),'variations'=>$_AmazonWebServicesTypeDirectorRequest->getVariations(),'locale'=>$_AmazonWebServicesTypeDirectorRequest->getLocale())));
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