<?php
/**
 * Class file for EbayTradingTypeSetSellingManagerTemplateAutomationRuleRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetSellingManagerTemplateAutomationRuleRequestType
 * Documentation : Revises, or adds to, the Selling Manager automation rules associated with a template. <br> <br> This call is subject to change without notice; the deprecation process is inapplicable to this call. <br> <br> Using this call, you can add either an autorelist rule or an autolist rule, but not both. You also can add a second chance offer rule (restricted to auction items and auction templates). <br> <br> This call also enables you to specify particular information about automation rules. <br> <br> If a node is not passed in the call, the setting for the corresponding automation rule remains unchanged. <br> <br> Although this call can revise (overwrite) an existing rule, this call cannot delete an automation rule. (Instead, use DeleteSellingManagerTemplateAutomationRule.)
 * @date 04/07/2012
 */
class EbayTradingTypeSetSellingManagerTemplateAutomationRuleRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The SaleTemplateID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the Selling Manager template whose automation rules you want to change. You can obtain a SaleTemplateID by calling GetSellingManagerInventory.
	 * @var long
	 */
	public $SaleTemplateID;
	/**
	 * The AutomatedListingRule
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The information for the automated listing rule to be associated with the template.
	 * @var EbayTradingTypeSellingManagerAutoListType
	 */
	public $AutomatedListingRule;
	/**
	 * The AutomatedRelistingRule
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The information for the automated relisting rule to be associated with the template.
	 * @var EbayTradingTypeSellingManagerAutoRelistType
	 */
	public $AutomatedRelistingRule;
	/**
	 * The AutomatedSecondChanceOfferRule
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The information for the automated second chance offer rule to be associated with the template.
	 * @var EbayTradingTypeSellingManagerAutoSecondChanceOfferType
	 */
	public $AutomatedSecondChanceOfferRule;
	/**
	 * Constructor
	 * @param long SaleTemplateID
	 * @param EbayTradingTypeSellingManagerAutoListType AutomatedListingRule
	 * @param EbayTradingTypeSellingManagerAutoRelistType AutomatedRelistingRule
	 * @param EbayTradingTypeSellingManagerAutoSecondChanceOfferType AutomatedSecondChanceOfferRule
	 * @return EbayTradingTypeSetSellingManagerTemplateAutomationRuleRequestType
	 */
	public function __construct($_SaleTemplateID = null,$_AutomatedListingRule = null,$_AutomatedRelistingRule = null,$_AutomatedSecondChanceOfferRule = null)
	{
		EbayTradingWsdlClass::__construct(array('SaleTemplateID'=>$_SaleTemplateID,'AutomatedListingRule'=>$_AutomatedListingRule,'AutomatedRelistingRule'=>$_AutomatedRelistingRule,'AutomatedSecondChanceOfferRule'=>$_AutomatedSecondChanceOfferRule));
	}
	/**
	 * Set SaleTemplateID
	 * @param long SaleTemplateID
	 * @return long
	 */
	public function setSaleTemplateID($_SaleTemplateID)
	{
		return ($this->SaleTemplateID = $_SaleTemplateID);
	}
	/**
	 * Get SaleTemplateID
	 * @return long
	 */
	public function getSaleTemplateID()
	{
		return $this->SaleTemplateID;
	}
	/**
	 * Set AutomatedListingRule
	 * @param SellingManagerAutoListType AutomatedListingRule
	 * @return SellingManagerAutoListType
	 */
	public function setAutomatedListingRule($_AutomatedListingRule)
	{
		return ($this->AutomatedListingRule = $_AutomatedListingRule);
	}
	/**
	 * Get AutomatedListingRule
	 * @return EbayTradingTypeSellingManagerAutoListType
	 */
	public function getAutomatedListingRule()
	{
		return $this->AutomatedListingRule;
	}
	/**
	 * Set AutomatedRelistingRule
	 * @param SellingManagerAutoRelistType AutomatedRelistingRule
	 * @return SellingManagerAutoRelistType
	 */
	public function setAutomatedRelistingRule($_AutomatedRelistingRule)
	{
		return ($this->AutomatedRelistingRule = $_AutomatedRelistingRule);
	}
	/**
	 * Get AutomatedRelistingRule
	 * @return EbayTradingTypeSellingManagerAutoRelistType
	 */
	public function getAutomatedRelistingRule()
	{
		return $this->AutomatedRelistingRule;
	}
	/**
	 * Set AutomatedSecondChanceOfferRule
	 * @param SellingManagerAutoSecondChanceOfferType AutomatedSecondChanceOfferRule
	 * @return SellingManagerAutoSecondChanceOfferType
	 */
	public function setAutomatedSecondChanceOfferRule($_AutomatedSecondChanceOfferRule)
	{
		return ($this->AutomatedSecondChanceOfferRule = $_AutomatedSecondChanceOfferRule);
	}
	/**
	 * Get AutomatedSecondChanceOfferRule
	 * @return EbayTradingTypeSellingManagerAutoSecondChanceOfferType
	 */
	public function getAutomatedSecondChanceOfferRule()
	{
		return $this->AutomatedSecondChanceOfferRule;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>