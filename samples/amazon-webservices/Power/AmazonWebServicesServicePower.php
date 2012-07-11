<?php
/**
 * Class file for AmazonWebServicesServicePower
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServicePower
 * @date 10/07/2012
 */
class AmazonWebServicesServicePower extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call PowerSearchRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypePowerRequest::getPower()
	 * @uses AmazonWebServicesTypePowerRequest::getPage()
	 * @uses AmazonWebServicesTypePowerRequest::getMode()
	 * @uses AmazonWebServicesTypePowerRequest::getTag()
	 * @uses AmazonWebServicesTypePowerRequest::getType()
	 * @uses AmazonWebServicesTypePowerRequest::getDevtag()
	 * @uses AmazonWebServicesTypePowerRequest::getSort()
	 * @uses AmazonWebServicesTypePowerRequest::getVariations()
	 * @uses AmazonWebServicesTypePowerRequest::getLocale()
	 * @param AmazonWebServicesTypePowerRequest PowerRequest
	 * @return AmazonWebServicesTypeProductInfo
	 */
	public function PowerSearchRequest(AmazonWebServicesTypePowerRequest $_AmazonWebServicesTypePowerRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->PowerSearchRequest(array('power'=>$_AmazonWebServicesTypePowerRequest->getPower(),'page'=>$_AmazonWebServicesTypePowerRequest->getPage(),'mode'=>$_AmazonWebServicesTypePowerRequest->getMode(),'tag'=>$_AmazonWebServicesTypePowerRequest->getTag(),'type'=>$_AmazonWebServicesTypePowerRequest->getType(),'devtag'=>$_AmazonWebServicesTypePowerRequest->getDevtag(),'sort'=>$_AmazonWebServicesTypePowerRequest->getSort(),'variations'=>$_AmazonWebServicesTypePowerRequest->getVariations(),'locale'=>$_AmazonWebServicesTypePowerRequest->getLocale())));
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