<?php
/**
 * Class file for EbayFindServiceFind
 * @date 04/07/2012
 */
/**
 * Class EbayFindServiceFind
 * @date 04/07/2012
 */
class EbayFindServiceFind extends EbayFindWsdlClass
{
	/**
	 * Method to call findItemsByKeywords
	 * @uses EbayFindWsdlClass::getSoapClient()
	 * @uses EbayFindWsdlClass::setResult()
	 * @uses EbayFindWsdlClass::getResult()
	 * @uses EbayFindWsdlClass::saveLastError()
	 * @uses EbayFindTypeFindItemsByKeywordsRequest::getKeywords()
	 * @uses EbayFindTypeFindItemsByKeywordsRequest::getItemFilter()
	 * @uses EbayFindTypeFindItemsByKeywordsRequest::getAspectFilter()
	 * @uses EbayFindTypeFindItemsByKeywordsRequest::getOutputSelector()
	 * @uses EbayFindTypeFindItemsByKeywordsRequest::getDomainFilter()
	 * @param EbayFindTypeFindItemsByKeywordsRequest FindItemsByKeywordsRequest
	 * @return EbayFindTypeFindItemsByKeywordsResponse
	 */
	public function findItemsByKeywords(EbayFindTypeFindItemsByKeywordsRequest $_EbayFindTypeFindItemsByKeywordsRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->findItemsByKeywords(array('keywords'=>$_EbayFindTypeFindItemsByKeywordsRequest->getKeywords(),'itemFilter'=>$_EbayFindTypeFindItemsByKeywordsRequest->getItemFilter(),'aspectFilter'=>$_EbayFindTypeFindItemsByKeywordsRequest->getAspectFilter(),'outputSelector'=>$_EbayFindTypeFindItemsByKeywordsRequest->getOutputSelector(),'domainFilter'=>$_EbayFindTypeFindItemsByKeywordsRequest->getDomainFilter())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call findItemsByCategory
	 * @uses EbayFindWsdlClass::getSoapClient()
	 * @uses EbayFindWsdlClass::setResult()
	 * @uses EbayFindWsdlClass::getResult()
	 * @uses EbayFindWsdlClass::saveLastError()
	 * @uses EbayFindTypeFindItemsByCategoryRequest::getCategoryId()
	 * @uses EbayFindTypeFindItemsByCategoryRequest::getItemFilter()
	 * @uses EbayFindTypeFindItemsByCategoryRequest::getAspectFilter()
	 * @uses EbayFindTypeFindItemsByCategoryRequest::getOutputSelector()
	 * @uses EbayFindTypeFindItemsByCategoryRequest::getDomainFilter()
	 * @param EbayFindTypeFindItemsByCategoryRequest FindItemsByCategoryRequest
	 * @return EbayFindTypeFindItemsByCategoryResponse
	 */
	public function findItemsByCategory(EbayFindTypeFindItemsByCategoryRequest $_EbayFindTypeFindItemsByCategoryRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->findItemsByCategory(array('categoryId'=>$_EbayFindTypeFindItemsByCategoryRequest->getCategoryId(),'itemFilter'=>$_EbayFindTypeFindItemsByCategoryRequest->getItemFilter(),'aspectFilter'=>$_EbayFindTypeFindItemsByCategoryRequest->getAspectFilter(),'outputSelector'=>$_EbayFindTypeFindItemsByCategoryRequest->getOutputSelector(),'domainFilter'=>$_EbayFindTypeFindItemsByCategoryRequest->getDomainFilter())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call findItemsAdvanced
	 * @uses EbayFindWsdlClass::getSoapClient()
	 * @uses EbayFindWsdlClass::setResult()
	 * @uses EbayFindWsdlClass::getResult()
	 * @uses EbayFindWsdlClass::saveLastError()
	 * @uses EbayFindTypeFindItemsAdvancedRequest::getKeywords()
	 * @uses EbayFindTypeFindItemsAdvancedRequest::getCategoryId()
	 * @uses EbayFindTypeFindItemsAdvancedRequest::getItemFilter()
	 * @uses EbayFindTypeFindItemsAdvancedRequest::getAspectFilter()
	 * @uses EbayFindTypeFindItemsAdvancedRequest::getOutputSelector()
	 * @uses EbayFindTypeFindItemsAdvancedRequest::getDescriptionSearch()
	 * @uses EbayFindTypeFindItemsAdvancedRequest::getDomainFilter()
	 * @param EbayFindTypeFindItemsAdvancedRequest FindItemsAdvancedRequest
	 * @return EbayFindTypeFindItemsAdvancedResponse
	 */
	public function findItemsAdvanced(EbayFindTypeFindItemsAdvancedRequest $_EbayFindTypeFindItemsAdvancedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->findItemsAdvanced(array('keywords'=>$_EbayFindTypeFindItemsAdvancedRequest->getKeywords(),'categoryId'=>$_EbayFindTypeFindItemsAdvancedRequest->getCategoryId(),'itemFilter'=>$_EbayFindTypeFindItemsAdvancedRequest->getItemFilter(),'aspectFilter'=>$_EbayFindTypeFindItemsAdvancedRequest->getAspectFilter(),'outputSelector'=>$_EbayFindTypeFindItemsAdvancedRequest->getOutputSelector(),'descriptionSearch'=>$_EbayFindTypeFindItemsAdvancedRequest->getDescriptionSearch(),'domainFilter'=>$_EbayFindTypeFindItemsAdvancedRequest->getDomainFilter())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call findItemsByProduct
	 * @uses EbayFindWsdlClass::getSoapClient()
	 * @uses EbayFindWsdlClass::setResult()
	 * @uses EbayFindWsdlClass::getResult()
	 * @uses EbayFindWsdlClass::saveLastError()
	 * @uses EbayFindTypeFindItemsByProductRequest::getProductId()
	 * @uses EbayFindTypeFindItemsByProductRequest::getItemFilter()
	 * @uses EbayFindTypeFindItemsByProductRequest::getOutputSelector()
	 * @param EbayFindTypeFindItemsByProductRequest FindItemsByProductRequest
	 * @return EbayFindTypeFindItemsByProductResponse
	 */
	public function findItemsByProduct(EbayFindTypeFindItemsByProductRequest $_EbayFindTypeFindItemsByProductRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->findItemsByProduct(array('productId'=>$_EbayFindTypeFindItemsByProductRequest->getProductId(),'itemFilter'=>$_EbayFindTypeFindItemsByProductRequest->getItemFilter(),'outputSelector'=>$_EbayFindTypeFindItemsByProductRequest->getOutputSelector())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call findItemsIneBayStores
	 * @uses EbayFindWsdlClass::getSoapClient()
	 * @uses EbayFindWsdlClass::setResult()
	 * @uses EbayFindWsdlClass::getResult()
	 * @uses EbayFindWsdlClass::saveLastError()
	 * @uses EbayFindTypeFindItemsIneBayStoresRequest::getKeywords()
	 * @uses EbayFindTypeFindItemsIneBayStoresRequest::getStoreName()
	 * @uses EbayFindTypeFindItemsIneBayStoresRequest::getItemFilter()
	 * @uses EbayFindTypeFindItemsIneBayStoresRequest::getOutputSelector()
	 * @uses EbayFindTypeFindItemsIneBayStoresRequest::getAspectFilter()
	 * @uses EbayFindTypeFindItemsIneBayStoresRequest::getDomainFilter()
	 * @uses EbayFindTypeFindItemsIneBayStoresRequest::getCategoryId()
	 * @param EbayFindTypeFindItemsIneBayStoresRequest FindItemsIneBayStoresRequest
	 * @return EbayFindTypeFindItemsIneBayStoresResponse
	 */
	public function findItemsIneBayStores(EbayFindTypeFindItemsIneBayStoresRequest $_EbayFindTypeFindItemsIneBayStoresRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->findItemsIneBayStores(array('keywords'=>$_EbayFindTypeFindItemsIneBayStoresRequest->getKeywords(),'storeName'=>$_EbayFindTypeFindItemsIneBayStoresRequest->getStoreName(),'itemFilter'=>$_EbayFindTypeFindItemsIneBayStoresRequest->getItemFilter(),'outputSelector'=>$_EbayFindTypeFindItemsIneBayStoresRequest->getOutputSelector(),'aspectFilter'=>$_EbayFindTypeFindItemsIneBayStoresRequest->getAspectFilter(),'domainFilter'=>$_EbayFindTypeFindItemsIneBayStoresRequest->getDomainFilter(),'categoryId'=>$_EbayFindTypeFindItemsIneBayStoresRequest->getCategoryId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call findItemsByImage
	 * @uses EbayFindWsdlClass::getSoapClient()
	 * @uses EbayFindWsdlClass::setResult()
	 * @uses EbayFindWsdlClass::getResult()
	 * @uses EbayFindWsdlClass::saveLastError()
	 * @uses EbayFindTypeFindItemsByImageRequest::getItemId()
	 * @uses EbayFindTypeFindItemsByImageRequest::getCategoryId()
	 * @uses EbayFindTypeFindItemsByImageRequest::getItemFilter()
	 * @uses EbayFindTypeFindItemsByImageRequest::getAspectFilter()
	 * @uses EbayFindTypeFindItemsByImageRequest::getDomainFilter()
	 * @uses EbayFindTypeFindItemsByImageRequest::getOutputSelector()
	 * @param EbayFindTypeFindItemsByImageRequest FindItemsByImageRequest
	 * @return EbayFindTypeFindItemsByImageResponse
	 */
	public function findItemsByImage(EbayFindTypeFindItemsByImageRequest $_EbayFindTypeFindItemsByImageRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->findItemsByImage(array('itemId'=>$_EbayFindTypeFindItemsByImageRequest->getItemId(),'categoryId'=>$_EbayFindTypeFindItemsByImageRequest->getCategoryId(),'itemFilter'=>$_EbayFindTypeFindItemsByImageRequest->getItemFilter(),'aspectFilter'=>$_EbayFindTypeFindItemsByImageRequest->getAspectFilter(),'domainFilter'=>$_EbayFindTypeFindItemsByImageRequest->getDomainFilter(),'outputSelector'=>$_EbayFindTypeFindItemsByImageRequest->getOutputSelector())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call findCompletedItems
	 * @uses EbayFindWsdlClass::getSoapClient()
	 * @uses EbayFindWsdlClass::setResult()
	 * @uses EbayFindWsdlClass::getResult()
	 * @uses EbayFindWsdlClass::saveLastError()
	 * @uses EbayFindTypeFindCompletedItemsRequest::getKeywords()
	 * @uses EbayFindTypeFindCompletedItemsRequest::getCategoryId()
	 * @uses EbayFindTypeFindCompletedItemsRequest::getItemFilter()
	 * @uses EbayFindTypeFindCompletedItemsRequest::getAspectFilter()
	 * @uses EbayFindTypeFindCompletedItemsRequest::getOutputSelector()
	 * @uses EbayFindTypeFindCompletedItemsRequest::getDomainFilter()
	 * @uses EbayFindTypeFindCompletedItemsRequest::getProductId()
	 * @param EbayFindTypeFindCompletedItemsRequest FindCompletedItemsRequest
	 * @return EbayFindTypeFindCompletedItemsResponse
	 */
	public function findCompletedItems(EbayFindTypeFindCompletedItemsRequest $_EbayFindTypeFindCompletedItemsRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->findCompletedItems(array('keywords'=>$_EbayFindTypeFindCompletedItemsRequest->getKeywords(),'categoryId'=>$_EbayFindTypeFindCompletedItemsRequest->getCategoryId(),'itemFilter'=>$_EbayFindTypeFindCompletedItemsRequest->getItemFilter(),'aspectFilter'=>$_EbayFindTypeFindCompletedItemsRequest->getAspectFilter(),'outputSelector'=>$_EbayFindTypeFindCompletedItemsRequest->getOutputSelector(),'domainFilter'=>$_EbayFindTypeFindCompletedItemsRequest->getDomainFilter(),'productId'=>$_EbayFindTypeFindCompletedItemsRequest->getProductId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call findItemsForFavoriteSearch
	 * @uses EbayFindWsdlClass::getSoapClient()
	 * @uses EbayFindWsdlClass::setResult()
	 * @uses EbayFindWsdlClass::getResult()
	 * @uses EbayFindWsdlClass::saveLastError()
	 * @uses EbayFindTypeFindItemsForFavoriteSearchRequest::getSearchId()
	 * @uses EbayFindTypeFindItemsForFavoriteSearchRequest::getSearchName()
	 * @uses EbayFindTypeFindItemsForFavoriteSearchRequest::getStartTimeFrom()
	 * @uses EbayFindTypeFindItemsForFavoriteSearchRequest::getPaginationInput()
	 * @param EbayFindTypeFindItemsForFavoriteSearchRequest FindItemsForFavoriteSearchRequest
	 * @return EbayFindTypeFindItemsForFavoriteSearchResponse
	 */
	public function findItemsForFavoriteSearch(EbayFindTypeFindItemsForFavoriteSearchRequest $_EbayFindTypeFindItemsForFavoriteSearchRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->findItemsForFavoriteSearch(array('searchId'=>$_EbayFindTypeFindItemsForFavoriteSearchRequest->getSearchId(),'searchName'=>$_EbayFindTypeFindItemsForFavoriteSearchRequest->getSearchName(),'startTimeFrom'=>$_EbayFindTypeFindItemsForFavoriteSearchRequest->getStartTimeFrom(),'paginationInput'=>$_EbayFindTypeFindItemsForFavoriteSearchRequest->getPaginationInput())));
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
	 * @return EbayFindTypeFindItemsForFavoriteSearchResponse
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