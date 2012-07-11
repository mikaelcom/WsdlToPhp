<?php
/**
 * Class file for AmazonWebServicesServiceMarketplace
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceMarketplace
 * @date 10/07/2012
 */
class AmazonWebServicesServiceMarketplace extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call MarketplaceSearchRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeMarketplaceRequest::getMarketplace_search()
	 * @uses AmazonWebServicesTypeMarketplaceRequest::getTag()
	 * @uses AmazonWebServicesTypeMarketplaceRequest::getType()
	 * @uses AmazonWebServicesTypeMarketplaceRequest::getDevtag()
	 * @uses AmazonWebServicesTypeMarketplaceRequest::getPage()
	 * @uses AmazonWebServicesTypeMarketplaceRequest::getKeyword()
	 * @uses AmazonWebServicesTypeMarketplaceRequest::getKeyword_search()
	 * @uses AmazonWebServicesTypeMarketplaceRequest::getBrowse_id()
	 * @uses AmazonWebServicesTypeMarketplaceRequest::getZipcode()
	 * @uses AmazonWebServicesTypeMarketplaceRequest::getArea_id()
	 * @uses AmazonWebServicesTypeMarketplaceRequest::getGeo()
	 * @uses AmazonWebServicesTypeMarketplaceRequest::getSort()
	 * @uses AmazonWebServicesTypeMarketplaceRequest::getListing_id()
	 * @uses AmazonWebServicesTypeMarketplaceRequest::getLocale()
	 * @uses AmazonWebServicesTypeMarketplaceRequest::getIndex()
	 * @param AmazonWebServicesTypeMarketplaceRequest MarketplaceRequest
	 * @return AmazonWebServicesTypeMarketplaceSearch
	 */
	public function MarketplaceSearchRequest(AmazonWebServicesTypeMarketplaceRequest $_AmazonWebServicesTypeMarketplaceRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->MarketplaceSearchRequest(array('marketplace_search'=>$_AmazonWebServicesTypeMarketplaceRequest->getMarketplace_search(),'tag'=>$_AmazonWebServicesTypeMarketplaceRequest->getTag(),'type'=>$_AmazonWebServicesTypeMarketplaceRequest->getType(),'devtag'=>$_AmazonWebServicesTypeMarketplaceRequest->getDevtag(),'page'=>$_AmazonWebServicesTypeMarketplaceRequest->getPage(),'keyword'=>$_AmazonWebServicesTypeMarketplaceRequest->getKeyword(),'keyword_search'=>$_AmazonWebServicesTypeMarketplaceRequest->getKeyword_search(),'browse_id'=>$_AmazonWebServicesTypeMarketplaceRequest->getBrowse_id(),'zipcode'=>$_AmazonWebServicesTypeMarketplaceRequest->getZipcode(),'area_id'=>$_AmazonWebServicesTypeMarketplaceRequest->getArea_id(),'geo'=>$_AmazonWebServicesTypeMarketplaceRequest->getGeo(),'sort'=>$_AmazonWebServicesTypeMarketplaceRequest->getSort(),'listing_id'=>$_AmazonWebServicesTypeMarketplaceRequest->getListing_id(),'locale'=>$_AmazonWebServicesTypeMarketplaceRequest->getLocale(),'index'=>$_AmazonWebServicesTypeMarketplaceRequest->getIndex())));
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
	 * @return AmazonWebServicesTypeMarketplaceSearch
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