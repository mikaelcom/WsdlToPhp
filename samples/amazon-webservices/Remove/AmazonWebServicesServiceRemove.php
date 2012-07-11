<?php
/**
 * Class file for AmazonWebServicesServiceRemove
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceRemove
 * @date 10/07/2012
 */
class AmazonWebServicesServiceRemove extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call RemoveShoppingCartItemsRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeRemoveShoppingCartItemsRequest::getTag()
	 * @uses AmazonWebServicesTypeRemoveShoppingCartItemsRequest::getDevtag()
	 * @uses AmazonWebServicesTypeRemoveShoppingCartItemsRequest::getCartId()
	 * @uses AmazonWebServicesTypeRemoveShoppingCartItemsRequest::getHMAC()
	 * @uses AmazonWebServicesTypeRemoveShoppingCartItemsRequest::getItems()
	 * @uses AmazonWebServicesTypeRemoveShoppingCartItemsRequest::getLocale()
	 * @param AmazonWebServicesTypeRemoveShoppingCartItemsRequest RemoveShoppingCartItemsRequest
	 * @return AmazonWebServicesTypeShoppingCart
	 */
	public function RemoveShoppingCartItemsRequest(AmazonWebServicesTypeRemoveShoppingCartItemsRequest $_AmazonWebServicesTypeRemoveShoppingCartItemsRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveShoppingCartItemsRequest(array('tag'=>$_AmazonWebServicesTypeRemoveShoppingCartItemsRequest->getTag(),'devtag'=>$_AmazonWebServicesTypeRemoveShoppingCartItemsRequest->getDevtag(),'CartId'=>$_AmazonWebServicesTypeRemoveShoppingCartItemsRequest->getCartId(),'HMAC'=>$_AmazonWebServicesTypeRemoveShoppingCartItemsRequest->getHMAC(),'Items'=>$_AmazonWebServicesTypeRemoveShoppingCartItemsRequest->getItems(),'locale'=>$_AmazonWebServicesTypeRemoveShoppingCartItemsRequest->getLocale())));
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