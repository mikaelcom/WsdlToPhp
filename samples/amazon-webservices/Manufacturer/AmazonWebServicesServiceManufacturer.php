<?php
/**
 * Class file for AmazonWebServicesServiceManufacturer
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceManufacturer
 * @date 10/07/2012
 */
class AmazonWebServicesServiceManufacturer extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call ManufacturerSearchRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeManufacturerRequest::getManufacturer()
	 * @uses AmazonWebServicesTypeManufacturerRequest::getPage()
	 * @uses AmazonWebServicesTypeManufacturerRequest::getMode()
	 * @uses AmazonWebServicesTypeManufacturerRequest::getTag()
	 * @uses AmazonWebServicesTypeManufacturerRequest::getType()
	 * @uses AmazonWebServicesTypeManufacturerRequest::getDevtag()
	 * @uses AmazonWebServicesTypeManufacturerRequest::getSort()
	 * @uses AmazonWebServicesTypeManufacturerRequest::getVariations()
	 * @uses AmazonWebServicesTypeManufacturerRequest::getLocale()
	 * @param AmazonWebServicesTypeManufacturerRequest ManufacturerRequest
	 * @return AmazonWebServicesTypeProductInfo
	 */
	public function ManufacturerSearchRequest(AmazonWebServicesTypeManufacturerRequest $_AmazonWebServicesTypeManufacturerRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ManufacturerSearchRequest(array('manufacturer'=>$_AmazonWebServicesTypeManufacturerRequest->getManufacturer(),'page'=>$_AmazonWebServicesTypeManufacturerRequest->getPage(),'mode'=>$_AmazonWebServicesTypeManufacturerRequest->getMode(),'tag'=>$_AmazonWebServicesTypeManufacturerRequest->getTag(),'type'=>$_AmazonWebServicesTypeManufacturerRequest->getType(),'devtag'=>$_AmazonWebServicesTypeManufacturerRequest->getDevtag(),'sort'=>$_AmazonWebServicesTypeManufacturerRequest->getSort(),'variations'=>$_AmazonWebServicesTypeManufacturerRequest->getVariations(),'locale'=>$_AmazonWebServicesTypeManufacturerRequest->getLocale())));
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