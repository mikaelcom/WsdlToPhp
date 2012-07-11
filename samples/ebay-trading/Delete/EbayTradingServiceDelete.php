<?php
/**
 * Class file for EbayTradingServiceDelete
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceDelete
 * @date 04/07/2012
 */
class EbayTradingServiceDelete extends EbayTradingWsdlClass
{
	/**
	 * Method to call DeleteMyMessages
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeDeleteMyMessagesRequestType::getAlertIDs()
	 * @uses EbayTradingTypeDeleteMyMessagesRequestType::getMessageIDs()
	 * @param EbayTradingTypeDeleteMyMessagesRequestType DeleteMyMessagesRequestType
	 * @return EbayTradingTypeDeleteMyMessagesResponseType
	 */
	public function DeleteMyMessages(EbayTradingTypeDeleteMyMessagesRequestType $_EbayTradingTypeDeleteMyMessagesRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteMyMessages(array('AlertIDs'=>$_EbayTradingTypeDeleteMyMessagesRequestType->getAlertIDs(),'MessageIDs'=>$_EbayTradingTypeDeleteMyMessagesRequestType->getMessageIDs())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteSellingManagerInventoryFolder
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeDeleteSellingManagerInventoryFolderRequestType::getFolderID()
	 * @param EbayTradingTypeDeleteSellingManagerInventoryFolderRequestType DeleteSellingManagerInventoryFolderRequestType
	 * @return EbayTradingTypeDeleteSellingManagerInventoryFolderResponseType
	 */
	public function DeleteSellingManagerInventoryFolder(EbayTradingTypeDeleteSellingManagerInventoryFolderRequestType $_EbayTradingTypeDeleteSellingManagerInventoryFolderRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteSellingManagerInventoryFolder(array('FolderID'=>$_EbayTradingTypeDeleteSellingManagerInventoryFolderRequestType->getFolderID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteSellingManagerItemAutomationRule
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeDeleteSellingManagerItemAutomationRuleRequestType::getItemID()
	 * @uses EbayTradingTypeDeleteSellingManagerItemAutomationRuleRequestType::getDeleteAutomatedRelistingRule()
	 * @uses EbayTradingTypeDeleteSellingManagerItemAutomationRuleRequestType::getDeleteAutomatedSecondChanceOfferRule()
	 * @param EbayTradingTypeDeleteSellingManagerItemAutomationRuleRequestType DeleteSellingManagerItemAutomationRuleRequestType
	 * @return EbayTradingTypeDeleteSellingManagerItemAutomationRuleResponseType
	 */
	public function DeleteSellingManagerItemAutomationRule(EbayTradingTypeDeleteSellingManagerItemAutomationRuleRequestType $_EbayTradingTypeDeleteSellingManagerItemAutomationRuleRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteSellingManagerItemAutomationRule(array('ItemID'=>$_EbayTradingTypeDeleteSellingManagerItemAutomationRuleRequestType->getItemID(),'DeleteAutomatedRelistingRule'=>$_EbayTradingTypeDeleteSellingManagerItemAutomationRuleRequestType->getDeleteAutomatedRelistingRule(),'DeleteAutomatedSecondChanceOfferRule'=>$_EbayTradingTypeDeleteSellingManagerItemAutomationRuleRequestType->getDeleteAutomatedSecondChanceOfferRule())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteSellingManagerProduct
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeDeleteSellingManagerProductRequestType::getProductID()
	 * @param EbayTradingTypeDeleteSellingManagerProductRequestType DeleteSellingManagerProductRequestType
	 * @return EbayTradingTypeDeleteSellingManagerProductResponseType
	 */
	public function DeleteSellingManagerProduct(EbayTradingTypeDeleteSellingManagerProductRequestType $_EbayTradingTypeDeleteSellingManagerProductRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteSellingManagerProduct(array('ProductID'=>$_EbayTradingTypeDeleteSellingManagerProductRequestType->getProductID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteSellingManagerTemplate
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeDeleteSellingManagerTemplateRequestType::getSaleTemplateID()
	 * @param EbayTradingTypeDeleteSellingManagerTemplateRequestType DeleteSellingManagerTemplateRequestType
	 * @return EbayTradingTypeDeleteSellingManagerTemplateResponseType
	 */
	public function DeleteSellingManagerTemplate(EbayTradingTypeDeleteSellingManagerTemplateRequestType $_EbayTradingTypeDeleteSellingManagerTemplateRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteSellingManagerTemplate(array('SaleTemplateID'=>$_EbayTradingTypeDeleteSellingManagerTemplateRequestType->getSaleTemplateID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteSellingManagerTemplateAutomationRule
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleRequestType::getSaleTemplateID()
	 * @uses EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleRequestType::getDeleteAutomatedListingRule()
	 * @uses EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleRequestType::getDeleteAutomatedRelistingRule()
	 * @uses EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleRequestType::getDeleteAutomatedSecondChanceOfferRule()
	 * @param EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleRequestType DeleteSellingManagerTemplateAutomationRuleRequestType
	 * @return EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleResponseType
	 */
	public function DeleteSellingManagerTemplateAutomationRule(EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleRequestType $_EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteSellingManagerTemplateAutomationRule(array('SaleTemplateID'=>$_EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleRequestType->getSaleTemplateID(),'DeleteAutomatedListingRule'=>$_EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleRequestType->getDeleteAutomatedListingRule(),'DeleteAutomatedRelistingRule'=>$_EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleRequestType->getDeleteAutomatedRelistingRule(),'DeleteAutomatedSecondChanceOfferRule'=>$_EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleRequestType->getDeleteAutomatedSecondChanceOfferRule())));
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
	 * @return EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleResponseType
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