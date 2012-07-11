<?php
/**
 * Class file for AmazonWebServicesServiceWishlist
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceWishlist
 * @date 10/07/2012
 */
class AmazonWebServicesServiceWishlist extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call WishlistSearchRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeWishlistRequest::getWishlist_id()
	 * @uses AmazonWebServicesTypeWishlistRequest::getPage()
	 * @uses AmazonWebServicesTypeWishlistRequest::getTag()
	 * @uses AmazonWebServicesTypeWishlistRequest::getType()
	 * @uses AmazonWebServicesTypeWishlistRequest::getDevtag()
	 * @uses AmazonWebServicesTypeWishlistRequest::getLocale()
	 * @param AmazonWebServicesTypeWishlistRequest WishlistRequest
	 * @return AmazonWebServicesTypeProductInfo
	 */
	public function WishlistSearchRequest(AmazonWebServicesTypeWishlistRequest $_AmazonWebServicesTypeWishlistRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->WishlistSearchRequest(array('wishlist_id'=>$_AmazonWebServicesTypeWishlistRequest->getWishlist_id(),'page'=>$_AmazonWebServicesTypeWishlistRequest->getPage(),'tag'=>$_AmazonWebServicesTypeWishlistRequest->getTag(),'type'=>$_AmazonWebServicesTypeWishlistRequest->getType(),'devtag'=>$_AmazonWebServicesTypeWishlistRequest->getDevtag(),'locale'=>$_AmazonWebServicesTypeWishlistRequest->getLocale())));
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