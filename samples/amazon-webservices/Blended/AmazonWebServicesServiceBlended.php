<?php
/**
 * Class file for AmazonWebServicesServiceBlended
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceBlended
 * @date 10/07/2012
 */
class AmazonWebServicesServiceBlended extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call BlendedSearchRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeBlendedRequest::getBlended()
	 * @uses AmazonWebServicesTypeBlendedRequest::getTag()
	 * @uses AmazonWebServicesTypeBlendedRequest::getType()
	 * @uses AmazonWebServicesTypeBlendedRequest::getDevtag()
	 * @uses AmazonWebServicesTypeBlendedRequest::getLocale()
	 * @param AmazonWebServicesTypeBlendedRequest BlendedRequest
	 * @return AmazonWebServicesTypeProductLineArray
	 */
	public function BlendedSearchRequest(AmazonWebServicesTypeBlendedRequest $_AmazonWebServicesTypeBlendedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BlendedSearchRequest(array('blended'=>$_AmazonWebServicesTypeBlendedRequest->getBlended(),'tag'=>$_AmazonWebServicesTypeBlendedRequest->getTag(),'type'=>$_AmazonWebServicesTypeBlendedRequest->getType(),'devtag'=>$_AmazonWebServicesTypeBlendedRequest->getDevtag(),'locale'=>$_AmazonWebServicesTypeBlendedRequest->getLocale())));
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
	 * @return AmazonWebServicesTypeProductLineArray
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