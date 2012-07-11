<?php
/**
 * Class file for EbayTradingTypeDeleteSellingManagerItemAutomationRuleRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDeleteSellingManagerItemAutomationRuleRequestType
 * Documentation : Removes the association of Selling Manager automation rules to an item. Returns the remaining rules in the response. <br><br> This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeDeleteSellingManagerItemAutomationRuleRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the item from which to delete automation rules.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The DeleteAutomatedRelistingRule
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the automated relisting rules are removed from the item.
	 * @var boolean
	 */
	public $DeleteAutomatedRelistingRule;
	/**
	 * The DeleteAutomatedSecondChanceOfferRule
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the automated second chance offer rule is removed from the item.
	 * @var boolean
	 */
	public $DeleteAutomatedSecondChanceOfferRule;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param boolean DeleteAutomatedRelistingRule
	 * @param boolean DeleteAutomatedSecondChanceOfferRule
	 * @return EbayTradingTypeDeleteSellingManagerItemAutomationRuleRequestType
	 */
	public function __construct($_ItemID = null,$_DeleteAutomatedRelistingRule = null,$_DeleteAutomatedSecondChanceOfferRule = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'DeleteAutomatedRelistingRule'=>$_DeleteAutomatedRelistingRule,'DeleteAutomatedSecondChanceOfferRule'=>$_DeleteAutomatedSecondChanceOfferRule));
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
	 * Set DeleteAutomatedRelistingRule
	 * @param boolean DeleteAutomatedRelistingRule
	 * @return boolean
	 */
	public function setDeleteAutomatedRelistingRule($_DeleteAutomatedRelistingRule)
	{
		return ($this->DeleteAutomatedRelistingRule = $_DeleteAutomatedRelistingRule);
	}
	/**
	 * Get DeleteAutomatedRelistingRule
	 * @return boolean
	 */
	public function getDeleteAutomatedRelistingRule()
	{
		return $this->DeleteAutomatedRelistingRule;
	}
	/**
	 * Set DeleteAutomatedSecondChanceOfferRule
	 * @param boolean DeleteAutomatedSecondChanceOfferRule
	 * @return boolean
	 */
	public function setDeleteAutomatedSecondChanceOfferRule($_DeleteAutomatedSecondChanceOfferRule)
	{
		return ($this->DeleteAutomatedSecondChanceOfferRule = $_DeleteAutomatedSecondChanceOfferRule);
	}
	/**
	 * Get DeleteAutomatedSecondChanceOfferRule
	 * @return boolean
	 */
	public function getDeleteAutomatedSecondChanceOfferRule()
	{
		return $this->DeleteAutomatedSecondChanceOfferRule;
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