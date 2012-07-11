<?php
/**
 * Class file for EbayShoppingServiceGet
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingServiceGet
 * @date 05/07/2012
 */
class EbayShoppingServiceGet extends EbayShoppingWsdlClass
{
	/**
	 * Method to call GetCategoryInfo
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingTypeGetCategoryInfoRequestType::getCategoryID()
	 * @uses EbayShoppingTypeGetCategoryInfoRequestType::getIncludeSelector()
	 * @param EbayShoppingTypeGetCategoryInfoRequestType GetCategoryInfoRequestType
	 * @return EbayShoppingTypeGetCategoryInfoResponseType
	 */
	public function GetCategoryInfo(EbayShoppingTypeGetCategoryInfoRequestType $_EbayShoppingTypeGetCategoryInfoRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCategoryInfo(array('CategoryID'=>$_EbayShoppingTypeGetCategoryInfoRequestType->getCategoryID(),'IncludeSelector'=>$_EbayShoppingTypeGetCategoryInfoRequestType->getIncludeSelector())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetItemStatus
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingTypeGetItemStatusRequestType::getItemID()
	 * @param EbayShoppingTypeGetItemStatusRequestType GetItemStatusRequestType
	 * @return EbayShoppingTypeGetItemStatusResponseType
	 */
	public function GetItemStatus(EbayShoppingTypeGetItemStatusRequestType $_EbayShoppingTypeGetItemStatusRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetItemStatus(array('ItemID'=>$_EbayShoppingTypeGetItemStatusRequestType->getItemID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMultipleItems
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingTypeGetMultipleItemsRequestType::getItemID()
	 * @uses EbayShoppingTypeGetMultipleItemsRequestType::getIncludeSelector()
	 * @param EbayShoppingTypeGetMultipleItemsRequestType GetMultipleItemsRequestType
	 * @return EbayShoppingTypeGetMultipleItemsResponseType
	 */
	public function GetMultipleItems(EbayShoppingTypeGetMultipleItemsRequestType $_EbayShoppingTypeGetMultipleItemsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMultipleItems(array('ItemID'=>$_EbayShoppingTypeGetMultipleItemsRequestType->getItemID(),'IncludeSelector'=>$_EbayShoppingTypeGetMultipleItemsRequestType->getIncludeSelector())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetShippingCosts
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingTypeGetShippingCostsRequestType::getItemID()
	 * @uses EbayShoppingTypeGetShippingCostsRequestType::getQuantitySold()
	 * @uses EbayShoppingTypeGetShippingCostsRequestType::getDestinationPostalCode()
	 * @uses EbayShoppingTypeGetShippingCostsRequestType::getDestinationCountryCode()
	 * @uses EbayShoppingTypeGetShippingCostsRequestType::getIncludeDetails()
	 * @param EbayShoppingTypeGetShippingCostsRequestType GetShippingCostsRequestType
	 * @return EbayShoppingTypeGetShippingCostsResponseType
	 */
	public function GetShippingCosts(EbayShoppingTypeGetShippingCostsRequestType $_EbayShoppingTypeGetShippingCostsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetShippingCosts(array('ItemID'=>$_EbayShoppingTypeGetShippingCostsRequestType->getItemID(),'QuantitySold'=>$_EbayShoppingTypeGetShippingCostsRequestType->getQuantitySold(),'DestinationPostalCode'=>$_EbayShoppingTypeGetShippingCostsRequestType->getDestinationPostalCode(),'DestinationCountryCode'=>$_EbayShoppingTypeGetShippingCostsRequestType->getDestinationCountryCode(),'IncludeDetails'=>$_EbayShoppingTypeGetShippingCostsRequestType->getIncludeDetails())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSingleItem
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingTypeGetSingleItemRequestType::getItemID()
	 * @uses EbayShoppingTypeGetSingleItemRequestType::getVariationSKU()
	 * @uses EbayShoppingTypeGetSingleItemRequestType::getVariationSpecifics()
	 * @uses EbayShoppingTypeGetSingleItemRequestType::getIncludeSelector()
	 * @param EbayShoppingTypeGetSingleItemRequestType GetSingleItemRequestType
	 * @return EbayShoppingTypeGetSingleItemResponseType
	 */
	public function GetSingleItem(EbayShoppingTypeGetSingleItemRequestType $_EbayShoppingTypeGetSingleItemRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSingleItem(array('ItemID'=>$_EbayShoppingTypeGetSingleItemRequestType->getItemID(),'VariationSKU'=>$_EbayShoppingTypeGetSingleItemRequestType->getVariationSKU(),'VariationSpecifics'=>$_EbayShoppingTypeGetSingleItemRequestType->getVariationSpecifics(),'IncludeSelector'=>$_EbayShoppingTypeGetSingleItemRequestType->getIncludeSelector())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetUserProfile
	 * @uses EbayShoppingWsdlClass::getSoapClient()
	 * @uses EbayShoppingWsdlClass::setResult()
	 * @uses EbayShoppingWsdlClass::getResult()
	 * @uses EbayShoppingWsdlClass::saveLastError()
	 * @uses EbayShoppingTypeGetUserProfileRequestType::getUserID()
	 * @uses EbayShoppingTypeGetUserProfileRequestType::getIncludeSelector()
	 * @param EbayShoppingTypeGetUserProfileRequestType GetUserProfileRequestType
	 * @return EbayShoppingTypeGetUserProfileResponseType
	 */
	public function GetUserProfile(EbayShoppingTypeGetUserProfileRequestType $_EbayShoppingTypeGetUserProfileRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUserProfile(array('UserID'=>$_EbayShoppingTypeGetUserProfileRequestType->getUserID(),'IncludeSelector'=>$_EbayShoppingTypeGetUserProfileRequestType->getIncludeSelector())));
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
	 * @return EbayShoppingTypeGetUserProfileResponseType
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