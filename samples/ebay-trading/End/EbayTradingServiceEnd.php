<?php
/**
 * Class file for EbayTradingServiceEnd
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceEnd
 * @date 04/07/2012
 */
class EbayTradingServiceEnd extends EbayTradingWsdlClass
{
	/**
	 * Method to call EndFixedPriceItem
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeEndFixedPriceItemRequestType::getItemID()
	 * @uses EbayTradingTypeEndFixedPriceItemRequestType::getEndingReason()
	 * @uses EbayTradingTypeEndFixedPriceItemRequestType::getSKU()
	 * @param EbayTradingTypeEndFixedPriceItemRequestType EndFixedPriceItemRequestType
	 * @return EbayTradingTypeEndFixedPriceItemResponseType
	 */
	public function EndFixedPriceItem(EbayTradingTypeEndFixedPriceItemRequestType $_EbayTradingTypeEndFixedPriceItemRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->EndFixedPriceItem(array('ItemID'=>$_EbayTradingTypeEndFixedPriceItemRequestType->getItemID(),'EndingReason'=>$_EbayTradingTypeEndFixedPriceItemRequestType->getEndingReason(),'SKU'=>$_EbayTradingTypeEndFixedPriceItemRequestType->getSKU())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call EndItem
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeEndItemRequestType::getItemID()
	 * @uses EbayTradingTypeEndItemRequestType::getEndingReason()
	 * @uses EbayTradingTypeEndItemRequestType::getSellerInventoryID()
	 * @param EbayTradingTypeEndItemRequestType EndItemRequestType
	 * @return EbayTradingTypeEndItemResponseType
	 */
	public function EndItem(EbayTradingTypeEndItemRequestType $_EbayTradingTypeEndItemRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->EndItem(array('ItemID'=>$_EbayTradingTypeEndItemRequestType->getItemID(),'EndingReason'=>$_EbayTradingTypeEndItemRequestType->getEndingReason(),'SellerInventoryID'=>$_EbayTradingTypeEndItemRequestType->getSellerInventoryID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call EndItems
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeEndItemsRequestType::getEndItemRequestContainer()
	 * @param EbayTradingTypeEndItemsRequestType EndItemsRequestType
	 * @return EbayTradingTypeEndItemsResponseType
	 */
	public function EndItems(EbayTradingTypeEndItemsRequestType $_EbayTradingTypeEndItemsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->EndItems(array('EndItemRequestContainer'=>$_EbayTradingTypeEndItemsRequestType->getEndItemRequestContainer())));
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
	 * @return EbayTradingTypeEndItemsResponseType
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