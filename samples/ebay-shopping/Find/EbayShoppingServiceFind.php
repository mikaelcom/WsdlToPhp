<?php
/**
 * Class file for EbayShoppingServiceFind
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingServiceFind
 * @date 05/07/2012
 */
class EbayShoppingServiceFind extends EbayShoppingWsdlClass
{
	/**
	 * Method to call FindHalfProducts
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingTypeFindHalfProductsRequestType::getIncludeSelector()
	 * @uses EbayShoppingTypeFindHalfProductsRequestType::getAvailableItemsOnly()
	 * @uses EbayShoppingTypeFindHalfProductsRequestType::getDomainName()
	 * @uses EbayShoppingTypeFindHalfProductsRequestType::getProductID()
	 * @uses EbayShoppingTypeFindHalfProductsRequestType::getQueryKeywords()
	 * @uses EbayShoppingTypeFindHalfProductsRequestType::getSellerID()
	 * @uses EbayShoppingTypeFindHalfProductsRequestType::getProductSort()
	 * @uses EbayShoppingTypeFindHalfProductsRequestType::getSortOrder()
	 * @uses EbayShoppingTypeFindHalfProductsRequestType::getMaxEntries()
	 * @uses EbayShoppingTypeFindHalfProductsRequestType::getPageNumber()
	 * @param EbayShoppingTypeFindHalfProductsRequestType FindHalfProductsRequestType
	 * @return EbayShoppingTypeFindHalfProductsResponseType
	 */
	public function FindHalfProducts(EbayShoppingTypeFindHalfProductsRequestType $_EbayShoppingTypeFindHalfProductsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->FindHalfProducts(array('IncludeSelector'=>$_EbayShoppingTypeFindHalfProductsRequestType->getIncludeSelector(),'AvailableItemsOnly'=>$_EbayShoppingTypeFindHalfProductsRequestType->getAvailableItemsOnly(),'DomainName'=>$_EbayShoppingTypeFindHalfProductsRequestType->getDomainName(),'ProductID'=>$_EbayShoppingTypeFindHalfProductsRequestType->getProductID(),'QueryKeywords'=>$_EbayShoppingTypeFindHalfProductsRequestType->getQueryKeywords(),'SellerID'=>$_EbayShoppingTypeFindHalfProductsRequestType->getSellerID(),'ProductSort'=>$_EbayShoppingTypeFindHalfProductsRequestType->getProductSort(),'SortOrder'=>$_EbayShoppingTypeFindHalfProductsRequestType->getSortOrder(),'MaxEntries'=>$_EbayShoppingTypeFindHalfProductsRequestType->getMaxEntries(),'PageNumber'=>$_EbayShoppingTypeFindHalfProductsRequestType->getPageNumber())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call FindPopularItems
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingTypeFindPopularItemsRequestType::getCategoryID()
	 * @uses EbayShoppingTypeFindPopularItemsRequestType::getQueryKeywords()
	 * @uses EbayShoppingTypeFindPopularItemsRequestType::getCategoryIDExclude()
	 * @uses EbayShoppingTypeFindPopularItemsRequestType::getMaxEntries()
	 * @param EbayShoppingTypeFindPopularItemsRequestType FindPopularItemsRequestType
	 * @return EbayShoppingTypeFindPopularItemsResponseType
	 */
	public function FindPopularItems(EbayShoppingTypeFindPopularItemsRequestType $_EbayShoppingTypeFindPopularItemsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->FindPopularItems(array('CategoryID'=>$_EbayShoppingTypeFindPopularItemsRequestType->getCategoryID(),'QueryKeywords'=>$_EbayShoppingTypeFindPopularItemsRequestType->getQueryKeywords(),'CategoryIDExclude'=>$_EbayShoppingTypeFindPopularItemsRequestType->getCategoryIDExclude(),'MaxEntries'=>$_EbayShoppingTypeFindPopularItemsRequestType->getMaxEntries())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call FindPopularSearches
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingTypeFindPopularSearchesRequestType::getCategoryID()
	 * @uses EbayShoppingTypeFindPopularSearchesRequestType::getQueryKeywords()
	 * @uses EbayShoppingTypeFindPopularSearchesRequestType::getMaxKeywords()
	 * @uses EbayShoppingTypeFindPopularSearchesRequestType::getMaxResultsPerPage()
	 * @uses EbayShoppingTypeFindPopularSearchesRequestType::getPageNumber()
	 * @uses EbayShoppingTypeFindPopularSearchesRequestType::getIncludeChildCategories()
	 * @param EbayShoppingTypeFindPopularSearchesRequestType FindPopularSearchesRequestType
	 * @return EbayShoppingTypeFindPopularSearchesResponseType
	 */
	public function FindPopularSearches(EbayShoppingTypeFindPopularSearchesRequestType $_EbayShoppingTypeFindPopularSearchesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->FindPopularSearches(array('CategoryID'=>$_EbayShoppingTypeFindPopularSearchesRequestType->getCategoryID(),'QueryKeywords'=>$_EbayShoppingTypeFindPopularSearchesRequestType->getQueryKeywords(),'MaxKeywords'=>$_EbayShoppingTypeFindPopularSearchesRequestType->getMaxKeywords(),'MaxResultsPerPage'=>$_EbayShoppingTypeFindPopularSearchesRequestType->getMaxResultsPerPage(),'PageNumber'=>$_EbayShoppingTypeFindPopularSearchesRequestType->getPageNumber(),'IncludeChildCategories'=>$_EbayShoppingTypeFindPopularSearchesRequestType->getIncludeChildCategories())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call FindProducts
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingTypeFindProductsRequestType::getIncludeSelector()
	 * @uses EbayShoppingTypeFindProductsRequestType::getAvailableItemsOnly()
	 * @uses EbayShoppingTypeFindProductsRequestType::getDomainName()
	 * @uses EbayShoppingTypeFindProductsRequestType::getProductID()
	 * @uses EbayShoppingTypeFindProductsRequestType::getQueryKeywords()
	 * @uses EbayShoppingTypeFindProductsRequestType::getProductSort()
	 * @uses EbayShoppingTypeFindProductsRequestType::getSortOrder()
	 * @uses EbayShoppingTypeFindProductsRequestType::getMaxEntries()
	 * @uses EbayShoppingTypeFindProductsRequestType::getPageNumber()
	 * @uses EbayShoppingTypeFindProductsRequestType::getCategoryID()
	 * @uses EbayShoppingTypeFindProductsRequestType::getHideDuplicateItems()
	 * @param EbayShoppingTypeFindProductsRequestType FindProductsRequestType
	 * @return EbayShoppingTypeFindProductsResponseType
	 */
	public function FindProducts(EbayShoppingTypeFindProductsRequestType $_EbayShoppingTypeFindProductsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->FindProducts(array('IncludeSelector'=>$_EbayShoppingTypeFindProductsRequestType->getIncludeSelector(),'AvailableItemsOnly'=>$_EbayShoppingTypeFindProductsRequestType->getAvailableItemsOnly(),'DomainName'=>$_EbayShoppingTypeFindProductsRequestType->getDomainName(),'ProductID'=>$_EbayShoppingTypeFindProductsRequestType->getProductID(),'QueryKeywords'=>$_EbayShoppingTypeFindProductsRequestType->getQueryKeywords(),'ProductSort'=>$_EbayShoppingTypeFindProductsRequestType->getProductSort(),'SortOrder'=>$_EbayShoppingTypeFindProductsRequestType->getSortOrder(),'MaxEntries'=>$_EbayShoppingTypeFindProductsRequestType->getMaxEntries(),'PageNumber'=>$_EbayShoppingTypeFindProductsRequestType->getPageNumber(),'CategoryID'=>$_EbayShoppingTypeFindProductsRequestType->getCategoryID(),'HideDuplicateItems'=>$_EbayShoppingTypeFindProductsRequestType->getHideDuplicateItems())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call FindReviewsAndGuides
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingTypeFindReviewsAndGuidesRequestType::getProductID()
	 * @uses EbayShoppingTypeFindReviewsAndGuidesRequestType::getUserID()
	 * @uses EbayShoppingTypeFindReviewsAndGuidesRequestType::getCategoryID()
	 * @uses EbayShoppingTypeFindReviewsAndGuidesRequestType::getMaxResultsPerPage()
	 * @uses EbayShoppingTypeFindReviewsAndGuidesRequestType::getPageNumber()
	 * @uses EbayShoppingTypeFindReviewsAndGuidesRequestType::getReviewSort()
	 * @uses EbayShoppingTypeFindReviewsAndGuidesRequestType::getSortOrder()
	 * @param EbayShoppingTypeFindReviewsAndGuidesRequestType FindReviewsAndGuidesRequestType
	 * @return EbayShoppingTypeFindReviewsAndGuidesResponseType
	 */
	public function FindReviewsAndGuides(EbayShoppingTypeFindReviewsAndGuidesRequestType $_EbayShoppingTypeFindReviewsAndGuidesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->FindReviewsAndGuides(array('ProductID'=>$_EbayShoppingTypeFindReviewsAndGuidesRequestType->getProductID(),'UserID'=>$_EbayShoppingTypeFindReviewsAndGuidesRequestType->getUserID(),'CategoryID'=>$_EbayShoppingTypeFindReviewsAndGuidesRequestType->getCategoryID(),'MaxResultsPerPage'=>$_EbayShoppingTypeFindReviewsAndGuidesRequestType->getMaxResultsPerPage(),'PageNumber'=>$_EbayShoppingTypeFindReviewsAndGuidesRequestType->getPageNumber(),'ReviewSort'=>$_EbayShoppingTypeFindReviewsAndGuidesRequestType->getReviewSort(),'SortOrder'=>$_EbayShoppingTypeFindReviewsAndGuidesRequestType->getSortOrder())));
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
	 * @return EbayShoppingTypeFindReviewsAndGuidesResponseType
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