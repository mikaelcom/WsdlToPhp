<?php
/**
 * Class file for EbayTradingTypePromotionRuleArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePromotionRuleArrayType
 * Documentation : One or more PromotionRules.
 * @date 04/07/2012
 */
class EbayTradingTypePromotionRuleArrayType extends EbayTradingWsdlClass
{
	/**
	 * The PromotionRule
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A rule that promotes items or a store category when a buyer views a specific item or store category.
	 * @var EbayTradingTypePromotionRuleType
	 */
	public $PromotionRule;
	/**
	 * Constructor
	 * @param EbayTradingTypePromotionRuleType PromotionRule
	 * @return EbayTradingTypePromotionRuleArrayType
	 */
	public function __construct($_PromotionRule = null)
	{
		parent::__construct(array('PromotionRule'=>$_PromotionRule));
	}
	/**
	 * Set PromotionRule
	 * @param PromotionRuleType PromotionRule
	 * @return PromotionRuleType
	 */
	public function setPromotionRule($_PromotionRule)
	{
		return ($this->PromotionRule = $_PromotionRule);
	}
	/**
	 * Get PromotionRule
	 * @return EbayTradingTypePromotionRuleType
	 */
	public function getPromotionRule()
	{
		return $this->PromotionRule;
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