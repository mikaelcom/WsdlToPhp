<?php
/**
 * Class file for EbayTradingServiceAdd
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceAdd
 * @date 04/07/2012
 */
class EbayTradingServiceAdd extends EbayTradingWsdlClass
{
	/**
	 * Method to call AddDispute
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeAddDisputeRequestType::getDisputeExplanation()
	 * @uses EbayTradingTypeAddDisputeRequestType::getDisputeReason()
	 * @uses EbayTradingTypeAddDisputeRequestType::getItemID()
	 * @uses EbayTradingTypeAddDisputeRequestType::getTransactionID()
	 * @uses EbayTradingTypeAddDisputeRequestType::getOrderLineItemID()
	 * @param EbayTradingTypeAddDisputeRequestType AddDisputeRequestType
	 * @return EbayTradingTypeAddDisputeResponseType
	 */
	public function AddDispute(EbayTradingTypeAddDisputeRequestType $_EbayTradingTypeAddDisputeRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddDispute(array('DisputeExplanation'=>$_EbayTradingTypeAddDisputeRequestType->getDisputeExplanation(),'DisputeReason'=>$_EbayTradingTypeAddDisputeRequestType->getDisputeReason(),'ItemID'=>$_EbayTradingTypeAddDisputeRequestType->getItemID(),'TransactionID'=>$_EbayTradingTypeAddDisputeRequestType->getTransactionID(),'OrderLineItemID'=>$_EbayTradingTypeAddDisputeRequestType->getOrderLineItemID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddDisputeResponse
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeAddDisputeResponseRequestType::getDisputeID()
	 * @uses EbayTradingTypeAddDisputeResponseRequestType::getMessageText()
	 * @uses EbayTradingTypeAddDisputeResponseRequestType::getDisputeActivity()
	 * @uses EbayTradingTypeAddDisputeResponseRequestType::getShippingCarrierUsed()
	 * @uses EbayTradingTypeAddDisputeResponseRequestType::getShipmentTrackNumber()
	 * @uses EbayTradingTypeAddDisputeResponseRequestType::getShippingTime()
	 * @param EbayTradingTypeAddDisputeResponseRequestType AddDisputeResponseRequestType
	 * @return EbayTradingTypeAddDisputeResponseResponseType
	 */
	public function AddDisputeResponse(EbayTradingTypeAddDisputeResponseRequestType $_EbayTradingTypeAddDisputeResponseRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddDisputeResponse(array('DisputeID'=>$_EbayTradingTypeAddDisputeResponseRequestType->getDisputeID(),'MessageText'=>$_EbayTradingTypeAddDisputeResponseRequestType->getMessageText(),'DisputeActivity'=>$_EbayTradingTypeAddDisputeResponseRequestType->getDisputeActivity(),'ShippingCarrierUsed'=>$_EbayTradingTypeAddDisputeResponseRequestType->getShippingCarrierUsed(),'ShipmentTrackNumber'=>$_EbayTradingTypeAddDisputeResponseRequestType->getShipmentTrackNumber(),'ShippingTime'=>$_EbayTradingTypeAddDisputeResponseRequestType->getShippingTime())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddFixedPriceItem
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeAddFixedPriceItemRequestType::getItem()
	 * @param EbayTradingTypeAddFixedPriceItemRequestType AddFixedPriceItemRequestType
	 * @return EbayTradingTypeAddFixedPriceItemResponseType
	 */
	public function AddFixedPriceItem(EbayTradingTypeAddFixedPriceItemRequestType $_EbayTradingTypeAddFixedPriceItemRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddFixedPriceItem(array('Item'=>$_EbayTradingTypeAddFixedPriceItemRequestType->getItem())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddItem
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeAddItemRequestType::getItem()
	 * @param EbayTradingTypeAddItemRequestType AddItemRequestType
	 * @return EbayTradingTypeAddItemResponseType
	 */
	public function AddItem(EbayTradingTypeAddItemRequestType $_EbayTradingTypeAddItemRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddItem(array('Item'=>$_EbayTradingTypeAddItemRequestType->getItem())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddItemFromSellingManagerTemplate
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeAddItemFromSellingManagerTemplateRequestType::getSaleTemplateID()
	 * @uses EbayTradingTypeAddItemFromSellingManagerTemplateRequestType::getScheduleTime()
	 * @uses EbayTradingTypeAddItemFromSellingManagerTemplateRequestType::getItem()
	 * @param EbayTradingTypeAddItemFromSellingManagerTemplateRequestType AddItemFromSellingManagerTemplateRequestType
	 * @return EbayTradingTypeAddItemFromSellingManagerTemplateResponseType
	 */
	public function AddItemFromSellingManagerTemplate(EbayTradingTypeAddItemFromSellingManagerTemplateRequestType $_EbayTradingTypeAddItemFromSellingManagerTemplateRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddItemFromSellingManagerTemplate(array('SaleTemplateID'=>$_EbayTradingTypeAddItemFromSellingManagerTemplateRequestType->getSaleTemplateID(),'ScheduleTime'=>$_EbayTradingTypeAddItemFromSellingManagerTemplateRequestType->getScheduleTime(),'Item'=>$_EbayTradingTypeAddItemFromSellingManagerTemplateRequestType->getItem())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddItems
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeAddItemsRequestType::getAddItemRequestContainer()
	 * @param EbayTradingTypeAddItemsRequestType AddItemsRequestType
	 * @return EbayTradingTypeAddItemsResponseType
	 */
	public function AddItems(EbayTradingTypeAddItemsRequestType $_EbayTradingTypeAddItemsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddItems(array('AddItemRequestContainer'=>$_EbayTradingTypeAddItemsRequestType->getAddItemRequestContainer())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddMemberMessageAAQToPartner
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeAddMemberMessageAAQToPartnerRequestType::getItemID()
	 * @uses EbayTradingTypeAddMemberMessageAAQToPartnerRequestType::getMemberMessage()
	 * @param EbayTradingTypeAddMemberMessageAAQToPartnerRequestType AddMemberMessageAAQToPartnerRequestType
	 * @return EbayTradingTypeAddMemberMessageAAQToPartnerResponseType
	 */
	public function AddMemberMessageAAQToPartner(EbayTradingTypeAddMemberMessageAAQToPartnerRequestType $_EbayTradingTypeAddMemberMessageAAQToPartnerRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddMemberMessageAAQToPartner(array('ItemID'=>$_EbayTradingTypeAddMemberMessageAAQToPartnerRequestType->getItemID(),'MemberMessage'=>$_EbayTradingTypeAddMemberMessageAAQToPartnerRequestType->getMemberMessage())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddMemberMessageRTQ
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeAddMemberMessageRTQRequestType::getItemID()
	 * @uses EbayTradingTypeAddMemberMessageRTQRequestType::getMemberMessage()
	 * @param EbayTradingTypeAddMemberMessageRTQRequestType AddMemberMessageRTQRequestType
	 * @return EbayTradingTypeAddMemberMessageRTQResponseType
	 */
	public function AddMemberMessageRTQ(EbayTradingTypeAddMemberMessageRTQRequestType $_EbayTradingTypeAddMemberMessageRTQRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddMemberMessageRTQ(array('ItemID'=>$_EbayTradingTypeAddMemberMessageRTQRequestType->getItemID(),'MemberMessage'=>$_EbayTradingTypeAddMemberMessageRTQRequestType->getMemberMessage())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddMemberMessagesAAQToBidder
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeAddMemberMessagesAAQToBidderRequestType::getAddMemberMessagesAAQToBidderRequestContainer()
	 * @param EbayTradingTypeAddMemberMessagesAAQToBidderRequestType AddMemberMessagesAAQToBidderRequestType
	 * @return EbayTradingTypeAddMemberMessagesAAQToBidderResponseType
	 */
	public function AddMemberMessagesAAQToBidder(EbayTradingTypeAddMemberMessagesAAQToBidderRequestType $_EbayTradingTypeAddMemberMessagesAAQToBidderRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddMemberMessagesAAQToBidder(array('AddMemberMessagesAAQToBidderRequestContainer'=>$_EbayTradingTypeAddMemberMessagesAAQToBidderRequestType->getAddMemberMessagesAAQToBidderRequestContainer())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddOrder
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeAddOrderRequestType::getOrder()
	 * @param EbayTradingTypeAddOrderRequestType AddOrderRequestType
	 * @return EbayTradingTypeAddOrderResponseType
	 */
	public function AddOrder(EbayTradingTypeAddOrderRequestType $_EbayTradingTypeAddOrderRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddOrder(array('Order'=>$_EbayTradingTypeAddOrderRequestType->getOrder())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddSecondChanceItem
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeAddSecondChanceItemRequestType::getRecipientBidderUserID()
	 * @uses EbayTradingTypeAddSecondChanceItemRequestType::getBuyItNowPrice()
	 * @uses EbayTradingTypeAddSecondChanceItemRequestType::getDuration()
	 * @uses EbayTradingTypeAddSecondChanceItemRequestType::getItemID()
	 * @uses EbayTradingTypeAddSecondChanceItemRequestType::getSellerMessage()
	 * @param EbayTradingTypeAddSecondChanceItemRequestType AddSecondChanceItemRequestType
	 * @return EbayTradingTypeAddSecondChanceItemResponseType
	 */
	public function AddSecondChanceItem(EbayTradingTypeAddSecondChanceItemRequestType $_EbayTradingTypeAddSecondChanceItemRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddSecondChanceItem(array('RecipientBidderUserID'=>$_EbayTradingTypeAddSecondChanceItemRequestType->getRecipientBidderUserID(),'BuyItNowPrice'=>$_EbayTradingTypeAddSecondChanceItemRequestType->getBuyItNowPrice(),'Duration'=>$_EbayTradingTypeAddSecondChanceItemRequestType->getDuration(),'ItemID'=>$_EbayTradingTypeAddSecondChanceItemRequestType->getItemID(),'SellerMessage'=>$_EbayTradingTypeAddSecondChanceItemRequestType->getSellerMessage())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddSellingManagerInventoryFolder
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeAddSellingManagerInventoryFolderRequestType::getFolderName()
	 * @uses EbayTradingTypeAddSellingManagerInventoryFolderRequestType::getParentFolderID()
	 * @uses EbayTradingTypeAddSellingManagerInventoryFolderRequestType::getComment()
	 * @param EbayTradingTypeAddSellingManagerInventoryFolderRequestType AddSellingManagerInventoryFolderRequestType
	 * @return EbayTradingTypeAddSellingManagerInventoryFolderResponseType
	 */
	public function AddSellingManagerInventoryFolder(EbayTradingTypeAddSellingManagerInventoryFolderRequestType $_EbayTradingTypeAddSellingManagerInventoryFolderRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddSellingManagerInventoryFolder(array('FolderName'=>$_EbayTradingTypeAddSellingManagerInventoryFolderRequestType->getFolderName(),'ParentFolderID'=>$_EbayTradingTypeAddSellingManagerInventoryFolderRequestType->getParentFolderID(),'Comment'=>$_EbayTradingTypeAddSellingManagerInventoryFolderRequestType->getComment())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddSellingManagerProduct
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeAddSellingManagerProductRequestType::getSellingManagerProductDetails()
	 * @uses EbayTradingTypeAddSellingManagerProductRequestType::getFolderID()
	 * @uses EbayTradingTypeAddSellingManagerProductRequestType::getSellingManagerProductSpecifics()
	 * @param EbayTradingTypeAddSellingManagerProductRequestType AddSellingManagerProductRequestType
	 * @return EbayTradingTypeAddSellingManagerProductResponseType
	 */
	public function AddSellingManagerProduct(EbayTradingTypeAddSellingManagerProductRequestType $_EbayTradingTypeAddSellingManagerProductRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddSellingManagerProduct(array('SellingManagerProductDetails'=>$_EbayTradingTypeAddSellingManagerProductRequestType->getSellingManagerProductDetails(),'FolderID'=>$_EbayTradingTypeAddSellingManagerProductRequestType->getFolderID(),'SellingManagerProductSpecifics'=>$_EbayTradingTypeAddSellingManagerProductRequestType->getSellingManagerProductSpecifics())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddSellingManagerTemplate
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeAddSellingManagerTemplateRequestType::getItem()
	 * @uses EbayTradingTypeAddSellingManagerTemplateRequestType::getSaleTemplateName()
	 * @uses EbayTradingTypeAddSellingManagerTemplateRequestType::getProductID()
	 * @param EbayTradingTypeAddSellingManagerTemplateRequestType AddSellingManagerTemplateRequestType
	 * @return EbayTradingTypeAddSellingManagerTemplateResponseType
	 */
	public function AddSellingManagerTemplate(EbayTradingTypeAddSellingManagerTemplateRequestType $_EbayTradingTypeAddSellingManagerTemplateRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddSellingManagerTemplate(array('Item'=>$_EbayTradingTypeAddSellingManagerTemplateRequestType->getItem(),'SaleTemplateName'=>$_EbayTradingTypeAddSellingManagerTemplateRequestType->getSaleTemplateName(),'ProductID'=>$_EbayTradingTypeAddSellingManagerTemplateRequestType->getProductID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddToItemDescription
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeAddToItemDescriptionRequestType::getItemID()
	 * @uses EbayTradingTypeAddToItemDescriptionRequestType::getDescription()
	 * @param EbayTradingTypeAddToItemDescriptionRequestType AddToItemDescriptionRequestType
	 * @return EbayTradingTypeAddToItemDescriptionResponseType
	 */
	public function AddToItemDescription(EbayTradingTypeAddToItemDescriptionRequestType $_EbayTradingTypeAddToItemDescriptionRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddToItemDescription(array('ItemID'=>$_EbayTradingTypeAddToItemDescriptionRequestType->getItemID(),'Description'=>$_EbayTradingTypeAddToItemDescriptionRequestType->getDescription())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddToWatchList
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeAddToWatchListRequestType::getItemID()
	 * @uses EbayTradingTypeAddToWatchListRequestType::getVariationKey()
	 * @param EbayTradingTypeAddToWatchListRequestType AddToWatchListRequestType
	 * @return EbayTradingTypeAddToWatchListResponseType
	 */
	public function AddToWatchList(EbayTradingTypeAddToWatchListRequestType $_EbayTradingTypeAddToWatchListRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddToWatchList(array('ItemID'=>$_EbayTradingTypeAddToWatchListRequestType->getItemID(),'VariationKey'=>$_EbayTradingTypeAddToWatchListRequestType->getVariationKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddTransactionConfirmationItem
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeAddTransactionConfirmationItemRequestType::getRecipientUserID()
	 * @uses EbayTradingTypeAddTransactionConfirmationItemRequestType::getVerifyEligibilityOnly()
	 * @uses EbayTradingTypeAddTransactionConfirmationItemRequestType::getRecipientPostalCode()
	 * @uses EbayTradingTypeAddTransactionConfirmationItemRequestType::getRecipientRelationType()
	 * @uses EbayTradingTypeAddTransactionConfirmationItemRequestType::getNegotiatedPrice()
	 * @uses EbayTradingTypeAddTransactionConfirmationItemRequestType::getListingDuration()
	 * @uses EbayTradingTypeAddTransactionConfirmationItemRequestType::getItemID()
	 * @uses EbayTradingTypeAddTransactionConfirmationItemRequestType::getComments()
	 * @param EbayTradingTypeAddTransactionConfirmationItemRequestType AddTransactionConfirmationItemRequestType
	 * @return EbayTradingTypeAddTransactionConfirmationItemResponseType
	 */
	public function AddTransactionConfirmationItem(EbayTradingTypeAddTransactionConfirmationItemRequestType $_EbayTradingTypeAddTransactionConfirmationItemRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddTransactionConfirmationItem(array('RecipientUserID'=>$_EbayTradingTypeAddTransactionConfirmationItemRequestType->getRecipientUserID(),'VerifyEligibilityOnly'=>$_EbayTradingTypeAddTransactionConfirmationItemRequestType->getVerifyEligibilityOnly(),'RecipientPostalCode'=>$_EbayTradingTypeAddTransactionConfirmationItemRequestType->getRecipientPostalCode(),'RecipientRelationType'=>$_EbayTradingTypeAddTransactionConfirmationItemRequestType->getRecipientRelationType(),'NegotiatedPrice'=>$_EbayTradingTypeAddTransactionConfirmationItemRequestType->getNegotiatedPrice(),'ListingDuration'=>$_EbayTradingTypeAddTransactionConfirmationItemRequestType->getListingDuration(),'ItemID'=>$_EbayTradingTypeAddTransactionConfirmationItemRequestType->getItemID(),'Comments'=>$_EbayTradingTypeAddTransactionConfirmationItemRequestType->getComments())));
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
	 * @return EbayTradingTypeAddTransactionConfirmationItemResponseType
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