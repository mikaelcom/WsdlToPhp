<?php
/**
 * Class file for EbayTradingServiceGet
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceGet
 * @date 04/07/2012
 */
class EbayTradingServiceGet extends EbayTradingWsdlClass
{
	/**
	 * Method to call GetAccount
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetAccountRequestType::getAccountHistorySelection()
	 * @uses EbayTradingTypeGetAccountRequestType::getInvoiceDate()
	 * @uses EbayTradingTypeGetAccountRequestType::getBeginDate()
	 * @uses EbayTradingTypeGetAccountRequestType::getEndDate()
	 * @uses EbayTradingTypeGetAccountRequestType::getPagination()
	 * @uses EbayTradingTypeGetAccountRequestType::getExcludeBalance()
	 * @uses EbayTradingTypeGetAccountRequestType::getExcludeSummary()
	 * @uses EbayTradingTypeGetAccountRequestType::getIncludeConversionRate()
	 * @uses EbayTradingTypeGetAccountRequestType::getAccountEntrySortType()
	 * @uses EbayTradingTypeGetAccountRequestType::getCurrency()
	 * @uses EbayTradingTypeGetAccountRequestType::getItemID()
	 * @param EbayTradingTypeGetAccountRequestType GetAccountRequestType
	 * @return EbayTradingTypeGetAccountResponseType
	 */
	public function GetAccount(EbayTradingTypeGetAccountRequestType $_EbayTradingTypeGetAccountRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAccount(array('AccountHistorySelection'=>$_EbayTradingTypeGetAccountRequestType->getAccountHistorySelection(),'InvoiceDate'=>$_EbayTradingTypeGetAccountRequestType->getInvoiceDate(),'BeginDate'=>$_EbayTradingTypeGetAccountRequestType->getBeginDate(),'EndDate'=>$_EbayTradingTypeGetAccountRequestType->getEndDate(),'Pagination'=>$_EbayTradingTypeGetAccountRequestType->getPagination(),'ExcludeBalance'=>$_EbayTradingTypeGetAccountRequestType->getExcludeBalance(),'ExcludeSummary'=>$_EbayTradingTypeGetAccountRequestType->getExcludeSummary(),'IncludeConversionRate'=>$_EbayTradingTypeGetAccountRequestType->getIncludeConversionRate(),'AccountEntrySortType'=>$_EbayTradingTypeGetAccountRequestType->getAccountEntrySortType(),'Currency'=>$_EbayTradingTypeGetAccountRequestType->getCurrency(),'ItemID'=>$_EbayTradingTypeGetAccountRequestType->getItemID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAdFormatLeads
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetAdFormatLeadsRequestType::getItemID()
	 * @uses EbayTradingTypeGetAdFormatLeadsRequestType::getStatus()
	 * @uses EbayTradingTypeGetAdFormatLeadsRequestType::getIncludeMemberMessages()
	 * @uses EbayTradingTypeGetAdFormatLeadsRequestType::getStartCreationTime()
	 * @uses EbayTradingTypeGetAdFormatLeadsRequestType::getEndCreationTime()
	 * @param EbayTradingTypeGetAdFormatLeadsRequestType GetAdFormatLeadsRequestType
	 * @return EbayTradingTypeGetAdFormatLeadsResponseType
	 */
	public function GetAdFormatLeads(EbayTradingTypeGetAdFormatLeadsRequestType $_EbayTradingTypeGetAdFormatLeadsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAdFormatLeads(array('ItemID'=>$_EbayTradingTypeGetAdFormatLeadsRequestType->getItemID(),'Status'=>$_EbayTradingTypeGetAdFormatLeadsRequestType->getStatus(),'IncludeMemberMessages'=>$_EbayTradingTypeGetAdFormatLeadsRequestType->getIncludeMemberMessages(),'StartCreationTime'=>$_EbayTradingTypeGetAdFormatLeadsRequestType->getStartCreationTime(),'EndCreationTime'=>$_EbayTradingTypeGetAdFormatLeadsRequestType->getEndCreationTime())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllBidders
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetAllBiddersRequestType::getItemID()
	 * @uses EbayTradingTypeGetAllBiddersRequestType::getCallMode()
	 * @uses EbayTradingTypeGetAllBiddersRequestType::getIncludeBiddingSummary()
	 * @param EbayTradingTypeGetAllBiddersRequestType GetAllBiddersRequestType
	 * @return EbayTradingTypeGetAllBiddersResponseType
	 */
	public function GetAllBidders(EbayTradingTypeGetAllBiddersRequestType $_EbayTradingTypeGetAllBiddersRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllBidders(array('ItemID'=>$_EbayTradingTypeGetAllBiddersRequestType->getItemID(),'CallMode'=>$_EbayTradingTypeGetAllBiddersRequestType->getCallMode(),'IncludeBiddingSummary'=>$_EbayTradingTypeGetAllBiddersRequestType->getIncludeBiddingSummary())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetApiAccessRules
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @param EbayTradingTypeGetApiAccessRulesRequestType GetApiAccessRulesRequestType
	 * @return EbayTradingTypeGetApiAccessRulesResponseType
	 */
	public function GetApiAccessRules(EbayTradingTypeGetApiAccessRulesRequestType $_EbayTradingTypeGetApiAccessRulesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetApiAccessRules(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAttributesCS
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetAttributesCSRequestType::getAttributeSystemVersion()
	 * @uses EbayTradingTypeGetAttributesCSRequestType::getAttributeSetID()
	 * @uses EbayTradingTypeGetAttributesCSRequestType::getIncludeCategoryMappingDetails()
	 * @param EbayTradingTypeGetAttributesCSRequestType GetAttributesCSRequestType
	 * @return EbayTradingTypeGetAttributesCSResponseType
	 */
	public function GetAttributesCS(EbayTradingTypeGetAttributesCSRequestType $_EbayTradingTypeGetAttributesCSRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAttributesCS(array('AttributeSystemVersion'=>$_EbayTradingTypeGetAttributesCSRequestType->getAttributeSystemVersion(),'AttributeSetID'=>$_EbayTradingTypeGetAttributesCSRequestType->getAttributeSetID(),'IncludeCategoryMappingDetails'=>$_EbayTradingTypeGetAttributesCSRequestType->getIncludeCategoryMappingDetails())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAttributesXSL
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetAttributesXSLRequestType::getFileName()
	 * @uses EbayTradingTypeGetAttributesXSLRequestType::getFileVersion()
	 * @param EbayTradingTypeGetAttributesXSLRequestType GetAttributesXSLRequestType
	 * @return EbayTradingTypeGetAttributesXSLResponseType
	 */
	public function GetAttributesXSL(EbayTradingTypeGetAttributesXSLRequestType $_EbayTradingTypeGetAttributesXSLRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAttributesXSL(array('FileName'=>$_EbayTradingTypeGetAttributesXSLRequestType->getFileName(),'FileVersion'=>$_EbayTradingTypeGetAttributesXSLRequestType->getFileVersion())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBestOffers
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetBestOffersRequestType::getItemID()
	 * @uses EbayTradingTypeGetBestOffersRequestType::getBestOfferID()
	 * @uses EbayTradingTypeGetBestOffersRequestType::getBestOfferStatus()
	 * @uses EbayTradingTypeGetBestOffersRequestType::getPagination()
	 * @param EbayTradingTypeGetBestOffersRequestType GetBestOffersRequestType
	 * @return EbayTradingTypeGetBestOffersResponseType
	 */
	public function GetBestOffers(EbayTradingTypeGetBestOffersRequestType $_EbayTradingTypeGetBestOffersRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBestOffers(array('ItemID'=>$_EbayTradingTypeGetBestOffersRequestType->getItemID(),'BestOfferID'=>$_EbayTradingTypeGetBestOffersRequestType->getBestOfferID(),'BestOfferStatus'=>$_EbayTradingTypeGetBestOffersRequestType->getBestOfferStatus(),'Pagination'=>$_EbayTradingTypeGetBestOffersRequestType->getPagination())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBidderList
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetBidderListRequestType::getActiveItemsOnly()
	 * @uses EbayTradingTypeGetBidderListRequestType::getEndTimeFrom()
	 * @uses EbayTradingTypeGetBidderListRequestType::getEndTimeTo()
	 * @uses EbayTradingTypeGetBidderListRequestType::getUserID()
	 * @uses EbayTradingTypeGetBidderListRequestType::getGranularityLevel()
	 * @param EbayTradingTypeGetBidderListRequestType GetBidderListRequestType
	 * @return EbayTradingTypeGetBidderListResponseType
	 */
	public function GetBidderList(EbayTradingTypeGetBidderListRequestType $_EbayTradingTypeGetBidderListRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBidderList(array('ActiveItemsOnly'=>$_EbayTradingTypeGetBidderListRequestType->getActiveItemsOnly(),'EndTimeFrom'=>$_EbayTradingTypeGetBidderListRequestType->getEndTimeFrom(),'EndTimeTo'=>$_EbayTradingTypeGetBidderListRequestType->getEndTimeTo(),'UserID'=>$_EbayTradingTypeGetBidderListRequestType->getUserID(),'GranularityLevel'=>$_EbayTradingTypeGetBidderListRequestType->getGranularityLevel())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCategories
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetCategoriesRequestType::getCategorySiteID()
	 * @uses EbayTradingTypeGetCategoriesRequestType::getCategoryParent()
	 * @uses EbayTradingTypeGetCategoriesRequestType::getLevelLimit()
	 * @uses EbayTradingTypeGetCategoriesRequestType::getViewAllNodes()
	 * @param EbayTradingTypeGetCategoriesRequestType GetCategoriesRequestType
	 * @return EbayTradingTypeGetCategoriesResponseType
	 */
	public function GetCategories(EbayTradingTypeGetCategoriesRequestType $_EbayTradingTypeGetCategoriesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCategories(array('CategorySiteID'=>$_EbayTradingTypeGetCategoriesRequestType->getCategorySiteID(),'CategoryParent'=>$_EbayTradingTypeGetCategoriesRequestType->getCategoryParent(),'LevelLimit'=>$_EbayTradingTypeGetCategoriesRequestType->getLevelLimit(),'ViewAllNodes'=>$_EbayTradingTypeGetCategoriesRequestType->getViewAllNodes())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCategory2CS
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetCategory2CSRequestType::getCategoryID()
	 * @uses EbayTradingTypeGetCategory2CSRequestType::getAttributeSystemVersion()
	 * @param EbayTradingTypeGetCategory2CSRequestType GetCategory2CSRequestType
	 * @return EbayTradingTypeGetCategory2CSResponseType
	 */
	public function GetCategory2CS(EbayTradingTypeGetCategory2CSRequestType $_EbayTradingTypeGetCategory2CSRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCategory2CS(array('CategoryID'=>$_EbayTradingTypeGetCategory2CSRequestType->getCategoryID(),'AttributeSystemVersion'=>$_EbayTradingTypeGetCategory2CSRequestType->getAttributeSystemVersion())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCategoryFeatures
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetCategoryFeaturesRequestType::getCategoryID()
	 * @uses EbayTradingTypeGetCategoryFeaturesRequestType::getLevelLimit()
	 * @uses EbayTradingTypeGetCategoryFeaturesRequestType::getViewAllNodes()
	 * @uses EbayTradingTypeGetCategoryFeaturesRequestType::getFeatureID()
	 * @uses EbayTradingTypeGetCategoryFeaturesRequestType::getAllFeaturesForCategory()
	 * @param EbayTradingTypeGetCategoryFeaturesRequestType GetCategoryFeaturesRequestType
	 * @return EbayTradingTypeGetCategoryFeaturesResponseType
	 */
	public function GetCategoryFeatures(EbayTradingTypeGetCategoryFeaturesRequestType $_EbayTradingTypeGetCategoryFeaturesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCategoryFeatures(array('CategoryID'=>$_EbayTradingTypeGetCategoryFeaturesRequestType->getCategoryID(),'LevelLimit'=>$_EbayTradingTypeGetCategoryFeaturesRequestType->getLevelLimit(),'ViewAllNodes'=>$_EbayTradingTypeGetCategoryFeaturesRequestType->getViewAllNodes(),'FeatureID'=>$_EbayTradingTypeGetCategoryFeaturesRequestType->getFeatureID(),'AllFeaturesForCategory'=>$_EbayTradingTypeGetCategoryFeaturesRequestType->getAllFeaturesForCategory())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCategoryMappings
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetCategoryMappingsRequestType::getCategoryVersion()
	 * @param EbayTradingTypeGetCategoryMappingsRequestType GetCategoryMappingsRequestType
	 * @return EbayTradingTypeGetCategoryMappingsResponseType
	 */
	public function GetCategoryMappings(EbayTradingTypeGetCategoryMappingsRequestType $_EbayTradingTypeGetCategoryMappingsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCategoryMappings(array('CategoryVersion'=>$_EbayTradingTypeGetCategoryMappingsRequestType->getCategoryVersion())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCategorySpecifics
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetCategorySpecificsRequestType::getCategoryID()
	 * @uses EbayTradingTypeGetCategorySpecificsRequestType::getLastUpdateTime()
	 * @uses EbayTradingTypeGetCategorySpecificsRequestType::getMaxNames()
	 * @uses EbayTradingTypeGetCategorySpecificsRequestType::getMaxValuesPerName()
	 * @uses EbayTradingTypeGetCategorySpecificsRequestType::getName()
	 * @uses EbayTradingTypeGetCategorySpecificsRequestType::getCategorySpecific()
	 * @uses EbayTradingTypeGetCategorySpecificsRequestType::getExcludeRelationships()
	 * @uses EbayTradingTypeGetCategorySpecificsRequestType::getIncludeConfidence()
	 * @uses EbayTradingTypeGetCategorySpecificsRequestType::getCategorySpecificsFileInfo()
	 * @param EbayTradingTypeGetCategorySpecificsRequestType GetCategorySpecificsRequestType
	 * @return EbayTradingTypeGetCategorySpecificsResponseType
	 */
	public function GetCategorySpecifics(EbayTradingTypeGetCategorySpecificsRequestType $_EbayTradingTypeGetCategorySpecificsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCategorySpecifics(array('CategoryID'=>$_EbayTradingTypeGetCategorySpecificsRequestType->getCategoryID(),'LastUpdateTime'=>$_EbayTradingTypeGetCategorySpecificsRequestType->getLastUpdateTime(),'MaxNames'=>$_EbayTradingTypeGetCategorySpecificsRequestType->getMaxNames(),'MaxValuesPerName'=>$_EbayTradingTypeGetCategorySpecificsRequestType->getMaxValuesPerName(),'Name'=>$_EbayTradingTypeGetCategorySpecificsRequestType->getName(),'CategorySpecific'=>$_EbayTradingTypeGetCategorySpecificsRequestType->getCategorySpecific(),'ExcludeRelationships'=>$_EbayTradingTypeGetCategorySpecificsRequestType->getExcludeRelationships(),'IncludeConfidence'=>$_EbayTradingTypeGetCategorySpecificsRequestType->getIncludeConfidence(),'CategorySpecificsFileInfo'=>$_EbayTradingTypeGetCategorySpecificsRequestType->getCategorySpecificsFileInfo())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetChallengeToken
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @param EbayTradingTypeGetChallengeTokenRequestType GetChallengeTokenRequestType
	 * @return EbayTradingTypeGetChallengeTokenResponseType
	 */
	public function GetChallengeToken(EbayTradingTypeGetChallengeTokenRequestType $_EbayTradingTypeGetChallengeTokenRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetChallengeToken(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCharities
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetCharitiesRequestType::getCharityID()
	 * @uses EbayTradingTypeGetCharitiesRequestType::getCharityName()
	 * @uses EbayTradingTypeGetCharitiesRequestType::getQuery()
	 * @uses EbayTradingTypeGetCharitiesRequestType::getCharityRegion()
	 * @uses EbayTradingTypeGetCharitiesRequestType::getCharityDomain()
	 * @uses EbayTradingTypeGetCharitiesRequestType::getIncludeDescription()
	 * @uses EbayTradingTypeGetCharitiesRequestType::getMatchType()
	 * @uses EbayTradingTypeGetCharitiesRequestType::getFeatured()
	 * @uses EbayTradingTypeGetCharitiesRequestType::getCampaignID()
	 * @param EbayTradingTypeGetCharitiesRequestType GetCharitiesRequestType
	 * @return EbayTradingTypeGetCharitiesResponseType
	 */
	public function GetCharities(EbayTradingTypeGetCharitiesRequestType $_EbayTradingTypeGetCharitiesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCharities(array('CharityID'=>$_EbayTradingTypeGetCharitiesRequestType->getCharityID(),'CharityName'=>$_EbayTradingTypeGetCharitiesRequestType->getCharityName(),'Query'=>$_EbayTradingTypeGetCharitiesRequestType->getQuery(),'CharityRegion'=>$_EbayTradingTypeGetCharitiesRequestType->getCharityRegion(),'CharityDomain'=>$_EbayTradingTypeGetCharitiesRequestType->getCharityDomain(),'IncludeDescription'=>$_EbayTradingTypeGetCharitiesRequestType->getIncludeDescription(),'MatchType'=>$_EbayTradingTypeGetCharitiesRequestType->getMatchType(),'Featured'=>$_EbayTradingTypeGetCharitiesRequestType->getFeatured(),'CampaignID'=>$_EbayTradingTypeGetCharitiesRequestType->getCampaignID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetClientAlertsAuthToken
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @param EbayTradingTypeGetClientAlertsAuthTokenRequestType GetClientAlertsAuthTokenRequestType
	 * @return EbayTradingTypeGetClientAlertsAuthTokenResponseType
	 */
	public function GetClientAlertsAuthToken(EbayTradingTypeGetClientAlertsAuthTokenRequestType $_EbayTradingTypeGetClientAlertsAuthTokenRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetClientAlertsAuthToken(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetContextualKeywords
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetContextualKeywordsRequestType::getURL()
	 * @uses EbayTradingTypeGetContextualKeywordsRequestType::getEncoding()
	 * @uses EbayTradingTypeGetContextualKeywordsRequestType::getCategoryID()
	 * @param EbayTradingTypeGetContextualKeywordsRequestType GetContextualKeywordsRequestType
	 * @return EbayTradingTypeGetContextualKeywordsResponseType
	 */
	public function GetContextualKeywords(EbayTradingTypeGetContextualKeywordsRequestType $_EbayTradingTypeGetContextualKeywordsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetContextualKeywords(array('URL'=>$_EbayTradingTypeGetContextualKeywordsRequestType->getURL(),'Encoding'=>$_EbayTradingTypeGetContextualKeywordsRequestType->getEncoding(),'CategoryID'=>$_EbayTradingTypeGetContextualKeywordsRequestType->getCategoryID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCrossPromotions
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetCrossPromotionsRequestType::getItemID()
	 * @uses EbayTradingTypeGetCrossPromotionsRequestType::getPromotionMethod()
	 * @uses EbayTradingTypeGetCrossPromotionsRequestType::getPromotionViewMode()
	 * @param EbayTradingTypeGetCrossPromotionsRequestType GetCrossPromotionsRequestType
	 * @return EbayTradingTypeGetCrossPromotionsResponseType
	 */
	public function GetCrossPromotions(EbayTradingTypeGetCrossPromotionsRequestType $_EbayTradingTypeGetCrossPromotionsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCrossPromotions(array('ItemID'=>$_EbayTradingTypeGetCrossPromotionsRequestType->getItemID(),'PromotionMethod'=>$_EbayTradingTypeGetCrossPromotionsRequestType->getPromotionMethod(),'PromotionViewMode'=>$_EbayTradingTypeGetCrossPromotionsRequestType->getPromotionViewMode())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDescriptionTemplates
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetDescriptionTemplatesRequestType::getCategoryID()
	 * @uses EbayTradingTypeGetDescriptionTemplatesRequestType::getLastModifiedTime()
	 * @uses EbayTradingTypeGetDescriptionTemplatesRequestType::getMotorVehicles()
	 * @param EbayTradingTypeGetDescriptionTemplatesRequestType GetDescriptionTemplatesRequestType
	 * @return EbayTradingTypeGetDescriptionTemplatesResponseType
	 */
	public function GetDescriptionTemplates(EbayTradingTypeGetDescriptionTemplatesRequestType $_EbayTradingTypeGetDescriptionTemplatesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDescriptionTemplates(array('CategoryID'=>$_EbayTradingTypeGetDescriptionTemplatesRequestType->getCategoryID(),'LastModifiedTime'=>$_EbayTradingTypeGetDescriptionTemplatesRequestType->getLastModifiedTime(),'MotorVehicles'=>$_EbayTradingTypeGetDescriptionTemplatesRequestType->getMotorVehicles())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDispute
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetDisputeRequestType::getDisputeID()
	 * @param EbayTradingTypeGetDisputeRequestType GetDisputeRequestType
	 * @return EbayTradingTypeGetDisputeResponseType
	 */
	public function GetDispute(EbayTradingTypeGetDisputeRequestType $_EbayTradingTypeGetDisputeRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDispute(array('DisputeID'=>$_EbayTradingTypeGetDisputeRequestType->getDisputeID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFeedback
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetFeedbackRequestType::getUserID()
	 * @uses EbayTradingTypeGetFeedbackRequestType::getFeedbackID()
	 * @uses EbayTradingTypeGetFeedbackRequestType::getItemID()
	 * @uses EbayTradingTypeGetFeedbackRequestType::getTransactionID()
	 * @uses EbayTradingTypeGetFeedbackRequestType::getCommentType()
	 * @uses EbayTradingTypeGetFeedbackRequestType::getFeedbackType()
	 * @uses EbayTradingTypeGetFeedbackRequestType::getPagination()
	 * @uses EbayTradingTypeGetFeedbackRequestType::getOrderLineItemID()
	 * @param EbayTradingTypeGetFeedbackRequestType GetFeedbackRequestType
	 * @return EbayTradingTypeGetFeedbackResponseType
	 */
	public function GetFeedback(EbayTradingTypeGetFeedbackRequestType $_EbayTradingTypeGetFeedbackRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFeedback(array('UserID'=>$_EbayTradingTypeGetFeedbackRequestType->getUserID(),'FeedbackID'=>$_EbayTradingTypeGetFeedbackRequestType->getFeedbackID(),'ItemID'=>$_EbayTradingTypeGetFeedbackRequestType->getItemID(),'TransactionID'=>$_EbayTradingTypeGetFeedbackRequestType->getTransactionID(),'CommentType'=>$_EbayTradingTypeGetFeedbackRequestType->getCommentType(),'FeedbackType'=>$_EbayTradingTypeGetFeedbackRequestType->getFeedbackType(),'Pagination'=>$_EbayTradingTypeGetFeedbackRequestType->getPagination(),'OrderLineItemID'=>$_EbayTradingTypeGetFeedbackRequestType->getOrderLineItemID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHighBidders
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetHighBiddersRequestType::getItemID()
	 * @param EbayTradingTypeGetHighBiddersRequestType GetHighBiddersRequestType
	 * @return EbayTradingTypeGetHighBiddersResponseType
	 */
	public function GetHighBidders(EbayTradingTypeGetHighBiddersRequestType $_EbayTradingTypeGetHighBiddersRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHighBidders(array('ItemID'=>$_EbayTradingTypeGetHighBiddersRequestType->getItemID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetItem
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetItemRequestType::getItemID()
	 * @uses EbayTradingTypeGetItemRequestType::getIncludeWatchCount()
	 * @uses EbayTradingTypeGetItemRequestType::getIncludeCrossPromotion()
	 * @uses EbayTradingTypeGetItemRequestType::getIncludeItemSpecifics()
	 * @uses EbayTradingTypeGetItemRequestType::getIncludeTaxTable()
	 * @uses EbayTradingTypeGetItemRequestType::getSKU()
	 * @uses EbayTradingTypeGetItemRequestType::getVariationSKU()
	 * @uses EbayTradingTypeGetItemRequestType::getVariationSpecifics()
	 * @uses EbayTradingTypeGetItemRequestType::getTransactionID()
	 * @uses EbayTradingTypeGetItemRequestType::getIncludeItemCompatibilityList()
	 * @param EbayTradingTypeGetItemRequestType GetItemRequestType
	 * @return EbayTradingTypeGetItemResponseType
	 */
	public function GetItem(EbayTradingTypeGetItemRequestType $_EbayTradingTypeGetItemRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetItem(array('ItemID'=>$_EbayTradingTypeGetItemRequestType->getItemID(),'IncludeWatchCount'=>$_EbayTradingTypeGetItemRequestType->getIncludeWatchCount(),'IncludeCrossPromotion'=>$_EbayTradingTypeGetItemRequestType->getIncludeCrossPromotion(),'IncludeItemSpecifics'=>$_EbayTradingTypeGetItemRequestType->getIncludeItemSpecifics(),'IncludeTaxTable'=>$_EbayTradingTypeGetItemRequestType->getIncludeTaxTable(),'SKU'=>$_EbayTradingTypeGetItemRequestType->getSKU(),'VariationSKU'=>$_EbayTradingTypeGetItemRequestType->getVariationSKU(),'VariationSpecifics'=>$_EbayTradingTypeGetItemRequestType->getVariationSpecifics(),'TransactionID'=>$_EbayTradingTypeGetItemRequestType->getTransactionID(),'IncludeItemCompatibilityList'=>$_EbayTradingTypeGetItemRequestType->getIncludeItemCompatibilityList())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetItemRecommendations
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetItemRecommendationsRequestType::getGetRecommendationsRequestContainer()
	 * @param EbayTradingTypeGetItemRecommendationsRequestType GetItemRecommendationsRequestType
	 * @return EbayTradingTypeGetItemRecommendationsResponseType
	 */
	public function GetItemRecommendations(EbayTradingTypeGetItemRecommendationsRequestType $_EbayTradingTypeGetItemRecommendationsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetItemRecommendations(array('GetRecommendationsRequestContainer'=>$_EbayTradingTypeGetItemRecommendationsRequestType->getGetRecommendationsRequestContainer())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetItemShipping
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetItemShippingRequestType::getItemID()
	 * @uses EbayTradingTypeGetItemShippingRequestType::getQuantitySold()
	 * @uses EbayTradingTypeGetItemShippingRequestType::getDestinationPostalCode()
	 * @uses EbayTradingTypeGetItemShippingRequestType::getDestinationCountryCode()
	 * @param EbayTradingTypeGetItemShippingRequestType GetItemShippingRequestType
	 * @return EbayTradingTypeGetItemShippingResponseType
	 */
	public function GetItemShipping(EbayTradingTypeGetItemShippingRequestType $_EbayTradingTypeGetItemShippingRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetItemShipping(array('ItemID'=>$_EbayTradingTypeGetItemShippingRequestType->getItemID(),'QuantitySold'=>$_EbayTradingTypeGetItemShippingRequestType->getQuantitySold(),'DestinationPostalCode'=>$_EbayTradingTypeGetItemShippingRequestType->getDestinationPostalCode(),'DestinationCountryCode'=>$_EbayTradingTypeGetItemShippingRequestType->getDestinationCountryCode())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetItemTransactions
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetItemTransactionsRequestType::getItemID()
	 * @uses EbayTradingTypeGetItemTransactionsRequestType::getModTimeFrom()
	 * @uses EbayTradingTypeGetItemTransactionsRequestType::getModTimeTo()
	 * @uses EbayTradingTypeGetItemTransactionsRequestType::getTransactionID()
	 * @uses EbayTradingTypeGetItemTransactionsRequestType::getPagination()
	 * @uses EbayTradingTypeGetItemTransactionsRequestType::getIncludeFinalValueFee()
	 * @uses EbayTradingTypeGetItemTransactionsRequestType::getIncludeContainingOrder()
	 * @uses EbayTradingTypeGetItemTransactionsRequestType::getPlatform()
	 * @uses EbayTradingTypeGetItemTransactionsRequestType::getNumberOfDays()
	 * @uses EbayTradingTypeGetItemTransactionsRequestType::getIncludeVariations()
	 * @uses EbayTradingTypeGetItemTransactionsRequestType::getOrderLineItemID()
	 * @param EbayTradingTypeGetItemTransactionsRequestType GetItemTransactionsRequestType
	 * @return EbayTradingTypeGetItemTransactionsResponseType
	 */
	public function GetItemTransactions(EbayTradingTypeGetItemTransactionsRequestType $_EbayTradingTypeGetItemTransactionsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetItemTransactions(array('ItemID'=>$_EbayTradingTypeGetItemTransactionsRequestType->getItemID(),'ModTimeFrom'=>$_EbayTradingTypeGetItemTransactionsRequestType->getModTimeFrom(),'ModTimeTo'=>$_EbayTradingTypeGetItemTransactionsRequestType->getModTimeTo(),'TransactionID'=>$_EbayTradingTypeGetItemTransactionsRequestType->getTransactionID(),'Pagination'=>$_EbayTradingTypeGetItemTransactionsRequestType->getPagination(),'IncludeFinalValueFee'=>$_EbayTradingTypeGetItemTransactionsRequestType->getIncludeFinalValueFee(),'IncludeContainingOrder'=>$_EbayTradingTypeGetItemTransactionsRequestType->getIncludeContainingOrder(),'Platform'=>$_EbayTradingTypeGetItemTransactionsRequestType->getPlatform(),'NumberOfDays'=>$_EbayTradingTypeGetItemTransactionsRequestType->getNumberOfDays(),'IncludeVariations'=>$_EbayTradingTypeGetItemTransactionsRequestType->getIncludeVariations(),'OrderLineItemID'=>$_EbayTradingTypeGetItemTransactionsRequestType->getOrderLineItemID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetItemsAwaitingFeedback
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetItemsAwaitingFeedbackRequestType::getSort()
	 * @uses EbayTradingTypeGetItemsAwaitingFeedbackRequestType::getPagination()
	 * @param EbayTradingTypeGetItemsAwaitingFeedbackRequestType GetItemsAwaitingFeedbackRequestType
	 * @return EbayTradingTypeGetItemsAwaitingFeedbackResponseType
	 */
	public function GetItemsAwaitingFeedback(EbayTradingTypeGetItemsAwaitingFeedbackRequestType $_EbayTradingTypeGetItemsAwaitingFeedbackRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetItemsAwaitingFeedback(array('Sort'=>$_EbayTradingTypeGetItemsAwaitingFeedbackRequestType->getSort(),'Pagination'=>$_EbayTradingTypeGetItemsAwaitingFeedbackRequestType->getPagination())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMemberMessages
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetMemberMessagesRequestType::getItemID()
	 * @uses EbayTradingTypeGetMemberMessagesRequestType::getMailMessageType()
	 * @uses EbayTradingTypeGetMemberMessagesRequestType::getMessageStatus()
	 * @uses EbayTradingTypeGetMemberMessagesRequestType::getDisplayToPublic()
	 * @uses EbayTradingTypeGetMemberMessagesRequestType::getStartCreationTime()
	 * @uses EbayTradingTypeGetMemberMessagesRequestType::getEndCreationTime()
	 * @uses EbayTradingTypeGetMemberMessagesRequestType::getPagination()
	 * @uses EbayTradingTypeGetMemberMessagesRequestType::getMemberMessageID()
	 * @uses EbayTradingTypeGetMemberMessagesRequestType::getSenderID()
	 * @param EbayTradingTypeGetMemberMessagesRequestType GetMemberMessagesRequestType
	 * @return EbayTradingTypeGetMemberMessagesResponseType
	 */
	public function GetMemberMessages(EbayTradingTypeGetMemberMessagesRequestType $_EbayTradingTypeGetMemberMessagesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMemberMessages(array('ItemID'=>$_EbayTradingTypeGetMemberMessagesRequestType->getItemID(),'MailMessageType'=>$_EbayTradingTypeGetMemberMessagesRequestType->getMailMessageType(),'MessageStatus'=>$_EbayTradingTypeGetMemberMessagesRequestType->getMessageStatus(),'DisplayToPublic'=>$_EbayTradingTypeGetMemberMessagesRequestType->getDisplayToPublic(),'StartCreationTime'=>$_EbayTradingTypeGetMemberMessagesRequestType->getStartCreationTime(),'EndCreationTime'=>$_EbayTradingTypeGetMemberMessagesRequestType->getEndCreationTime(),'Pagination'=>$_EbayTradingTypeGetMemberMessagesRequestType->getPagination(),'MemberMessageID'=>$_EbayTradingTypeGetMemberMessagesRequestType->getMemberMessageID(),'SenderID'=>$_EbayTradingTypeGetMemberMessagesRequestType->getSenderID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMessagePreferences
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetMessagePreferencesRequestType::getSellerID()
	 * @uses EbayTradingTypeGetMessagePreferencesRequestType::getIncludeASQPreferences()
	 * @param EbayTradingTypeGetMessagePreferencesRequestType GetMessagePreferencesRequestType
	 * @return EbayTradingTypeGetMessagePreferencesResponseType
	 */
	public function GetMessagePreferences(EbayTradingTypeGetMessagePreferencesRequestType $_EbayTradingTypeGetMessagePreferencesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMessagePreferences(array('SellerID'=>$_EbayTradingTypeGetMessagePreferencesRequestType->getSellerID(),'IncludeASQPreferences'=>$_EbayTradingTypeGetMessagePreferencesRequestType->getIncludeASQPreferences())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMyMessages
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetMyMessagesRequestType::getAlertIDs()
	 * @uses EbayTradingTypeGetMyMessagesRequestType::getMessageIDs()
	 * @uses EbayTradingTypeGetMyMessagesRequestType::getFolderID()
	 * @uses EbayTradingTypeGetMyMessagesRequestType::getStartTime()
	 * @uses EbayTradingTypeGetMyMessagesRequestType::getEndTime()
	 * @uses EbayTradingTypeGetMyMessagesRequestType::getExternalMessageIDs()
	 * @uses EbayTradingTypeGetMyMessagesRequestType::getPagination()
	 * @uses EbayTradingTypeGetMyMessagesRequestType::getIncludeHighPriorityMessageOnly()
	 * @param EbayTradingTypeGetMyMessagesRequestType GetMyMessagesRequestType
	 * @return EbayTradingTypeGetMyMessagesResponseType
	 */
	public function GetMyMessages(EbayTradingTypeGetMyMessagesRequestType $_EbayTradingTypeGetMyMessagesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMyMessages(array('AlertIDs'=>$_EbayTradingTypeGetMyMessagesRequestType->getAlertIDs(),'MessageIDs'=>$_EbayTradingTypeGetMyMessagesRequestType->getMessageIDs(),'FolderID'=>$_EbayTradingTypeGetMyMessagesRequestType->getFolderID(),'StartTime'=>$_EbayTradingTypeGetMyMessagesRequestType->getStartTime(),'EndTime'=>$_EbayTradingTypeGetMyMessagesRequestType->getEndTime(),'ExternalMessageIDs'=>$_EbayTradingTypeGetMyMessagesRequestType->getExternalMessageIDs(),'Pagination'=>$_EbayTradingTypeGetMyMessagesRequestType->getPagination(),'IncludeHighPriorityMessageOnly'=>$_EbayTradingTypeGetMyMessagesRequestType->getIncludeHighPriorityMessageOnly())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMyeBayBuying
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetMyeBayBuyingRequestType::getWatchList()
	 * @uses EbayTradingTypeGetMyeBayBuyingRequestType::getBidList()
	 * @uses EbayTradingTypeGetMyeBayBuyingRequestType::getBestOfferList()
	 * @uses EbayTradingTypeGetMyeBayBuyingRequestType::getWonList()
	 * @uses EbayTradingTypeGetMyeBayBuyingRequestType::getLostList()
	 * @uses EbayTradingTypeGetMyeBayBuyingRequestType::getFavoriteSearches()
	 * @uses EbayTradingTypeGetMyeBayBuyingRequestType::getFavoriteSellers()
	 * @uses EbayTradingTypeGetMyeBayBuyingRequestType::getSecondChanceOffer()
	 * @uses EbayTradingTypeGetMyeBayBuyingRequestType::getBidAssistantList()
	 * @uses EbayTradingTypeGetMyeBayBuyingRequestType::getDeletedFromWonList()
	 * @uses EbayTradingTypeGetMyeBayBuyingRequestType::getDeletedFromLostList()
	 * @uses EbayTradingTypeGetMyeBayBuyingRequestType::getBuyingSummary()
	 * @uses EbayTradingTypeGetMyeBayBuyingRequestType::getUserDefinedLists()
	 * @uses EbayTradingTypeGetMyeBayBuyingRequestType::getHideVariations()
	 * @param EbayTradingTypeGetMyeBayBuyingRequestType GetMyeBayBuyingRequestType
	 * @return EbayTradingTypeGetMyeBayBuyingResponseType
	 */
	public function GetMyeBayBuying(EbayTradingTypeGetMyeBayBuyingRequestType $_EbayTradingTypeGetMyeBayBuyingRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMyeBayBuying(array('WatchList'=>$_EbayTradingTypeGetMyeBayBuyingRequestType->getWatchList(),'BidList'=>$_EbayTradingTypeGetMyeBayBuyingRequestType->getBidList(),'BestOfferList'=>$_EbayTradingTypeGetMyeBayBuyingRequestType->getBestOfferList(),'WonList'=>$_EbayTradingTypeGetMyeBayBuyingRequestType->getWonList(),'LostList'=>$_EbayTradingTypeGetMyeBayBuyingRequestType->getLostList(),'FavoriteSearches'=>$_EbayTradingTypeGetMyeBayBuyingRequestType->getFavoriteSearches(),'FavoriteSellers'=>$_EbayTradingTypeGetMyeBayBuyingRequestType->getFavoriteSellers(),'SecondChanceOffer'=>$_EbayTradingTypeGetMyeBayBuyingRequestType->getSecondChanceOffer(),'BidAssistantList'=>$_EbayTradingTypeGetMyeBayBuyingRequestType->getBidAssistantList(),'DeletedFromWonList'=>$_EbayTradingTypeGetMyeBayBuyingRequestType->getDeletedFromWonList(),'DeletedFromLostList'=>$_EbayTradingTypeGetMyeBayBuyingRequestType->getDeletedFromLostList(),'BuyingSummary'=>$_EbayTradingTypeGetMyeBayBuyingRequestType->getBuyingSummary(),'UserDefinedLists'=>$_EbayTradingTypeGetMyeBayBuyingRequestType->getUserDefinedLists(),'HideVariations'=>$_EbayTradingTypeGetMyeBayBuyingRequestType->getHideVariations())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMyeBayReminders
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetMyeBayRemindersRequestType::getBuyingReminders()
	 * @uses EbayTradingTypeGetMyeBayRemindersRequestType::getSellingReminders()
	 * @param EbayTradingTypeGetMyeBayRemindersRequestType GetMyeBayRemindersRequestType
	 * @return EbayTradingTypeGetMyeBayRemindersResponseType
	 */
	public function GetMyeBayReminders(EbayTradingTypeGetMyeBayRemindersRequestType $_EbayTradingTypeGetMyeBayRemindersRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMyeBayReminders(array('BuyingReminders'=>$_EbayTradingTypeGetMyeBayRemindersRequestType->getBuyingReminders(),'SellingReminders'=>$_EbayTradingTypeGetMyeBayRemindersRequestType->getSellingReminders())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMyeBaySelling
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetMyeBaySellingRequestType::getScheduledList()
	 * @uses EbayTradingTypeGetMyeBaySellingRequestType::getActiveList()
	 * @uses EbayTradingTypeGetMyeBaySellingRequestType::getSoldList()
	 * @uses EbayTradingTypeGetMyeBaySellingRequestType::getUnsoldList()
	 * @uses EbayTradingTypeGetMyeBaySellingRequestType::getBidList()
	 * @uses EbayTradingTypeGetMyeBaySellingRequestType::getDeletedFromSoldList()
	 * @uses EbayTradingTypeGetMyeBaySellingRequestType::getDeletedFromUnsoldList()
	 * @uses EbayTradingTypeGetMyeBaySellingRequestType::getSellingSummary()
	 * @uses EbayTradingTypeGetMyeBaySellingRequestType::getHideVariations()
	 * @param EbayTradingTypeGetMyeBaySellingRequestType GetMyeBaySellingRequestType
	 * @return EbayTradingTypeGetMyeBaySellingResponseType
	 */
	public function GetMyeBaySelling(EbayTradingTypeGetMyeBaySellingRequestType $_EbayTradingTypeGetMyeBaySellingRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMyeBaySelling(array('ScheduledList'=>$_EbayTradingTypeGetMyeBaySellingRequestType->getScheduledList(),'ActiveList'=>$_EbayTradingTypeGetMyeBaySellingRequestType->getActiveList(),'SoldList'=>$_EbayTradingTypeGetMyeBaySellingRequestType->getSoldList(),'UnsoldList'=>$_EbayTradingTypeGetMyeBaySellingRequestType->getUnsoldList(),'BidList'=>$_EbayTradingTypeGetMyeBaySellingRequestType->getBidList(),'DeletedFromSoldList'=>$_EbayTradingTypeGetMyeBaySellingRequestType->getDeletedFromSoldList(),'DeletedFromUnsoldList'=>$_EbayTradingTypeGetMyeBaySellingRequestType->getDeletedFromUnsoldList(),'SellingSummary'=>$_EbayTradingTypeGetMyeBaySellingRequestType->getSellingSummary(),'HideVariations'=>$_EbayTradingTypeGetMyeBaySellingRequestType->getHideVariations())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetNotificationPreferences
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetNotificationPreferencesRequestType::getPreferenceLevel()
	 * @param EbayTradingTypeGetNotificationPreferencesRequestType GetNotificationPreferencesRequestType
	 * @return EbayTradingTypeGetNotificationPreferencesResponseType
	 */
	public function GetNotificationPreferences(EbayTradingTypeGetNotificationPreferencesRequestType $_EbayTradingTypeGetNotificationPreferencesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNotificationPreferences(array('PreferenceLevel'=>$_EbayTradingTypeGetNotificationPreferencesRequestType->getPreferenceLevel())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetNotificationsUsage
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetNotificationsUsageRequestType::getStartTime()
	 * @uses EbayTradingTypeGetNotificationsUsageRequestType::getEndTime()
	 * @uses EbayTradingTypeGetNotificationsUsageRequestType::getItemID()
	 * @param EbayTradingTypeGetNotificationsUsageRequestType GetNotificationsUsageRequestType
	 * @return EbayTradingTypeGetNotificationsUsageResponseType
	 */
	public function GetNotificationsUsage(EbayTradingTypeGetNotificationsUsageRequestType $_EbayTradingTypeGetNotificationsUsageRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNotificationsUsage(array('StartTime'=>$_EbayTradingTypeGetNotificationsUsageRequestType->getStartTime(),'EndTime'=>$_EbayTradingTypeGetNotificationsUsageRequestType->getEndTime(),'ItemID'=>$_EbayTradingTypeGetNotificationsUsageRequestType->getItemID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetOrderTransactions
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetOrderTransactionsRequestType::getItemTransactionIDArray()
	 * @uses EbayTradingTypeGetOrderTransactionsRequestType::getOrderIDArray()
	 * @uses EbayTradingTypeGetOrderTransactionsRequestType::getPlatform()
	 * @uses EbayTradingTypeGetOrderTransactionsRequestType::getIncludeFinalValueFees()
	 * @param EbayTradingTypeGetOrderTransactionsRequestType GetOrderTransactionsRequestType
	 * @return EbayTradingTypeGetOrderTransactionsResponseType
	 */
	public function GetOrderTransactions(EbayTradingTypeGetOrderTransactionsRequestType $_EbayTradingTypeGetOrderTransactionsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetOrderTransactions(array('ItemTransactionIDArray'=>$_EbayTradingTypeGetOrderTransactionsRequestType->getItemTransactionIDArray(),'OrderIDArray'=>$_EbayTradingTypeGetOrderTransactionsRequestType->getOrderIDArray(),'Platform'=>$_EbayTradingTypeGetOrderTransactionsRequestType->getPlatform(),'IncludeFinalValueFees'=>$_EbayTradingTypeGetOrderTransactionsRequestType->getIncludeFinalValueFees())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetOrders
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetOrdersRequestType::getOrderIDArray()
	 * @uses EbayTradingTypeGetOrdersRequestType::getCreateTimeFrom()
	 * @uses EbayTradingTypeGetOrdersRequestType::getCreateTimeTo()
	 * @uses EbayTradingTypeGetOrdersRequestType::getOrderRole()
	 * @uses EbayTradingTypeGetOrdersRequestType::getOrderStatus()
	 * @uses EbayTradingTypeGetOrdersRequestType::getListingType()
	 * @uses EbayTradingTypeGetOrdersRequestType::getPagination()
	 * @uses EbayTradingTypeGetOrdersRequestType::getModTimeFrom()
	 * @uses EbayTradingTypeGetOrdersRequestType::getModTimeTo()
	 * @uses EbayTradingTypeGetOrdersRequestType::getNumberOfDays()
	 * @uses EbayTradingTypeGetOrdersRequestType::getIncludeFinalValueFee()
	 * @param EbayTradingTypeGetOrdersRequestType GetOrdersRequestType
	 * @return EbayTradingTypeGetOrdersResponseType
	 */
	public function GetOrders(EbayTradingTypeGetOrdersRequestType $_EbayTradingTypeGetOrdersRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetOrders(array('OrderIDArray'=>$_EbayTradingTypeGetOrdersRequestType->getOrderIDArray(),'CreateTimeFrom'=>$_EbayTradingTypeGetOrdersRequestType->getCreateTimeFrom(),'CreateTimeTo'=>$_EbayTradingTypeGetOrdersRequestType->getCreateTimeTo(),'OrderRole'=>$_EbayTradingTypeGetOrdersRequestType->getOrderRole(),'OrderStatus'=>$_EbayTradingTypeGetOrdersRequestType->getOrderStatus(),'ListingType'=>$_EbayTradingTypeGetOrdersRequestType->getListingType(),'Pagination'=>$_EbayTradingTypeGetOrdersRequestType->getPagination(),'ModTimeFrom'=>$_EbayTradingTypeGetOrdersRequestType->getModTimeFrom(),'ModTimeTo'=>$_EbayTradingTypeGetOrdersRequestType->getModTimeTo(),'NumberOfDays'=>$_EbayTradingTypeGetOrdersRequestType->getNumberOfDays(),'IncludeFinalValueFee'=>$_EbayTradingTypeGetOrdersRequestType->getIncludeFinalValueFee())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPictureManagerDetails
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetPictureManagerDetailsRequestType::getFolderID()
	 * @uses EbayTradingTypeGetPictureManagerDetailsRequestType::getPictureURL()
	 * @uses EbayTradingTypeGetPictureManagerDetailsRequestType::getPictureManagerDetailLevel()
	 * @param EbayTradingTypeGetPictureManagerDetailsRequestType GetPictureManagerDetailsRequestType
	 * @return EbayTradingTypeGetPictureManagerDetailsResponseType
	 */
	public function GetPictureManagerDetails(EbayTradingTypeGetPictureManagerDetailsRequestType $_EbayTradingTypeGetPictureManagerDetailsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPictureManagerDetails(array('FolderID'=>$_EbayTradingTypeGetPictureManagerDetailsRequestType->getFolderID(),'PictureURL'=>$_EbayTradingTypeGetPictureManagerDetailsRequestType->getPictureURL(),'PictureManagerDetailLevel'=>$_EbayTradingTypeGetPictureManagerDetailsRequestType->getPictureManagerDetailLevel())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPictureManagerOptions
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @param EbayTradingTypeGetPictureManagerOptionsRequestType GetPictureManagerOptionsRequestType
	 * @return EbayTradingTypeGetPictureManagerOptionsResponseType
	 */
	public function GetPictureManagerOptions(EbayTradingTypeGetPictureManagerOptionsRequestType $_EbayTradingTypeGetPictureManagerOptionsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPictureManagerOptions(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPopularKeywords
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetPopularKeywordsRequestType::getCategoryID()
	 * @uses EbayTradingTypeGetPopularKeywordsRequestType::getIncludeChildCategories()
	 * @uses EbayTradingTypeGetPopularKeywordsRequestType::getMaxKeywordsRetrieved()
	 * @uses EbayTradingTypeGetPopularKeywordsRequestType::getPagination()
	 * @param EbayTradingTypeGetPopularKeywordsRequestType GetPopularKeywordsRequestType
	 * @return EbayTradingTypeGetPopularKeywordsResponseType
	 */
	public function GetPopularKeywords(EbayTradingTypeGetPopularKeywordsRequestType $_EbayTradingTypeGetPopularKeywordsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPopularKeywords(array('CategoryID'=>$_EbayTradingTypeGetPopularKeywordsRequestType->getCategoryID(),'IncludeChildCategories'=>$_EbayTradingTypeGetPopularKeywordsRequestType->getIncludeChildCategories(),'MaxKeywordsRetrieved'=>$_EbayTradingTypeGetPopularKeywordsRequestType->getMaxKeywordsRetrieved(),'Pagination'=>$_EbayTradingTypeGetPopularKeywordsRequestType->getPagination())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetProductFamilyMembers
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetProductFamilyMembersRequestType::getProductSearch()
	 * @param EbayTradingTypeGetProductFamilyMembersRequestType GetProductFamilyMembersRequestType
	 * @return EbayTradingTypeGetProductFamilyMembersResponseType
	 */
	public function GetProductFamilyMembers(EbayTradingTypeGetProductFamilyMembersRequestType $_EbayTradingTypeGetProductFamilyMembersRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetProductFamilyMembers(array('ProductSearch'=>$_EbayTradingTypeGetProductFamilyMembersRequestType->getProductSearch())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetProductFinder
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetProductFinderRequestType::getAttributeSystemVersion()
	 * @uses EbayTradingTypeGetProductFinderRequestType::getProductFinderID()
	 * @param EbayTradingTypeGetProductFinderRequestType GetProductFinderRequestType
	 * @return EbayTradingTypeGetProductFinderResponseType
	 */
	public function GetProductFinder(EbayTradingTypeGetProductFinderRequestType $_EbayTradingTypeGetProductFinderRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetProductFinder(array('AttributeSystemVersion'=>$_EbayTradingTypeGetProductFinderRequestType->getAttributeSystemVersion(),'ProductFinderID'=>$_EbayTradingTypeGetProductFinderRequestType->getProductFinderID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetProductFinderXSL
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetProductFinderXSLRequestType::getFileName()
	 * @uses EbayTradingTypeGetProductFinderXSLRequestType::getFileVersion()
	 * @param EbayTradingTypeGetProductFinderXSLRequestType GetProductFinderXSLRequestType
	 * @return EbayTradingTypeGetProductFinderXSLResponseType
	 */
	public function GetProductFinderXSL(EbayTradingTypeGetProductFinderXSLRequestType $_EbayTradingTypeGetProductFinderXSLRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetProductFinderXSL(array('FileName'=>$_EbayTradingTypeGetProductFinderXSLRequestType->getFileName(),'FileVersion'=>$_EbayTradingTypeGetProductFinderXSLRequestType->getFileVersion())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetProductSearchPage
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetProductSearchPageRequestType::getAttributeSystemVersion()
	 * @uses EbayTradingTypeGetProductSearchPageRequestType::getAttributeSetID()
	 * @param EbayTradingTypeGetProductSearchPageRequestType GetProductSearchPageRequestType
	 * @return EbayTradingTypeGetProductSearchPageResponseType
	 */
	public function GetProductSearchPage(EbayTradingTypeGetProductSearchPageRequestType $_EbayTradingTypeGetProductSearchPageRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetProductSearchPage(array('AttributeSystemVersion'=>$_EbayTradingTypeGetProductSearchPageRequestType->getAttributeSystemVersion(),'AttributeSetID'=>$_EbayTradingTypeGetProductSearchPageRequestType->getAttributeSetID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetProductSearchResults
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetProductSearchResultsRequestType::getProductSearch()
	 * @param EbayTradingTypeGetProductSearchResultsRequestType GetProductSearchResultsRequestType
	 * @return EbayTradingTypeGetProductSearchResultsResponseType
	 */
	public function GetProductSearchResults(EbayTradingTypeGetProductSearchResultsRequestType $_EbayTradingTypeGetProductSearchResultsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetProductSearchResults(array('ProductSearch'=>$_EbayTradingTypeGetProductSearchResultsRequestType->getProductSearch())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetProductSellingPages
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetProductSellingPagesRequestType::getUseCase()
	 * @uses EbayTradingTypeGetProductSellingPagesRequestType::getProduct()
	 * @param EbayTradingTypeGetProductSellingPagesRequestType GetProductSellingPagesRequestType
	 * @return EbayTradingTypeGetProductSellingPagesResponseType
	 */
	public function GetProductSellingPages(EbayTradingTypeGetProductSellingPagesRequestType $_EbayTradingTypeGetProductSellingPagesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetProductSellingPages(array('UseCase'=>$_EbayTradingTypeGetProductSellingPagesRequestType->getUseCase(),'Product'=>$_EbayTradingTypeGetProductSellingPagesRequestType->getProduct())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetProducts
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetProductsRequestType::getProductSearch()
	 * @uses EbayTradingTypeGetProductsRequestType::getProductSort()
	 * @uses EbayTradingTypeGetProductsRequestType::getIncludeItemArray()
	 * @uses EbayTradingTypeGetProductsRequestType::getIncludeReviewDetails()
	 * @uses EbayTradingTypeGetProductsRequestType::getIncludeBuyingGuideDetails()
	 * @uses EbayTradingTypeGetProductsRequestType::getIncludeHistogram()
	 * @uses EbayTradingTypeGetProductsRequestType::getAffiliateTrackingDetails()
	 * @uses EbayTradingTypeGetProductsRequestType::getHideDuplicateItems()
	 * @param EbayTradingTypeGetProductsRequestType GetProductsRequestType
	 * @return EbayTradingTypeGetProductsResponseType
	 */
	public function GetProducts(EbayTradingTypeGetProductsRequestType $_EbayTradingTypeGetProductsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetProducts(array('ProductSearch'=>$_EbayTradingTypeGetProductsRequestType->getProductSearch(),'ProductSort'=>$_EbayTradingTypeGetProductsRequestType->getProductSort(),'IncludeItemArray'=>$_EbayTradingTypeGetProductsRequestType->getIncludeItemArray(),'IncludeReviewDetails'=>$_EbayTradingTypeGetProductsRequestType->getIncludeReviewDetails(),'IncludeBuyingGuideDetails'=>$_EbayTradingTypeGetProductsRequestType->getIncludeBuyingGuideDetails(),'IncludeHistogram'=>$_EbayTradingTypeGetProductsRequestType->getIncludeHistogram(),'AffiliateTrackingDetails'=>$_EbayTradingTypeGetProductsRequestType->getAffiliateTrackingDetails(),'HideDuplicateItems'=>$_EbayTradingTypeGetProductsRequestType->getHideDuplicateItems())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPromotionRules
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetPromotionRulesRequestType::getItemID()
	 * @uses EbayTradingTypeGetPromotionRulesRequestType::getStoreCategoryID()
	 * @uses EbayTradingTypeGetPromotionRulesRequestType::getPromotionMethod()
	 * @param EbayTradingTypeGetPromotionRulesRequestType GetPromotionRulesRequestType
	 * @return EbayTradingTypeGetPromotionRulesResponseType
	 */
	public function GetPromotionRules(EbayTradingTypeGetPromotionRulesRequestType $_EbayTradingTypeGetPromotionRulesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPromotionRules(array('ItemID'=>$_EbayTradingTypeGetPromotionRulesRequestType->getItemID(),'StoreCategoryID'=>$_EbayTradingTypeGetPromotionRulesRequestType->getStoreCategoryID(),'PromotionMethod'=>$_EbayTradingTypeGetPromotionRulesRequestType->getPromotionMethod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPromotionalSaleDetails
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetPromotionalSaleDetailsRequestType::getPromotionalSaleID()
	 * @uses EbayTradingTypeGetPromotionalSaleDetailsRequestType::getPromotionalSaleStatus()
	 * @param EbayTradingTypeGetPromotionalSaleDetailsRequestType GetPromotionalSaleDetailsRequestType
	 * @return EbayTradingTypeGetPromotionalSaleDetailsResponseType
	 */
	public function GetPromotionalSaleDetails(EbayTradingTypeGetPromotionalSaleDetailsRequestType $_EbayTradingTypeGetPromotionalSaleDetailsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPromotionalSaleDetails(array('PromotionalSaleID'=>$_EbayTradingTypeGetPromotionalSaleDetailsRequestType->getPromotionalSaleID(),'PromotionalSaleStatus'=>$_EbayTradingTypeGetPromotionalSaleDetailsRequestType->getPromotionalSaleStatus())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSellerDashboard
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @param EbayTradingTypeGetSellerDashboardRequestType GetSellerDashboardRequestType
	 * @return EbayTradingTypeGetSellerDashboardResponseType
	 */
	public function GetSellerDashboard(EbayTradingTypeGetSellerDashboardRequestType $_EbayTradingTypeGetSellerDashboardRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSellerDashboard(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSellerEvents
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetSellerEventsRequestType::getUserID()
	 * @uses EbayTradingTypeGetSellerEventsRequestType::getStartTimeFrom()
	 * @uses EbayTradingTypeGetSellerEventsRequestType::getStartTimeTo()
	 * @uses EbayTradingTypeGetSellerEventsRequestType::getEndTimeFrom()
	 * @uses EbayTradingTypeGetSellerEventsRequestType::getEndTimeTo()
	 * @uses EbayTradingTypeGetSellerEventsRequestType::getModTimeFrom()
	 * @uses EbayTradingTypeGetSellerEventsRequestType::getModTimeTo()
	 * @uses EbayTradingTypeGetSellerEventsRequestType::getNewItemFilter()
	 * @uses EbayTradingTypeGetSellerEventsRequestType::getIncludeWatchCount()
	 * @uses EbayTradingTypeGetSellerEventsRequestType::getIncludeVariationSpecifics()
	 * @uses EbayTradingTypeGetSellerEventsRequestType::getHideVariations()
	 * @param EbayTradingTypeGetSellerEventsRequestType GetSellerEventsRequestType
	 * @return EbayTradingTypeGetSellerEventsResponseType
	 */
	public function GetSellerEvents(EbayTradingTypeGetSellerEventsRequestType $_EbayTradingTypeGetSellerEventsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSellerEvents(array('UserID'=>$_EbayTradingTypeGetSellerEventsRequestType->getUserID(),'StartTimeFrom'=>$_EbayTradingTypeGetSellerEventsRequestType->getStartTimeFrom(),'StartTimeTo'=>$_EbayTradingTypeGetSellerEventsRequestType->getStartTimeTo(),'EndTimeFrom'=>$_EbayTradingTypeGetSellerEventsRequestType->getEndTimeFrom(),'EndTimeTo'=>$_EbayTradingTypeGetSellerEventsRequestType->getEndTimeTo(),'ModTimeFrom'=>$_EbayTradingTypeGetSellerEventsRequestType->getModTimeFrom(),'ModTimeTo'=>$_EbayTradingTypeGetSellerEventsRequestType->getModTimeTo(),'NewItemFilter'=>$_EbayTradingTypeGetSellerEventsRequestType->getNewItemFilter(),'IncludeWatchCount'=>$_EbayTradingTypeGetSellerEventsRequestType->getIncludeWatchCount(),'IncludeVariationSpecifics'=>$_EbayTradingTypeGetSellerEventsRequestType->getIncludeVariationSpecifics(),'HideVariations'=>$_EbayTradingTypeGetSellerEventsRequestType->getHideVariations())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSellerList
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetSellerListRequestType::getUserID()
	 * @uses EbayTradingTypeGetSellerListRequestType::getMotorsDealerUsers()
	 * @uses EbayTradingTypeGetSellerListRequestType::getEndTimeFrom()
	 * @uses EbayTradingTypeGetSellerListRequestType::getEndTimeTo()
	 * @uses EbayTradingTypeGetSellerListRequestType::getSort()
	 * @uses EbayTradingTypeGetSellerListRequestType::getStartTimeFrom()
	 * @uses EbayTradingTypeGetSellerListRequestType::getStartTimeTo()
	 * @uses EbayTradingTypeGetSellerListRequestType::getPagination()
	 * @uses EbayTradingTypeGetSellerListRequestType::getGranularityLevel()
	 * @uses EbayTradingTypeGetSellerListRequestType::getSKUArray()
	 * @uses EbayTradingTypeGetSellerListRequestType::getIncludeWatchCount()
	 * @uses EbayTradingTypeGetSellerListRequestType::getAdminEndedItemsOnly()
	 * @uses EbayTradingTypeGetSellerListRequestType::getCategoryID()
	 * @uses EbayTradingTypeGetSellerListRequestType::getIncludeVariations()
	 * @param EbayTradingTypeGetSellerListRequestType GetSellerListRequestType
	 * @return EbayTradingTypeGetSellerListResponseType
	 */
	public function GetSellerList(EbayTradingTypeGetSellerListRequestType $_EbayTradingTypeGetSellerListRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSellerList(array('UserID'=>$_EbayTradingTypeGetSellerListRequestType->getUserID(),'MotorsDealerUsers'=>$_EbayTradingTypeGetSellerListRequestType->getMotorsDealerUsers(),'EndTimeFrom'=>$_EbayTradingTypeGetSellerListRequestType->getEndTimeFrom(),'EndTimeTo'=>$_EbayTradingTypeGetSellerListRequestType->getEndTimeTo(),'Sort'=>$_EbayTradingTypeGetSellerListRequestType->getSort(),'StartTimeFrom'=>$_EbayTradingTypeGetSellerListRequestType->getStartTimeFrom(),'StartTimeTo'=>$_EbayTradingTypeGetSellerListRequestType->getStartTimeTo(),'Pagination'=>$_EbayTradingTypeGetSellerListRequestType->getPagination(),'GranularityLevel'=>$_EbayTradingTypeGetSellerListRequestType->getGranularityLevel(),'SKUArray'=>$_EbayTradingTypeGetSellerListRequestType->getSKUArray(),'IncludeWatchCount'=>$_EbayTradingTypeGetSellerListRequestType->getIncludeWatchCount(),'AdminEndedItemsOnly'=>$_EbayTradingTypeGetSellerListRequestType->getAdminEndedItemsOnly(),'CategoryID'=>$_EbayTradingTypeGetSellerListRequestType->getCategoryID(),'IncludeVariations'=>$_EbayTradingTypeGetSellerListRequestType->getIncludeVariations())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSellerPayments
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetSellerPaymentsRequestType::getPaymentStatus()
	 * @uses EbayTradingTypeGetSellerPaymentsRequestType::getPaymentTimeFrom()
	 * @uses EbayTradingTypeGetSellerPaymentsRequestType::getPaymentTimeTo()
	 * @uses EbayTradingTypeGetSellerPaymentsRequestType::getPagination()
	 * @param EbayTradingTypeGetSellerPaymentsRequestType GetSellerPaymentsRequestType
	 * @return EbayTradingTypeGetSellerPaymentsResponseType
	 */
	public function GetSellerPayments(EbayTradingTypeGetSellerPaymentsRequestType $_EbayTradingTypeGetSellerPaymentsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSellerPayments(array('PaymentStatus'=>$_EbayTradingTypeGetSellerPaymentsRequestType->getPaymentStatus(),'PaymentTimeFrom'=>$_EbayTradingTypeGetSellerPaymentsRequestType->getPaymentTimeFrom(),'PaymentTimeTo'=>$_EbayTradingTypeGetSellerPaymentsRequestType->getPaymentTimeTo(),'Pagination'=>$_EbayTradingTypeGetSellerPaymentsRequestType->getPagination())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSellerTransactions
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetSellerTransactionsRequestType::getModTimeFrom()
	 * @uses EbayTradingTypeGetSellerTransactionsRequestType::getModTimeTo()
	 * @uses EbayTradingTypeGetSellerTransactionsRequestType::getPagination()
	 * @uses EbayTradingTypeGetSellerTransactionsRequestType::getIncludeFinalValueFee()
	 * @uses EbayTradingTypeGetSellerTransactionsRequestType::getIncludeContainingOrder()
	 * @uses EbayTradingTypeGetSellerTransactionsRequestType::getSKUArray()
	 * @uses EbayTradingTypeGetSellerTransactionsRequestType::getPlatform()
	 * @uses EbayTradingTypeGetSellerTransactionsRequestType::getNumberOfDays()
	 * @uses EbayTradingTypeGetSellerTransactionsRequestType::getInventoryTrackingMethod()
	 * @uses EbayTradingTypeGetSellerTransactionsRequestType::getIncludeCodiceFiscale()
	 * @param EbayTradingTypeGetSellerTransactionsRequestType GetSellerTransactionsRequestType
	 * @return EbayTradingTypeGetSellerTransactionsResponseType
	 */
	public function GetSellerTransactions(EbayTradingTypeGetSellerTransactionsRequestType $_EbayTradingTypeGetSellerTransactionsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSellerTransactions(array('ModTimeFrom'=>$_EbayTradingTypeGetSellerTransactionsRequestType->getModTimeFrom(),'ModTimeTo'=>$_EbayTradingTypeGetSellerTransactionsRequestType->getModTimeTo(),'Pagination'=>$_EbayTradingTypeGetSellerTransactionsRequestType->getPagination(),'IncludeFinalValueFee'=>$_EbayTradingTypeGetSellerTransactionsRequestType->getIncludeFinalValueFee(),'IncludeContainingOrder'=>$_EbayTradingTypeGetSellerTransactionsRequestType->getIncludeContainingOrder(),'SKUArray'=>$_EbayTradingTypeGetSellerTransactionsRequestType->getSKUArray(),'Platform'=>$_EbayTradingTypeGetSellerTransactionsRequestType->getPlatform(),'NumberOfDays'=>$_EbayTradingTypeGetSellerTransactionsRequestType->getNumberOfDays(),'InventoryTrackingMethod'=>$_EbayTradingTypeGetSellerTransactionsRequestType->getInventoryTrackingMethod(),'IncludeCodiceFiscale'=>$_EbayTradingTypeGetSellerTransactionsRequestType->getIncludeCodiceFiscale())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSellingManagerAlerts
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @param EbayTradingTypeGetSellingManagerAlertsRequestType GetSellingManagerAlertsRequestType
	 * @return EbayTradingTypeGetSellingManagerAlertsResponseType
	 */
	public function GetSellingManagerAlerts(EbayTradingTypeGetSellingManagerAlertsRequestType $_EbayTradingTypeGetSellingManagerAlertsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSellingManagerAlerts(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSellingManagerEmailLog
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetSellingManagerEmailLogRequestType::getItemID()
	 * @uses EbayTradingTypeGetSellingManagerEmailLogRequestType::getTransactionID()
	 * @uses EbayTradingTypeGetSellingManagerEmailLogRequestType::getOrderID()
	 * @uses EbayTradingTypeGetSellingManagerEmailLogRequestType::getEmailDateRange()
	 * @uses EbayTradingTypeGetSellingManagerEmailLogRequestType::getOrderLineItemID()
	 * @param EbayTradingTypeGetSellingManagerEmailLogRequestType GetSellingManagerEmailLogRequestType
	 * @return EbayTradingTypeGetSellingManagerEmailLogResponseType
	 */
	public function GetSellingManagerEmailLog(EbayTradingTypeGetSellingManagerEmailLogRequestType $_EbayTradingTypeGetSellingManagerEmailLogRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSellingManagerEmailLog(array('ItemID'=>$_EbayTradingTypeGetSellingManagerEmailLogRequestType->getItemID(),'TransactionID'=>$_EbayTradingTypeGetSellingManagerEmailLogRequestType->getTransactionID(),'OrderID'=>$_EbayTradingTypeGetSellingManagerEmailLogRequestType->getOrderID(),'EmailDateRange'=>$_EbayTradingTypeGetSellingManagerEmailLogRequestType->getEmailDateRange(),'OrderLineItemID'=>$_EbayTradingTypeGetSellingManagerEmailLogRequestType->getOrderLineItemID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSellingManagerInventory
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetSellingManagerInventoryRequestType::getSort()
	 * @uses EbayTradingTypeGetSellingManagerInventoryRequestType::getFolderID()
	 * @uses EbayTradingTypeGetSellingManagerInventoryRequestType::getPagination()
	 * @uses EbayTradingTypeGetSellingManagerInventoryRequestType::getSortOrder()
	 * @uses EbayTradingTypeGetSellingManagerInventoryRequestType::getSearch()
	 * @uses EbayTradingTypeGetSellingManagerInventoryRequestType::getStoreCategoryID()
	 * @uses EbayTradingTypeGetSellingManagerInventoryRequestType::getFilter()
	 * @param EbayTradingTypeGetSellingManagerInventoryRequestType GetSellingManagerInventoryRequestType
	 * @return EbayTradingTypeGetSellingManagerInventoryResponseType
	 */
	public function GetSellingManagerInventory(EbayTradingTypeGetSellingManagerInventoryRequestType $_EbayTradingTypeGetSellingManagerInventoryRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSellingManagerInventory(array('Sort'=>$_EbayTradingTypeGetSellingManagerInventoryRequestType->getSort(),'FolderID'=>$_EbayTradingTypeGetSellingManagerInventoryRequestType->getFolderID(),'Pagination'=>$_EbayTradingTypeGetSellingManagerInventoryRequestType->getPagination(),'SortOrder'=>$_EbayTradingTypeGetSellingManagerInventoryRequestType->getSortOrder(),'Search'=>$_EbayTradingTypeGetSellingManagerInventoryRequestType->getSearch(),'StoreCategoryID'=>$_EbayTradingTypeGetSellingManagerInventoryRequestType->getStoreCategoryID(),'Filter'=>$_EbayTradingTypeGetSellingManagerInventoryRequestType->getFilter())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSellingManagerInventoryFolder
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetSellingManagerInventoryFolderRequestType::getFolderID()
	 * @uses EbayTradingTypeGetSellingManagerInventoryFolderRequestType::getMaxDepth()
	 * @uses EbayTradingTypeGetSellingManagerInventoryFolderRequestType::getFullRecursion()
	 * @param EbayTradingTypeGetSellingManagerInventoryFolderRequestType GetSellingManagerInventoryFolderRequestType
	 * @return EbayTradingTypeGetSellingManagerInventoryFolderResponseType
	 */
	public function GetSellingManagerInventoryFolder(EbayTradingTypeGetSellingManagerInventoryFolderRequestType $_EbayTradingTypeGetSellingManagerInventoryFolderRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSellingManagerInventoryFolder(array('FolderID'=>$_EbayTradingTypeGetSellingManagerInventoryFolderRequestType->getFolderID(),'MaxDepth'=>$_EbayTradingTypeGetSellingManagerInventoryFolderRequestType->getMaxDepth(),'FullRecursion'=>$_EbayTradingTypeGetSellingManagerInventoryFolderRequestType->getFullRecursion())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSellingManagerItemAutomationRule
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetSellingManagerItemAutomationRuleRequestType::getItemID()
	 * @param EbayTradingTypeGetSellingManagerItemAutomationRuleRequestType GetSellingManagerItemAutomationRuleRequestType
	 * @return EbayTradingTypeGetSellingManagerItemAutomationRuleResponseType
	 */
	public function GetSellingManagerItemAutomationRule(EbayTradingTypeGetSellingManagerItemAutomationRuleRequestType $_EbayTradingTypeGetSellingManagerItemAutomationRuleRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSellingManagerItemAutomationRule(array('ItemID'=>$_EbayTradingTypeGetSellingManagerItemAutomationRuleRequestType->getItemID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSellingManagerSaleRecord
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetSellingManagerSaleRecordRequestType::getItemID()
	 * @uses EbayTradingTypeGetSellingManagerSaleRecordRequestType::getTransactionID()
	 * @uses EbayTradingTypeGetSellingManagerSaleRecordRequestType::getOrderID()
	 * @uses EbayTradingTypeGetSellingManagerSaleRecordRequestType::getOrderLineItemID()
	 * @param EbayTradingTypeGetSellingManagerSaleRecordRequestType GetSellingManagerSaleRecordRequestType
	 * @return EbayTradingTypeGetSellingManagerSaleRecordResponseType
	 */
	public function GetSellingManagerSaleRecord(EbayTradingTypeGetSellingManagerSaleRecordRequestType $_EbayTradingTypeGetSellingManagerSaleRecordRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSellingManagerSaleRecord(array('ItemID'=>$_EbayTradingTypeGetSellingManagerSaleRecordRequestType->getItemID(),'TransactionID'=>$_EbayTradingTypeGetSellingManagerSaleRecordRequestType->getTransactionID(),'OrderID'=>$_EbayTradingTypeGetSellingManagerSaleRecordRequestType->getOrderID(),'OrderLineItemID'=>$_EbayTradingTypeGetSellingManagerSaleRecordRequestType->getOrderLineItemID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSellingManagerSoldListings
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetSellingManagerSoldListingsRequestType::getSearch()
	 * @uses EbayTradingTypeGetSellingManagerSoldListingsRequestType::getStoreCategoryID()
	 * @uses EbayTradingTypeGetSellingManagerSoldListingsRequestType::getFilter()
	 * @uses EbayTradingTypeGetSellingManagerSoldListingsRequestType::getArchived()
	 * @uses EbayTradingTypeGetSellingManagerSoldListingsRequestType::getSort()
	 * @uses EbayTradingTypeGetSellingManagerSoldListingsRequestType::getSortOrder()
	 * @uses EbayTradingTypeGetSellingManagerSoldListingsRequestType::getPagination()
	 * @uses EbayTradingTypeGetSellingManagerSoldListingsRequestType::getSaleDateRange()
	 * @param EbayTradingTypeGetSellingManagerSoldListingsRequestType GetSellingManagerSoldListingsRequestType
	 * @return EbayTradingTypeGetSellingManagerSoldListingsResponseType
	 */
	public function GetSellingManagerSoldListings(EbayTradingTypeGetSellingManagerSoldListingsRequestType $_EbayTradingTypeGetSellingManagerSoldListingsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSellingManagerSoldListings(array('Search'=>$_EbayTradingTypeGetSellingManagerSoldListingsRequestType->getSearch(),'StoreCategoryID'=>$_EbayTradingTypeGetSellingManagerSoldListingsRequestType->getStoreCategoryID(),'Filter'=>$_EbayTradingTypeGetSellingManagerSoldListingsRequestType->getFilter(),'Archived'=>$_EbayTradingTypeGetSellingManagerSoldListingsRequestType->getArchived(),'Sort'=>$_EbayTradingTypeGetSellingManagerSoldListingsRequestType->getSort(),'SortOrder'=>$_EbayTradingTypeGetSellingManagerSoldListingsRequestType->getSortOrder(),'Pagination'=>$_EbayTradingTypeGetSellingManagerSoldListingsRequestType->getPagination(),'SaleDateRange'=>$_EbayTradingTypeGetSellingManagerSoldListingsRequestType->getSaleDateRange())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSellingManagerTemplateAutomationRule
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetSellingManagerTemplateAutomationRuleRequestType::getSaleTemplateID()
	 * @param EbayTradingTypeGetSellingManagerTemplateAutomationRuleRequestType GetSellingManagerTemplateAutomationRuleRequestType
	 * @return EbayTradingTypeGetSellingManagerTemplateAutomationRuleResponseType
	 */
	public function GetSellingManagerTemplateAutomationRule(EbayTradingTypeGetSellingManagerTemplateAutomationRuleRequestType $_EbayTradingTypeGetSellingManagerTemplateAutomationRuleRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSellingManagerTemplateAutomationRule(array('SaleTemplateID'=>$_EbayTradingTypeGetSellingManagerTemplateAutomationRuleRequestType->getSaleTemplateID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSellingManagerTemplates
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetSellingManagerTemplatesRequestType::getSaleTemplateID()
	 * @param EbayTradingTypeGetSellingManagerTemplatesRequestType GetSellingManagerTemplatesRequestType
	 * @return EbayTradingTypeGetSellingManagerTemplatesResponseType
	 */
	public function GetSellingManagerTemplates(EbayTradingTypeGetSellingManagerTemplatesRequestType $_EbayTradingTypeGetSellingManagerTemplatesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSellingManagerTemplates(array('SaleTemplateID'=>$_EbayTradingTypeGetSellingManagerTemplatesRequestType->getSaleTemplateID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSessionID
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetSessionIDRequestType::getRuName()
	 * @param EbayTradingTypeGetSessionIDRequestType GetSessionIDRequestType
	 * @return EbayTradingTypeGetSessionIDResponseType
	 */
	public function GetSessionID(EbayTradingTypeGetSessionIDRequestType $_EbayTradingTypeGetSessionIDRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSessionID(array('RuName'=>$_EbayTradingTypeGetSessionIDRequestType->getRuName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetShippingDiscountProfiles
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @param EbayTradingTypeGetShippingDiscountProfilesRequestType GetShippingDiscountProfilesRequestType
	 * @return EbayTradingTypeGetShippingDiscountProfilesResponseType
	 */
	public function GetShippingDiscountProfiles(EbayTradingTypeGetShippingDiscountProfilesRequestType $_EbayTradingTypeGetShippingDiscountProfilesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetShippingDiscountProfiles(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetStore
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetStoreRequestType::getCategoryStructureOnly()
	 * @uses EbayTradingTypeGetStoreRequestType::getRootCategoryID()
	 * @uses EbayTradingTypeGetStoreRequestType::getLevelLimit()
	 * @uses EbayTradingTypeGetStoreRequestType::getUserID()
	 * @param EbayTradingTypeGetStoreRequestType GetStoreRequestType
	 * @return EbayTradingTypeGetStoreResponseType
	 */
	public function GetStore(EbayTradingTypeGetStoreRequestType $_EbayTradingTypeGetStoreRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetStore(array('CategoryStructureOnly'=>$_EbayTradingTypeGetStoreRequestType->getCategoryStructureOnly(),'RootCategoryID'=>$_EbayTradingTypeGetStoreRequestType->getRootCategoryID(),'LevelLimit'=>$_EbayTradingTypeGetStoreRequestType->getLevelLimit(),'UserID'=>$_EbayTradingTypeGetStoreRequestType->getUserID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetStoreCategoryUpdateStatus
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetStoreCategoryUpdateStatusRequestType::getTaskID()
	 * @param EbayTradingTypeGetStoreCategoryUpdateStatusRequestType GetStoreCategoryUpdateStatusRequestType
	 * @return EbayTradingTypeGetStoreCategoryUpdateStatusResponseType
	 */
	public function GetStoreCategoryUpdateStatus(EbayTradingTypeGetStoreCategoryUpdateStatusRequestType $_EbayTradingTypeGetStoreCategoryUpdateStatusRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetStoreCategoryUpdateStatus(array('TaskID'=>$_EbayTradingTypeGetStoreCategoryUpdateStatusRequestType->getTaskID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetStoreCustomPage
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetStoreCustomPageRequestType::getPageID()
	 * @param EbayTradingTypeGetStoreCustomPageRequestType GetStoreCustomPageRequestType
	 * @return EbayTradingTypeGetStoreCustomPageResponseType
	 */
	public function GetStoreCustomPage(EbayTradingTypeGetStoreCustomPageRequestType $_EbayTradingTypeGetStoreCustomPageRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetStoreCustomPage(array('PageID'=>$_EbayTradingTypeGetStoreCustomPageRequestType->getPageID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetStoreOptions
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @param EbayTradingTypeGetStoreOptionsRequestType GetStoreOptionsRequestType
	 * @return EbayTradingTypeGetStoreOptionsResponseType
	 */
	public function GetStoreOptions(EbayTradingTypeGetStoreOptionsRequestType $_EbayTradingTypeGetStoreOptionsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetStoreOptions(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetStorePreferences
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @param EbayTradingTypeGetStorePreferencesRequestType GetStorePreferencesRequestType
	 * @return EbayTradingTypeGetStorePreferencesResponseType
	 */
	public function GetStorePreferences(EbayTradingTypeGetStorePreferencesRequestType $_EbayTradingTypeGetStorePreferencesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetStorePreferences(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSuggestedCategories
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetSuggestedCategoriesRequestType::getQuery()
	 * @param EbayTradingTypeGetSuggestedCategoriesRequestType GetSuggestedCategoriesRequestType
	 * @return EbayTradingTypeGetSuggestedCategoriesResponseType
	 */
	public function GetSuggestedCategories(EbayTradingTypeGetSuggestedCategoriesRequestType $_EbayTradingTypeGetSuggestedCategoriesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSuggestedCategories(array('Query'=>$_EbayTradingTypeGetSuggestedCategoriesRequestType->getQuery())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTaxTable
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @param EbayTradingTypeGetTaxTableRequestType GetTaxTableRequestType
	 * @return EbayTradingTypeGetTaxTableResponseType
	 */
	public function GetTaxTable(EbayTradingTypeGetTaxTableRequestType $_EbayTradingTypeGetTaxTableRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTaxTable(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTokenStatus
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @param EbayTradingTypeGetTokenStatusRequestType GetTokenStatusRequestType
	 * @return EbayTradingTypeGetTokenStatusResponseType
	 */
	public function GetTokenStatus(EbayTradingTypeGetTokenStatusRequestType $_EbayTradingTypeGetTokenStatusRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTokenStatus(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetUser
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetUserRequestType::getItemID()
	 * @uses EbayTradingTypeGetUserRequestType::getUserID()
	 * @uses EbayTradingTypeGetUserRequestType::getIncludeExpressRequirements()
	 * @uses EbayTradingTypeGetUserRequestType::getIncludeFeatureEligibility()
	 * @param EbayTradingTypeGetUserRequestType GetUserRequestType
	 * @return EbayTradingTypeGetUserResponseType
	 */
	public function GetUser(EbayTradingTypeGetUserRequestType $_EbayTradingTypeGetUserRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUser(array('ItemID'=>$_EbayTradingTypeGetUserRequestType->getItemID(),'UserID'=>$_EbayTradingTypeGetUserRequestType->getUserID(),'IncludeExpressRequirements'=>$_EbayTradingTypeGetUserRequestType->getIncludeExpressRequirements(),'IncludeFeatureEligibility'=>$_EbayTradingTypeGetUserRequestType->getIncludeFeatureEligibility())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetUserContactDetails
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetUserContactDetailsRequestType::getItemID()
	 * @uses EbayTradingTypeGetUserContactDetailsRequestType::getContactID()
	 * @uses EbayTradingTypeGetUserContactDetailsRequestType::getRequesterID()
	 * @param EbayTradingTypeGetUserContactDetailsRequestType GetUserContactDetailsRequestType
	 * @return EbayTradingTypeGetUserContactDetailsResponseType
	 */
	public function GetUserContactDetails(EbayTradingTypeGetUserContactDetailsRequestType $_EbayTradingTypeGetUserContactDetailsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUserContactDetails(array('ItemID'=>$_EbayTradingTypeGetUserContactDetailsRequestType->getItemID(),'ContactID'=>$_EbayTradingTypeGetUserContactDetailsRequestType->getContactID(),'RequesterID'=>$_EbayTradingTypeGetUserContactDetailsRequestType->getRequesterID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetUserDisputes
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetUserDisputesRequestType::getDisputeFilterType()
	 * @uses EbayTradingTypeGetUserDisputesRequestType::getDisputeSortType()
	 * @uses EbayTradingTypeGetUserDisputesRequestType::getModTimeFrom()
	 * @uses EbayTradingTypeGetUserDisputesRequestType::getModTimeTo()
	 * @uses EbayTradingTypeGetUserDisputesRequestType::getPagination()
	 * @param EbayTradingTypeGetUserDisputesRequestType GetUserDisputesRequestType
	 * @return EbayTradingTypeGetUserDisputesResponseType
	 */
	public function GetUserDisputes(EbayTradingTypeGetUserDisputesRequestType $_EbayTradingTypeGetUserDisputesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUserDisputes(array('DisputeFilterType'=>$_EbayTradingTypeGetUserDisputesRequestType->getDisputeFilterType(),'DisputeSortType'=>$_EbayTradingTypeGetUserDisputesRequestType->getDisputeSortType(),'ModTimeFrom'=>$_EbayTradingTypeGetUserDisputesRequestType->getModTimeFrom(),'ModTimeTo'=>$_EbayTradingTypeGetUserDisputesRequestType->getModTimeTo(),'Pagination'=>$_EbayTradingTypeGetUserDisputesRequestType->getPagination())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetUserPreferences
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetUserPreferencesRequestType::getShowBidderNoticePreferences()
	 * @uses EbayTradingTypeGetUserPreferencesRequestType::getShowCombinedPaymentPreferences()
	 * @uses EbayTradingTypeGetUserPreferencesRequestType::getShowCrossPromotionPreferences()
	 * @uses EbayTradingTypeGetUserPreferencesRequestType::getShowSellerPaymentPreferences()
	 * @uses EbayTradingTypeGetUserPreferencesRequestType::getShowEndOfAuctionEmailPreferences()
	 * @uses EbayTradingTypeGetUserPreferencesRequestType::getShowSellerFavoriteItemPreferences()
	 * @uses EbayTradingTypeGetUserPreferencesRequestType::getShowProStoresPreferences()
	 * @uses EbayTradingTypeGetUserPreferencesRequestType::getShowEmailShipmentTrackingNumberPreference()
	 * @uses EbayTradingTypeGetUserPreferencesRequestType::getShowRequiredShipPhoneNumberPreference()
	 * @uses EbayTradingTypeGetUserPreferencesRequestType::getShowSellerExcludeShipToLocationPreference()
	 * @uses EbayTradingTypeGetUserPreferencesRequestType::getShowUnpaidItemAssistancePreference()
	 * @uses EbayTradingTypeGetUserPreferencesRequestType::getShowPurchaseReminderEmailPreferences()
	 * @uses EbayTradingTypeGetUserPreferencesRequestType::getShowUnpaidItemAssistanceExclusionList()
	 * @uses EbayTradingTypeGetUserPreferencesRequestType::getShowSellerProfilePreferences()
	 * @param EbayTradingTypeGetUserPreferencesRequestType GetUserPreferencesRequestType
	 * @return EbayTradingTypeGetUserPreferencesResponseType
	 */
	public function GetUserPreferences(EbayTradingTypeGetUserPreferencesRequestType $_EbayTradingTypeGetUserPreferencesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUserPreferences(array('ShowBidderNoticePreferences'=>$_EbayTradingTypeGetUserPreferencesRequestType->getShowBidderNoticePreferences(),'ShowCombinedPaymentPreferences'=>$_EbayTradingTypeGetUserPreferencesRequestType->getShowCombinedPaymentPreferences(),'ShowCrossPromotionPreferences'=>$_EbayTradingTypeGetUserPreferencesRequestType->getShowCrossPromotionPreferences(),'ShowSellerPaymentPreferences'=>$_EbayTradingTypeGetUserPreferencesRequestType->getShowSellerPaymentPreferences(),'ShowEndOfAuctionEmailPreferences'=>$_EbayTradingTypeGetUserPreferencesRequestType->getShowEndOfAuctionEmailPreferences(),'ShowSellerFavoriteItemPreferences'=>$_EbayTradingTypeGetUserPreferencesRequestType->getShowSellerFavoriteItemPreferences(),'ShowProStoresPreferences'=>$_EbayTradingTypeGetUserPreferencesRequestType->getShowProStoresPreferences(),'ShowEmailShipmentTrackingNumberPreference'=>$_EbayTradingTypeGetUserPreferencesRequestType->getShowEmailShipmentTrackingNumberPreference(),'ShowRequiredShipPhoneNumberPreference'=>$_EbayTradingTypeGetUserPreferencesRequestType->getShowRequiredShipPhoneNumberPreference(),'ShowSellerExcludeShipToLocationPreference'=>$_EbayTradingTypeGetUserPreferencesRequestType->getShowSellerExcludeShipToLocationPreference(),'ShowUnpaidItemAssistancePreference'=>$_EbayTradingTypeGetUserPreferencesRequestType->getShowUnpaidItemAssistancePreference(),'ShowPurchaseReminderEmailPreferences'=>$_EbayTradingTypeGetUserPreferencesRequestType->getShowPurchaseReminderEmailPreferences(),'ShowUnpaidItemAssistanceExclusionList'=>$_EbayTradingTypeGetUserPreferencesRequestType->getShowUnpaidItemAssistanceExclusionList(),'ShowSellerProfilePreferences'=>$_EbayTradingTypeGetUserPreferencesRequestType->getShowSellerProfilePreferences())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetVeROReasonCodeDetails
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetVeROReasonCodeDetailsRequestType::getReasonCodeID()
	 * @uses EbayTradingTypeGetVeROReasonCodeDetailsRequestType::getReturnAllSites()
	 * @param EbayTradingTypeGetVeROReasonCodeDetailsRequestType GetVeROReasonCodeDetailsRequestType
	 * @return EbayTradingTypeGetVeROReasonCodeDetailsResponseType
	 */
	public function GetVeROReasonCodeDetails(EbayTradingTypeGetVeROReasonCodeDetailsRequestType $_EbayTradingTypeGetVeROReasonCodeDetailsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetVeROReasonCodeDetails(array('ReasonCodeID'=>$_EbayTradingTypeGetVeROReasonCodeDetailsRequestType->getReasonCodeID(),'ReturnAllSites'=>$_EbayTradingTypeGetVeROReasonCodeDetailsRequestType->getReturnAllSites())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetVeROReportStatus
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetVeROReportStatusRequestType::getVeROReportPacketID()
	 * @uses EbayTradingTypeGetVeROReportStatusRequestType::getItemID()
	 * @uses EbayTradingTypeGetVeROReportStatusRequestType::getIncludeReportedItemDetails()
	 * @uses EbayTradingTypeGetVeROReportStatusRequestType::getTimeFrom()
	 * @uses EbayTradingTypeGetVeROReportStatusRequestType::getTimeTo()
	 * @uses EbayTradingTypeGetVeROReportStatusRequestType::getPagination()
	 * @param EbayTradingTypeGetVeROReportStatusRequestType GetVeROReportStatusRequestType
	 * @return EbayTradingTypeGetVeROReportStatusResponseType
	 */
	public function GetVeROReportStatus(EbayTradingTypeGetVeROReportStatusRequestType $_EbayTradingTypeGetVeROReportStatusRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetVeROReportStatus(array('VeROReportPacketID'=>$_EbayTradingTypeGetVeROReportStatusRequestType->getVeROReportPacketID(),'ItemID'=>$_EbayTradingTypeGetVeROReportStatusRequestType->getItemID(),'IncludeReportedItemDetails'=>$_EbayTradingTypeGetVeROReportStatusRequestType->getIncludeReportedItemDetails(),'TimeFrom'=>$_EbayTradingTypeGetVeROReportStatusRequestType->getTimeFrom(),'TimeTo'=>$_EbayTradingTypeGetVeROReportStatusRequestType->getTimeTo(),'Pagination'=>$_EbayTradingTypeGetVeROReportStatusRequestType->getPagination())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWantItNowPost
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetWantItNowPostRequestType::getPostID()
	 * @param EbayTradingTypeGetWantItNowPostRequestType GetWantItNowPostRequestType
	 * @return EbayTradingTypeGetWantItNowPostResponseType
	 */
	public function GetWantItNowPost(EbayTradingTypeGetWantItNowPostRequestType $_EbayTradingTypeGetWantItNowPostRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWantItNowPost(array('PostID'=>$_EbayTradingTypeGetWantItNowPostRequestType->getPostID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWantItNowSearchResults
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeGetWantItNowSearchResultsRequestType::getCategoryID()
	 * @uses EbayTradingTypeGetWantItNowSearchResultsRequestType::getQuery()
	 * @uses EbayTradingTypeGetWantItNowSearchResultsRequestType::getSearchInDescription()
	 * @uses EbayTradingTypeGetWantItNowSearchResultsRequestType::getSearchWorldwide()
	 * @uses EbayTradingTypeGetWantItNowSearchResultsRequestType::getPagination()
	 * @param EbayTradingTypeGetWantItNowSearchResultsRequestType GetWantItNowSearchResultsRequestType
	 * @return EbayTradingTypeGetWantItNowSearchResultsResponseType
	 */
	public function GetWantItNowSearchResults(EbayTradingTypeGetWantItNowSearchResultsRequestType $_EbayTradingTypeGetWantItNowSearchResultsRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWantItNowSearchResults(array('CategoryID'=>$_EbayTradingTypeGetWantItNowSearchResultsRequestType->getCategoryID(),'Query'=>$_EbayTradingTypeGetWantItNowSearchResultsRequestType->getQuery(),'SearchInDescription'=>$_EbayTradingTypeGetWantItNowSearchResultsRequestType->getSearchInDescription(),'SearchWorldwide'=>$_EbayTradingTypeGetWantItNowSearchResultsRequestType->getSearchWorldwide(),'Pagination'=>$_EbayTradingTypeGetWantItNowSearchResultsRequestType->getPagination())));
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
	 * @return EbayTradingTypeGetWantItNowSearchResultsResponseType
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