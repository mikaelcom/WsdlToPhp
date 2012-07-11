<?php
/**
 * Class file for EbayTradingServiceSet
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceSet
 * @date 04/07/2012
 */
class EbayTradingServiceSet extends EbayTradingWsdlClass
{
	/**
	 * Method to call SetMessagePreferences
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeSetMessagePreferencesRequestType::getASQPreferences()
	 * @param EbayTradingTypeSetMessagePreferencesRequestType SetMessagePreferencesRequestType
	 * @return EbayTradingTypeSetMessagePreferencesResponseType
	 */
	public function SetMessagePreferences(EbayTradingTypeSetMessagePreferencesRequestType $_EbayTradingTypeSetMessagePreferencesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetMessagePreferences(array('ASQPreferences'=>$_EbayTradingTypeSetMessagePreferencesRequestType->getASQPreferences())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetNotificationPreferences
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeSetNotificationPreferencesRequestType::getApplicationDeliveryPreferences()
	 * @uses EbayTradingTypeSetNotificationPreferencesRequestType::getUserDeliveryPreferenceArray()
	 * @uses EbayTradingTypeSetNotificationPreferencesRequestType::getUserData()
	 * @uses EbayTradingTypeSetNotificationPreferencesRequestType::getEventProperty()
	 * @uses EbayTradingTypeSetNotificationPreferencesRequestType::getDeliveryURLName()
	 * @param EbayTradingTypeSetNotificationPreferencesRequestType SetNotificationPreferencesRequestType
	 * @return EbayTradingTypeSetNotificationPreferencesResponseType
	 */
	public function SetNotificationPreferences(EbayTradingTypeSetNotificationPreferencesRequestType $_EbayTradingTypeSetNotificationPreferencesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetNotificationPreferences(array('ApplicationDeliveryPreferences'=>$_EbayTradingTypeSetNotificationPreferencesRequestType->getApplicationDeliveryPreferences(),'UserDeliveryPreferenceArray'=>$_EbayTradingTypeSetNotificationPreferencesRequestType->getUserDeliveryPreferenceArray(),'UserData'=>$_EbayTradingTypeSetNotificationPreferencesRequestType->getUserData(),'EventProperty'=>$_EbayTradingTypeSetNotificationPreferencesRequestType->getEventProperty(),'DeliveryURLName'=>$_EbayTradingTypeSetNotificationPreferencesRequestType->getDeliveryURLName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetPictureManagerDetails
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeSetPictureManagerDetailsRequestType::getPictureManagerDetails()
	 * @uses EbayTradingTypeSetPictureManagerDetailsRequestType::getAction()
	 * @param EbayTradingTypeSetPictureManagerDetailsRequestType SetPictureManagerDetailsRequestType
	 * @return EbayTradingTypeSetPictureManagerDetailsResponseType
	 */
	public function SetPictureManagerDetails(EbayTradingTypeSetPictureManagerDetailsRequestType $_EbayTradingTypeSetPictureManagerDetailsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetPictureManagerDetails(array('PictureManagerDetails'=>$_EbayTradingTypeSetPictureManagerDetailsRequestType->getPictureManagerDetails(),'Action'=>$_EbayTradingTypeSetPictureManagerDetailsRequestType->getAction())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetPromotionalSale
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeSetPromotionalSaleRequestType::getAction()
	 * @uses EbayTradingTypeSetPromotionalSaleRequestType::getPromotionalSaleDetails()
	 * @param EbayTradingTypeSetPromotionalSaleRequestType SetPromotionalSaleRequestType
	 * @return EbayTradingTypeSetPromotionalSaleResponseType
	 */
	public function SetPromotionalSale(EbayTradingTypeSetPromotionalSaleRequestType $_EbayTradingTypeSetPromotionalSaleRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetPromotionalSale(array('Action'=>$_EbayTradingTypeSetPromotionalSaleRequestType->getAction(),'PromotionalSaleDetails'=>$_EbayTradingTypeSetPromotionalSaleRequestType->getPromotionalSaleDetails())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetPromotionalSaleListings
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeSetPromotionalSaleListingsRequestType::getPromotionalSaleID()
	 * @uses EbayTradingTypeSetPromotionalSaleListingsRequestType::getAction()
	 * @uses EbayTradingTypeSetPromotionalSaleListingsRequestType::getPromotionalSaleItemIDArray()
	 * @uses EbayTradingTypeSetPromotionalSaleListingsRequestType::getStoreCategoryID()
	 * @uses EbayTradingTypeSetPromotionalSaleListingsRequestType::getCategoryID()
	 * @uses EbayTradingTypeSetPromotionalSaleListingsRequestType::getAllFixedPriceItems()
	 * @uses EbayTradingTypeSetPromotionalSaleListingsRequestType::getAllStoreInventoryItems()
	 * @uses EbayTradingTypeSetPromotionalSaleListingsRequestType::getAllAuctionItems()
	 * @param EbayTradingTypeSetPromotionalSaleListingsRequestType SetPromotionalSaleListingsRequestType
	 * @return EbayTradingTypeSetPromotionalSaleListingsResponseType
	 */
	public function SetPromotionalSaleListings(EbayTradingTypeSetPromotionalSaleListingsRequestType $_EbayTradingTypeSetPromotionalSaleListingsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetPromotionalSaleListings(array('PromotionalSaleID'=>$_EbayTradingTypeSetPromotionalSaleListingsRequestType->getPromotionalSaleID(),'Action'=>$_EbayTradingTypeSetPromotionalSaleListingsRequestType->getAction(),'PromotionalSaleItemIDArray'=>$_EbayTradingTypeSetPromotionalSaleListingsRequestType->getPromotionalSaleItemIDArray(),'StoreCategoryID'=>$_EbayTradingTypeSetPromotionalSaleListingsRequestType->getStoreCategoryID(),'CategoryID'=>$_EbayTradingTypeSetPromotionalSaleListingsRequestType->getCategoryID(),'AllFixedPriceItems'=>$_EbayTradingTypeSetPromotionalSaleListingsRequestType->getAllFixedPriceItems(),'AllStoreInventoryItems'=>$_EbayTradingTypeSetPromotionalSaleListingsRequestType->getAllStoreInventoryItems(),'AllAuctionItems'=>$_EbayTradingTypeSetPromotionalSaleListingsRequestType->getAllAuctionItems())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetSellingManagerFeedbackOptions
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeSetSellingManagerFeedbackOptionsRequestType::getAutomatedLeaveFeedbackEvent()
	 * @uses EbayTradingTypeSetSellingManagerFeedbackOptionsRequestType::getStoredComments()
	 * @param EbayTradingTypeSetSellingManagerFeedbackOptionsRequestType SetSellingManagerFeedbackOptionsRequestType
	 * @return EbayTradingTypeSetSellingManagerFeedbackOptionsResponseType
	 */
	public function SetSellingManagerFeedbackOptions(EbayTradingTypeSetSellingManagerFeedbackOptionsRequestType $_EbayTradingTypeSetSellingManagerFeedbackOptionsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetSellingManagerFeedbackOptions(array('AutomatedLeaveFeedbackEvent'=>$_EbayTradingTypeSetSellingManagerFeedbackOptionsRequestType->getAutomatedLeaveFeedbackEvent(),'StoredComments'=>$_EbayTradingTypeSetSellingManagerFeedbackOptionsRequestType->getStoredComments())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetSellingManagerItemAutomationRule
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeSetSellingManagerItemAutomationRuleRequestType::getItemID()
	 * @uses EbayTradingTypeSetSellingManagerItemAutomationRuleRequestType::getAutomatedRelistingRule()
	 * @uses EbayTradingTypeSetSellingManagerItemAutomationRuleRequestType::getAutomatedSecondChanceOfferRule()
	 * @param EbayTradingTypeSetSellingManagerItemAutomationRuleRequestType SetSellingManagerItemAutomationRuleRequestType
	 * @return EbayTradingTypeSetSellingManagerItemAutomationRuleResponseType
	 */
	public function SetSellingManagerItemAutomationRule(EbayTradingTypeSetSellingManagerItemAutomationRuleRequestType $_EbayTradingTypeSetSellingManagerItemAutomationRuleRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetSellingManagerItemAutomationRule(array('ItemID'=>$_EbayTradingTypeSetSellingManagerItemAutomationRuleRequestType->getItemID(),'AutomatedRelistingRule'=>$_EbayTradingTypeSetSellingManagerItemAutomationRuleRequestType->getAutomatedRelistingRule(),'AutomatedSecondChanceOfferRule'=>$_EbayTradingTypeSetSellingManagerItemAutomationRuleRequestType->getAutomatedSecondChanceOfferRule())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetSellingManagerTemplateAutomationRule
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeSetSellingManagerTemplateAutomationRuleRequestType::getSaleTemplateID()
	 * @uses EbayTradingTypeSetSellingManagerTemplateAutomationRuleRequestType::getAutomatedListingRule()
	 * @uses EbayTradingTypeSetSellingManagerTemplateAutomationRuleRequestType::getAutomatedRelistingRule()
	 * @uses EbayTradingTypeSetSellingManagerTemplateAutomationRuleRequestType::getAutomatedSecondChanceOfferRule()
	 * @param EbayTradingTypeSetSellingManagerTemplateAutomationRuleRequestType SetSellingManagerTemplateAutomationRuleRequestType
	 * @return EbayTradingTypeSetSellingManagerTemplateAutomationRuleResponseType
	 */
	public function SetSellingManagerTemplateAutomationRule(EbayTradingTypeSetSellingManagerTemplateAutomationRuleRequestType $_EbayTradingTypeSetSellingManagerTemplateAutomationRuleRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetSellingManagerTemplateAutomationRule(array('SaleTemplateID'=>$_EbayTradingTypeSetSellingManagerTemplateAutomationRuleRequestType->getSaleTemplateID(),'AutomatedListingRule'=>$_EbayTradingTypeSetSellingManagerTemplateAutomationRuleRequestType->getAutomatedListingRule(),'AutomatedRelistingRule'=>$_EbayTradingTypeSetSellingManagerTemplateAutomationRuleRequestType->getAutomatedRelistingRule(),'AutomatedSecondChanceOfferRule'=>$_EbayTradingTypeSetSellingManagerTemplateAutomationRuleRequestType->getAutomatedSecondChanceOfferRule())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetShippingDiscountProfiles
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeSetShippingDiscountProfilesRequestType::getCurrencyID()
	 * @uses EbayTradingTypeSetShippingDiscountProfilesRequestType::getCombinedDuration()
	 * @uses EbayTradingTypeSetShippingDiscountProfilesRequestType::getModifyActionCode()
	 * @uses EbayTradingTypeSetShippingDiscountProfilesRequestType::getFlatShippingDiscount()
	 * @uses EbayTradingTypeSetShippingDiscountProfilesRequestType::getCalculatedShippingDiscount()
	 * @uses EbayTradingTypeSetShippingDiscountProfilesRequestType::getCalculatedHandlingDiscount()
	 * @uses EbayTradingTypeSetShippingDiscountProfilesRequestType::getPromotionalShippingDiscountDetails()
	 * @uses EbayTradingTypeSetShippingDiscountProfilesRequestType::getShippingInsurance()
	 * @uses EbayTradingTypeSetShippingDiscountProfilesRequestType::getInternationalShippingInsurance()
	 * @param EbayTradingTypeSetShippingDiscountProfilesRequestType SetShippingDiscountProfilesRequestType
	 * @return EbayTradingTypeSetShippingDiscountProfilesResponseType
	 */
	public function SetShippingDiscountProfiles(EbayTradingTypeSetShippingDiscountProfilesRequestType $_EbayTradingTypeSetShippingDiscountProfilesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetShippingDiscountProfiles(array('CurrencyID'=>$_EbayTradingTypeSetShippingDiscountProfilesRequestType->getCurrencyID(),'CombinedDuration'=>$_EbayTradingTypeSetShippingDiscountProfilesRequestType->getCombinedDuration(),'ModifyActionCode'=>$_EbayTradingTypeSetShippingDiscountProfilesRequestType->getModifyActionCode(),'FlatShippingDiscount'=>$_EbayTradingTypeSetShippingDiscountProfilesRequestType->getFlatShippingDiscount(),'CalculatedShippingDiscount'=>$_EbayTradingTypeSetShippingDiscountProfilesRequestType->getCalculatedShippingDiscount(),'CalculatedHandlingDiscount'=>$_EbayTradingTypeSetShippingDiscountProfilesRequestType->getCalculatedHandlingDiscount(),'PromotionalShippingDiscountDetails'=>$_EbayTradingTypeSetShippingDiscountProfilesRequestType->getPromotionalShippingDiscountDetails(),'ShippingInsurance'=>$_EbayTradingTypeSetShippingDiscountProfilesRequestType->getShippingInsurance(),'InternationalShippingInsurance'=>$_EbayTradingTypeSetShippingDiscountProfilesRequestType->getInternationalShippingInsurance())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetStore
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeSetStoreRequestType::getStore()
	 * @param EbayTradingTypeSetStoreRequestType SetStoreRequestType
	 * @return EbayTradingTypeSetStoreResponseType
	 */
	public function SetStore(EbayTradingTypeSetStoreRequestType $_EbayTradingTypeSetStoreRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetStore(array('Store'=>$_EbayTradingTypeSetStoreRequestType->getStore())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetStoreCategories
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeSetStoreCategoriesRequestType::getAction()
	 * @uses EbayTradingTypeSetStoreCategoriesRequestType::getItemDestinationCategoryID()
	 * @uses EbayTradingTypeSetStoreCategoriesRequestType::getDestinationParentCategoryID()
	 * @uses EbayTradingTypeSetStoreCategoriesRequestType::getStoreCategories()
	 * @param EbayTradingTypeSetStoreCategoriesRequestType SetStoreCategoriesRequestType
	 * @return EbayTradingTypeSetStoreCategoriesResponseType
	 */
	public function SetStoreCategories(EbayTradingTypeSetStoreCategoriesRequestType $_EbayTradingTypeSetStoreCategoriesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetStoreCategories(array('Action'=>$_EbayTradingTypeSetStoreCategoriesRequestType->getAction(),'ItemDestinationCategoryID'=>$_EbayTradingTypeSetStoreCategoriesRequestType->getItemDestinationCategoryID(),'DestinationParentCategoryID'=>$_EbayTradingTypeSetStoreCategoriesRequestType->getDestinationParentCategoryID(),'StoreCategories'=>$_EbayTradingTypeSetStoreCategoriesRequestType->getStoreCategories())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetStoreCustomPage
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeSetStoreCustomPageRequestType::getCustomPage()
	 * @param EbayTradingTypeSetStoreCustomPageRequestType SetStoreCustomPageRequestType
	 * @return EbayTradingTypeSetStoreCustomPageResponseType
	 */
	public function SetStoreCustomPage(EbayTradingTypeSetStoreCustomPageRequestType $_EbayTradingTypeSetStoreCustomPageRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetStoreCustomPage(array('CustomPage'=>$_EbayTradingTypeSetStoreCustomPageRequestType->getCustomPage())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetStorePreferences
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeSetStorePreferencesRequestType::getStorePreferences()
	 * @param EbayTradingTypeSetStorePreferencesRequestType SetStorePreferencesRequestType
	 * @return EbayTradingTypeSetStorePreferencesResponseType
	 */
	public function SetStorePreferences(EbayTradingTypeSetStorePreferencesRequestType $_EbayTradingTypeSetStorePreferencesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetStorePreferences(array('StorePreferences'=>$_EbayTradingTypeSetStorePreferencesRequestType->getStorePreferences())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetTaxTable
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeSetTaxTableRequestType::getTaxTable()
	 * @param EbayTradingTypeSetTaxTableRequestType SetTaxTableRequestType
	 * @return EbayTradingTypeSetTaxTableResponseType
	 */
	public function SetTaxTable(EbayTradingTypeSetTaxTableRequestType $_EbayTradingTypeSetTaxTableRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetTaxTable(array('TaxTable'=>$_EbayTradingTypeSetTaxTableRequestType->getTaxTable())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetUserNotes
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeSetUserNotesRequestType::getItemID()
	 * @uses EbayTradingTypeSetUserNotesRequestType::getAction()
	 * @uses EbayTradingTypeSetUserNotesRequestType::getNoteText()
	 * @uses EbayTradingTypeSetUserNotesRequestType::getTransactionID()
	 * @uses EbayTradingTypeSetUserNotesRequestType::getVariationSpecifics()
	 * @uses EbayTradingTypeSetUserNotesRequestType::getSKU()
	 * @uses EbayTradingTypeSetUserNotesRequestType::getOrderLineItemID()
	 * @param EbayTradingTypeSetUserNotesRequestType SetUserNotesRequestType
	 * @return EbayTradingTypeSetUserNotesResponseType
	 */
	public function SetUserNotes(EbayTradingTypeSetUserNotesRequestType $_EbayTradingTypeSetUserNotesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetUserNotes(array('ItemID'=>$_EbayTradingTypeSetUserNotesRequestType->getItemID(),'Action'=>$_EbayTradingTypeSetUserNotesRequestType->getAction(),'NoteText'=>$_EbayTradingTypeSetUserNotesRequestType->getNoteText(),'TransactionID'=>$_EbayTradingTypeSetUserNotesRequestType->getTransactionID(),'VariationSpecifics'=>$_EbayTradingTypeSetUserNotesRequestType->getVariationSpecifics(),'SKU'=>$_EbayTradingTypeSetUserNotesRequestType->getSKU(),'OrderLineItemID'=>$_EbayTradingTypeSetUserNotesRequestType->getOrderLineItemID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetUserPreferences
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeSetUserPreferencesRequestType::getBidderNoticePreferences()
	 * @uses EbayTradingTypeSetUserPreferencesRequestType::getCombinedPaymentPreferences()
	 * @uses EbayTradingTypeSetUserPreferencesRequestType::getCrossPromotionPreferences()
	 * @uses EbayTradingTypeSetUserPreferencesRequestType::getSellerPaymentPreferences()
	 * @uses EbayTradingTypeSetUserPreferencesRequestType::getSellerFavoriteItemPreferences()
	 * @uses EbayTradingTypeSetUserPreferencesRequestType::getEndOfAuctionEmailPreferences()
	 * @uses EbayTradingTypeSetUserPreferencesRequestType::getEmailShipmentTrackingNumberPreference()
	 * @uses EbayTradingTypeSetUserPreferencesRequestType::getRequiredShipPhoneNumberPreference()
	 * @uses EbayTradingTypeSetUserPreferencesRequestType::getUnpaidItemAssistancePreferences()
	 * @uses EbayTradingTypeSetUserPreferencesRequestType::getPurchaseReminderEmailPreferences()
	 * @uses EbayTradingTypeSetUserPreferencesRequestType::getSellerThirdPartyCheckoutDisabled()
	 * @param EbayTradingTypeSetUserPreferencesRequestType SetUserPreferencesRequestType
	 * @return EbayTradingTypeSetUserPreferencesResponseType
	 */
	public function SetUserPreferences(EbayTradingTypeSetUserPreferencesRequestType $_EbayTradingTypeSetUserPreferencesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetUserPreferences(array('BidderNoticePreferences'=>$_EbayTradingTypeSetUserPreferencesRequestType->getBidderNoticePreferences(),'CombinedPaymentPreferences'=>$_EbayTradingTypeSetUserPreferencesRequestType->getCombinedPaymentPreferences(),'CrossPromotionPreferences'=>$_EbayTradingTypeSetUserPreferencesRequestType->getCrossPromotionPreferences(),'SellerPaymentPreferences'=>$_EbayTradingTypeSetUserPreferencesRequestType->getSellerPaymentPreferences(),'SellerFavoriteItemPreferences'=>$_EbayTradingTypeSetUserPreferencesRequestType->getSellerFavoriteItemPreferences(),'EndOfAuctionEmailPreferences'=>$_EbayTradingTypeSetUserPreferencesRequestType->getEndOfAuctionEmailPreferences(),'EmailShipmentTrackingNumberPreference'=>$_EbayTradingTypeSetUserPreferencesRequestType->getEmailShipmentTrackingNumberPreference(),'RequiredShipPhoneNumberPreference'=>$_EbayTradingTypeSetUserPreferencesRequestType->getRequiredShipPhoneNumberPreference(),'UnpaidItemAssistancePreferences'=>$_EbayTradingTypeSetUserPreferencesRequestType->getUnpaidItemAssistancePreferences(),'PurchaseReminderEmailPreferences'=>$_EbayTradingTypeSetUserPreferencesRequestType->getPurchaseReminderEmailPreferences(),'SellerThirdPartyCheckoutDisabled'=>$_EbayTradingTypeSetUserPreferencesRequestType->getSellerThirdPartyCheckoutDisabled())));
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
	 * @return EbayTradingTypeSetUserPreferencesResponseType
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