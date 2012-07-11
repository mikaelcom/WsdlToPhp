<?php
/**
 * Class file for AmazonWebServicesServiceGet
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceGet
 * @date 10/07/2012
 */
class AmazonWebServicesServiceGet extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call GetShoppingCartRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeGetShoppingCartRequest::getTag()
	 * @uses AmazonWebServicesTypeGetShoppingCartRequest::getDevtag()
	 * @uses AmazonWebServicesTypeGetShoppingCartRequest::getCartId()
	 * @uses AmazonWebServicesTypeGetShoppingCartRequest::getHMAC()
	 * @uses AmazonWebServicesTypeGetShoppingCartRequest::getLocale()
	 * @param AmazonWebServicesTypeGetShoppingCartRequest GetShoppingCartRequest
	 * @return AmazonWebServicesTypeShoppingCart
	 */
	public function GetShoppingCartRequest(AmazonWebServicesTypeGetShoppingCartRequest $_AmazonWebServicesTypeGetShoppingCartRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetShoppingCartRequest(array('tag'=>$_AmazonWebServicesTypeGetShoppingCartRequest->getTag(),'devtag'=>$_AmazonWebServicesTypeGetShoppingCartRequest->getDevtag(),'CartId'=>$_AmazonWebServicesTypeGetShoppingCartRequest->getCartId(),'HMAC'=>$_AmazonWebServicesTypeGetShoppingCartRequest->getHMAC(),'locale'=>$_AmazonWebServicesTypeGetShoppingCartRequest->getLocale())));
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