<?php
/**
 * Class file for EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleRequestType
 * Documentation : Removes the association of Selling Manager automation rules to a template. Returns the remaining rules in the response. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The SaleTemplateID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the template from which you want to remove automation rules. You can obtain a SaleTemplateID by calling GetSellingManagerInventory.
	 * @var long
	 */
	public $SaleTemplateID;
	/**
	 * The DeleteAutomatedListingRule
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the automated listing rules are removed from the template.
	 * @var boolean
	 */
	public $DeleteAutomatedListingRule;
	/**
	 * The DeleteAutomatedRelistingRule
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the automated relisting rules are removed from the template.
	 * @var boolean
	 */
	public $DeleteAutomatedRelistingRule;
	/**
	 * The DeleteAutomatedSecondChanceOfferRule
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the automated second chance offer rule is removed from the template.
	 * @var boolean
	 */
	public $DeleteAutomatedSecondChanceOfferRule;
	/**
	 * Constructor
	 * @param long SaleTemplateID
	 * @param boolean DeleteAutomatedListingRule
	 * @param boolean DeleteAutomatedRelistingRule
	 * @param boolean DeleteAutomatedSecondChanceOfferRule
	 * @return EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleRequestType
	 */
	public function __construct($_SaleTemplateID = null,$_DeleteAutomatedListingRule = null,$_DeleteAutomatedRelistingRule = null,$_DeleteAutomatedSecondChanceOfferRule = null)
	{
		EbayTradingWsdlClass::__construct(array('SaleTemplateID'=>$_SaleTemplateID,'DeleteAutomatedListingRule'=>$_DeleteAutomatedListingRule,'DeleteAutomatedRelistingRule'=>$_DeleteAutomatedRelistingRule,'DeleteAutomatedSecondChanceOfferRule'=>$_DeleteAutomatedSecondChanceOfferRule));
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
	 * Set DeleteAutomatedListingRule
	 * @param boolean DeleteAutomatedListingRule
	 * @return boolean
	 */
	public function setDeleteAutomatedListingRule($_DeleteAutomatedListingRule)
	{
		return ($this->DeleteAutomatedListingRule = $_DeleteAutomatedListingRule);
	}
	/**
	 * Get DeleteAutomatedListingRule
	 * @return boolean
	 */
	public function getDeleteAutomatedListingRule()
	{
		return $this->DeleteAutomatedListingRule;
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