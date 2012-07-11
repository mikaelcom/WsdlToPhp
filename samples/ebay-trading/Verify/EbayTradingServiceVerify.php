<?php
/**
 * Class file for EbayTradingServiceVerify
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceVerify
 * @date 04/07/2012
 */
class EbayTradingServiceVerify extends EbayTradingWsdlClass
{
	/**
	 * Method to call VerifyAddFixedPriceItem
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeVerifyAddFixedPriceItemRequestType::getItem()
	 * @param EbayTradingTypeVerifyAddFixedPriceItemRequestType VerifyAddFixedPriceItemRequestType
	 * @return EbayTradingTypeVerifyAddFixedPriceItemResponseType
	 */
	public function VerifyAddFixedPriceItem(EbayTradingTypeVerifyAddFixedPriceItemRequestType $_EbayTradingTypeVerifyAddFixedPriceItemRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->VerifyAddFixedPriceItem(array('Item'=>$_EbayTradingTypeVerifyAddFixedPriceItemRequestType->getItem())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call VerifyAddItem
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeVerifyAddItemRequestType::getItem()
	 * @uses EbayTradingTypeVerifyAddItemRequestType::getIncludeExpressRequirements()
	 * @uses EbayTradingTypeVerifyAddItemRequestType::getExternalProductID()
	 * @param EbayTradingTypeVerifyAddItemRequestType VerifyAddItemRequestType
	 * @return EbayTradingTypeVerifyAddItemResponseType
	 */
	public function VerifyAddItem(EbayTradingTypeVerifyAddItemRequestType $_EbayTradingTypeVerifyAddItemRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->VerifyAddItem(array('Item'=>$_EbayTradingTypeVerifyAddItemRequestType->getItem(),'IncludeExpressRequirements'=>$_EbayTradingTypeVerifyAddItemRequestType->getIncludeExpressRequirements(),'ExternalProductID'=>$_EbayTradingTypeVerifyAddItemRequestType->getExternalProductID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call VerifyAddSecondChanceItem
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeVerifyAddSecondChanceItemRequestType::getRecipientBidderUserID()
	 * @uses EbayTradingTypeVerifyAddSecondChanceItemRequestType::getBuyItNowPrice()
	 * @uses EbayTradingTypeVerifyAddSecondChanceItemRequestType::getDuration()
	 * @uses EbayTradingTypeVerifyAddSecondChanceItemRequestType::getItemID()
	 * @uses EbayTradingTypeVerifyAddSecondChanceItemRequestType::getSellerMessage()
	 * @param EbayTradingTypeVerifyAddSecondChanceItemRequestType VerifyAddSecondChanceItemRequestType
	 * @return EbayTradingTypeVerifyAddSecondChanceItemResponseType
	 */
	public function VerifyAddSecondChanceItem(EbayTradingTypeVerifyAddSecondChanceItemRequestType $_EbayTradingTypeVerifyAddSecondChanceItemRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->VerifyAddSecondChanceItem(array('RecipientBidderUserID'=>$_EbayTradingTypeVerifyAddSecondChanceItemRequestType->getRecipientBidderUserID(),'BuyItNowPrice'=>$_EbayTradingTypeVerifyAddSecondChanceItemRequestType->getBuyItNowPrice(),'Duration'=>$_EbayTradingTypeVerifyAddSecondChanceItemRequestType->getDuration(),'ItemID'=>$_EbayTradingTypeVerifyAddSecondChanceItemRequestType->getItemID(),'SellerMessage'=>$_EbayTradingTypeVerifyAddSecondChanceItemRequestType->getSellerMessage())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call VerifyRelistItem
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeVerifyRelistItemRequestType::getItem()
	 * @uses EbayTradingTypeVerifyRelistItemRequestType::getDeletedField()
	 * @param EbayTradingTypeVerifyRelistItemRequestType VerifyRelistItemRequestType
	 * @return EbayTradingTypeVerifyRelistItemResponseType
	 */
	public function VerifyRelistItem(EbayTradingTypeVerifyRelistItemRequestType $_EbayTradingTypeVerifyRelistItemRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->VerifyRelistItem(array('Item'=>$_EbayTradingTypeVerifyRelistItemRequestType->getItem(),'DeletedField'=>$_EbayTradingTypeVerifyRelistItemRequestType->getDeletedField())));
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
	 * @return EbayTradingTypeVerifyRelistItemResponseType
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