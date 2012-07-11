<?php
/**
 * Class file for AmazonWebServicesServiceModify
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceModify
 * @date 10/07/2012
 */
class AmazonWebServicesServiceModify extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call ModifyShoppingCartItemsRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeModifyShoppingCartItemsRequest::getTag()
	 * @uses AmazonWebServicesTypeModifyShoppingCartItemsRequest::getDevtag()
	 * @uses AmazonWebServicesTypeModifyShoppingCartItemsRequest::getCartId()
	 * @uses AmazonWebServicesTypeModifyShoppingCartItemsRequest::getHMAC()
	 * @uses AmazonWebServicesTypeModifyShoppingCartItemsRequest::getItems()
	 * @uses AmazonWebServicesTypeModifyShoppingCartItemsRequest::getLocale()
	 * @param AmazonWebServicesTypeModifyShoppingCartItemsRequest ModifyShoppingCartItemsRequest
	 * @return AmazonWebServicesTypeShoppingCart
	 */
	public function ModifyShoppingCartItemsRequest(AmazonWebServicesTypeModifyShoppingCartItemsRequest $_AmazonWebServicesTypeModifyShoppingCartItemsRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ModifyShoppingCartItemsRequest(array('tag'=>$_AmazonWebServicesTypeModifyShoppingCartItemsRequest->getTag(),'devtag'=>$_AmazonWebServicesTypeModifyShoppingCartItemsRequest->getDevtag(),'CartId'=>$_AmazonWebServicesTypeModifyShoppingCartItemsRequest->getCartId(),'HMAC'=>$_AmazonWebServicesTypeModifyShoppingCartItemsRequest->getHMAC(),'Items'=>$_AmazonWebServicesTypeModifyShoppingCartItemsRequest->getItems(),'locale'=>$_AmazonWebServicesTypeModifyShoppingCartItemsRequest->getLocale())));
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