<?php
/**
 * Class file for EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleResponseType
 * Documentation : Contains the set of automation rules associated with the specified template.
 * @date 04/07/2012
 */
class EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The AutomatedListingRule
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the remaining automated listing rules associated with this template.
	 * @var EbayTradingTypeSellingManagerAutoListType
	 */
	public $AutomatedListingRule;
	/**
	 * The AutomatedRelistingRule
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the remaining automated relisting rules associated with this template.
	 * @var EbayTradingTypeSellingManagerAutoRelistType
	 */
	public $AutomatedRelistingRule;
	/**
	 * The AutomatedSecondChanceOfferRule
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the remaining automated second chance offer rule associated with this template.
	 * @var EbayTradingTypeSellingManagerAutoSecondChanceOfferType
	 */
	public $AutomatedSecondChanceOfferRule;
	/**
	 * The Fees
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains fees that may be incurred when items are listed using the automation rules (e.g., a scheduled listing fee). Use of an automation rule does not in itself have a fee, but use can result in a fee.
	 * @var EbayTradingTypeFeesType
	 */
	public $Fees;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerAutoListType AutomatedListingRule
	 * @param EbayTradingTypeSellingManagerAutoRelistType AutomatedRelistingRule
	 * @param EbayTradingTypeSellingManagerAutoSecondChanceOfferType AutomatedSecondChanceOfferRule
	 * @param EbayTradingTypeFeesType Fees
	 * @return EbayTradingTypeDeleteSellingManagerTemplateAutomationRuleResponseType
	 */
	public function __construct($_AutomatedListingRule = null,$_AutomatedRelistingRule = null,$_AutomatedSecondChanceOfferRule = null,$_Fees = null)
	{
		EbayTradingWsdlClass::__construct(array('AutomatedListingRule'=>$_AutomatedListingRule,'AutomatedRelistingRule'=>$_AutomatedRelistingRule,'AutomatedSecondChanceOfferRule'=>$_AutomatedSecondChanceOfferRule,'Fees'=>$_Fees));
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
	 * Set Fees
	 * @param FeesType Fees
	 * @return FeesType
	 */
	public function setFees($_Fees)
	{
		return ($this->Fees = $_Fees);
	}
	/**
	 * Get Fees
	 * @return EbayTradingTypeFeesType
	 */
	public function getFees()
	{
		return $this->Fees;
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