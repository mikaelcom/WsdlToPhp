<?php
/**
 * Class file for AmazonWebServicesServiceClear
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceClear
 * @date 10/07/2012
 */
class AmazonWebServicesServiceClear extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call ClearShoppingCartRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeClearShoppingCartRequest::getTag()
	 * @uses AmazonWebServicesTypeClearShoppingCartRequest::getDevtag()
	 * @uses AmazonWebServicesTypeClearShoppingCartRequest::getCartId()
	 * @uses AmazonWebServicesTypeClearShoppingCartRequest::getHMAC()
	 * @uses AmazonWebServicesTypeClearShoppingCartRequest::getLocale()
	 * @param AmazonWebServicesTypeClearShoppingCartRequest ClearShoppingCartRequest
	 * @return AmazonWebServicesTypeShoppingCart
	 */
	public function ClearShoppingCartRequest(AmazonWebServicesTypeClearShoppingCartRequest $_AmazonWebServicesTypeClearShoppingCartRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ClearShoppingCartRequest(array('tag'=>$_AmazonWebServicesTypeClearShoppingCartRequest->getTag(),'devtag'=>$_AmazonWebServicesTypeClearShoppingCartRequest->getDevtag(),'CartId'=>$_AmazonWebServicesTypeClearShoppingCartRequest->getCartId(),'HMAC'=>$_AmazonWebServicesTypeClearShoppingCartRequest->getHMAC(),'locale'=>$_AmazonWebServicesTypeClearShoppingCartRequest->getLocale())));
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
	 * @return AmazonWebServicesTypeShoppingCart
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