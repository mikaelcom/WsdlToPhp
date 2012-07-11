<?php
/**
 * Class file for AmazonWebServicesServiceAdd
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceAdd
 * @date 10/07/2012
 */
class AmazonWebServicesServiceAdd extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call AddShoppingCartItemsRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeAddShoppingCartItemsRequest::getTag()
	 * @uses AmazonWebServicesTypeAddShoppingCartItemsRequest::getDevtag()
	 * @uses AmazonWebServicesTypeAddShoppingCartItemsRequest::getCartId()
	 * @uses AmazonWebServicesTypeAddShoppingCartItemsRequest::getHMAC()
	 * @uses AmazonWebServicesTypeAddShoppingCartItemsRequest::getItems()
	 * @uses AmazonWebServicesTypeAddShoppingCartItemsRequest::getLocale()
	 * @param AmazonWebServicesTypeAddShoppingCartItemsRequest AddShoppingCartItemsRequest
	 * @return AmazonWebServicesTypeShoppingCart
	 */
	public function AddShoppingCartItemsRequest(AmazonWebServicesTypeAddShoppingCartItemsRequest $_AmazonWebServicesTypeAddShoppingCartItemsRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddShoppingCartItemsRequest(array('tag'=>$_AmazonWebServicesTypeAddShoppingCartItemsRequest->getTag(),'devtag'=>$_AmazonWebServicesTypeAddShoppingCartItemsRequest->getDevtag(),'CartId'=>$_AmazonWebServicesTypeAddShoppingCartItemsRequest->getCartId(),'HMAC'=>$_AmazonWebServicesTypeAddShoppingCartItemsRequest->getHMAC(),'Items'=>$_AmazonWebServicesTypeAddShoppingCartItemsRequest->getItems(),'locale'=>$_AmazonWebServicesTypeAddShoppingCartItemsRequest->getLocale())));
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