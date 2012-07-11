<?php
/**
 * Class file for EbayTradingTypeSetSellingManagerItemAutomationRuleRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetSellingManagerItemAutomationRuleRequestType
 * Documentation : Revises, or adds to, the set of Selling Manager automation rules associated with an item. <br> <br> This call is subject to change without notice; the deprecation process is inapplicable to this call. <br> <br> Using this call, you can add an autolist rule. You also can add a second chance offer rule (restricted to auction items and auction templates). Note that autorelist rules can only be set on templates. An autorelist rule for an item is inherited from a template. <br> <br> This call also enables you to specify particular information about automation rules. <br> <br> If a node is not passed in the call, the setting for the corresponding automation rule remains unchanged. <br> <br> Although this call can revise (overwrite) an existing rule, this call cannot delete an automation rule. (Instead, use DeleteSellingManagerItemAutomationRule.)
 * @date 04/07/2012
 */
class EbayTradingTypeSetSellingManagerItemAutomationRuleRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The item ID whose automation rules you want to change.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The AutomatedRelistingRule
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The information for the automated relisting rule to be associated with the item.
	 * @var EbayTradingTypeSellingManagerAutoRelistType
	 */
	public $AutomatedRelistingRule;
	/**
	 * The AutomatedSecondChanceOfferRule
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The information for the automated second chance offer rule to be associated with the item.
	 * @var EbayTradingTypeSellingManagerAutoSecondChanceOfferType
	 */
	public $AutomatedSecondChanceOfferRule;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeSellingManagerAutoRelistType AutomatedRelistingRule
	 * @param EbayTradingTypeSellingManagerAutoSecondChanceOfferType AutomatedSecondChanceOfferRule
	 * @return EbayTradingTypeSetSellingManagerItemAutomationRuleRequestType
	 */
	public function __construct($_ItemID = null,$_AutomatedRelistingRule = null,$_AutomatedSecondChanceOfferRule = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'AutomatedRelistingRule'=>$_AutomatedRelistingRule,'AutomatedSecondChanceOfferRule'=>$_AutomatedSecondChanceOfferRule));
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
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