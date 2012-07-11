<?php
/**
 * Class file for AmazonWebServicesServiceUpc
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceUpc
 * @date 10/07/2012
 */
class AmazonWebServicesServiceUpc extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call UpcSearchRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeUpcRequest::getUpc()
	 * @uses AmazonWebServicesTypeUpcRequest::getMode()
	 * @uses AmazonWebServicesTypeUpcRequest::getTag()
	 * @uses AmazonWebServicesTypeUpcRequest::getType()
	 * @uses AmazonWebServicesTypeUpcRequest::getDevtag()
	 * @uses AmazonWebServicesTypeUpcRequest::getSort()
	 * @uses AmazonWebServicesTypeUpcRequest::getVariations()
	 * @uses AmazonWebServicesTypeUpcRequest::getLocale()
	 * @param AmazonWebServicesTypeUpcRequest UpcRequest
	 * @return AmazonWebServicesTypeProductInfo
	 */
	public function UpcSearchRequest(AmazonWebServicesTypeUpcRequest $_AmazonWebServicesTypeUpcRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpcSearchRequest(array('upc'=>$_AmazonWebServicesTypeUpcRequest->getUpc(),'mode'=>$_AmazonWebServicesTypeUpcRequest->getMode(),'tag'=>$_AmazonWebServicesTypeUpcRequest->getTag(),'type'=>$_AmazonWebServicesTypeUpcRequest->getType(),'devtag'=>$_AmazonWebServicesTypeUpcRequest->getDevtag(),'sort'=>$_AmazonWebServicesTypeUpcRequest->getSort(),'variations'=>$_AmazonWebServicesTypeUpcRequest->getVariations(),'locale'=>$_AmazonWebServicesTypeUpcRequest->getLocale())));
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