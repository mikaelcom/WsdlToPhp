<?php
/**
 * Class file for AmazonWebServicesServiceList
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceList
 * @date 10/07/2012
 */
class AmazonWebServicesServiceList extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call ListManiaSearchRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeListManiaRequest::getLm_id()
	 * @uses AmazonWebServicesTypeListManiaRequest::getPage()
	 * @uses AmazonWebServicesTypeListManiaRequest::getTag()
	 * @uses AmazonWebServicesTypeListManiaRequest::getType()
	 * @uses AmazonWebServicesTypeListManiaRequest::getDevtag()
	 * @uses AmazonWebServicesTypeListManiaRequest::getLocale()
	 * @param AmazonWebServicesTypeListManiaRequest ListManiaRequest
	 * @return AmazonWebServicesTypeProductInfo
	 */
	public function ListManiaSearchRequest(AmazonWebServicesTypeListManiaRequest $_AmazonWebServicesTypeListManiaRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListManiaSearchRequest(array('lm_id'=>$_AmazonWebServicesTypeListManiaRequest->getLm_id(),'page'=>$_AmazonWebServicesTypeListManiaRequest->getPage(),'tag'=>$_AmazonWebServicesTypeListManiaRequest->getTag(),'type'=>$_AmazonWebServicesTypeListManiaRequest->getType(),'devtag'=>$_AmazonWebServicesTypeListManiaRequest->getDevtag(),'locale'=>$_AmazonWebServicesTypeListManiaRequest->getLocale())));
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