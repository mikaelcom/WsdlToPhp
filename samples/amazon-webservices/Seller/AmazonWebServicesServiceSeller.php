<?php
/**
 * Class file for AmazonWebServicesServiceSeller
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceSeller
 * @date 10/07/2012
 */
class AmazonWebServicesServiceSeller extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call SellerProfileSearchRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeSellerProfileRequest::getSeller_id()
	 * @uses AmazonWebServicesTypeSellerProfileRequest::getTag()
	 * @uses AmazonWebServicesTypeSellerProfileRequest::getType()
	 * @uses AmazonWebServicesTypeSellerProfileRequest::getDevtag()
	 * @uses AmazonWebServicesTypeSellerProfileRequest::getPage()
	 * @uses AmazonWebServicesTypeSellerProfileRequest::getLocale()
	 * @param AmazonWebServicesTypeSellerProfileRequest SellerProfileRequest
	 * @return AmazonWebServicesTypeSellerProfile
	 */
	public function SellerProfileSearchRequest(AmazonWebServicesTypeSellerProfileRequest $_AmazonWebServicesTypeSellerProfileRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SellerProfileSearchRequest(array('seller_id'=>$_AmazonWebServicesTypeSellerProfileRequest->getSeller_id(),'tag'=>$_AmazonWebServicesTypeSellerProfileRequest->getTag(),'type'=>$_AmazonWebServicesTypeSellerProfileRequest->getType(),'devtag'=>$_AmazonWebServicesTypeSellerProfileRequest->getDevtag(),'page'=>$_AmazonWebServicesTypeSellerProfileRequest->getPage(),'locale'=>$_AmazonWebServicesTypeSellerProfileRequest->getLocale())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SellerSearchRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeSellerRequest::getSeller_id()
	 * @uses AmazonWebServicesTypeSellerRequest::getTag()
	 * @uses AmazonWebServicesTypeSellerRequest::getType()
	 * @uses AmazonWebServicesTypeSellerRequest::getDevtag()
	 * @uses AmazonWebServicesTypeSellerRequest::getOfferstatus()
	 * @uses AmazonWebServicesTypeSellerRequest::getPage()
	 * @uses AmazonWebServicesTypeSellerRequest::getSeller_browse_id()
	 * @uses AmazonWebServicesTypeSellerRequest::getKeyword()
	 * @uses AmazonWebServicesTypeSellerRequest::getLocale()
	 * @uses AmazonWebServicesTypeSellerRequest::getIndex()
	 * @param AmazonWebServicesTypeSellerRequest SellerRequest
	 * @return AmazonWebServicesTypeSellerSearch
	 */
	public function SellerSearchRequest(AmazonWebServicesTypeSellerRequest $_AmazonWebServicesTypeSellerRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SellerSearchRequest(array('seller_id'=>$_AmazonWebServicesTypeSellerRequest->getSeller_id(),'tag'=>$_AmazonWebServicesTypeSellerRequest->getTag(),'type'=>$_AmazonWebServicesTypeSellerRequest->getType(),'devtag'=>$_AmazonWebServicesTypeSellerRequest->getDevtag(),'offerstatus'=>$_AmazonWebServicesTypeSellerRequest->getOfferstatus(),'page'=>$_AmazonWebServicesTypeSellerRequest->getPage(),'seller_browse_id'=>$_AmazonWebServicesTypeSellerRequest->getSeller_browse_id(),'keyword'=>$_AmazonWebServicesTypeSellerRequest->getKeyword(),'locale'=>$_AmazonWebServicesTypeSellerRequest->getLocale(),'index'=>$_AmazonWebServicesTypeSellerRequest->getIndex())));
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
	 * @return AmazonWebServicesTypeSellerSearch
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