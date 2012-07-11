<?php
/**
 * Class file for EbayTradingTypeGetPromotionRulesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetPromotionRulesResponseType
 * Documentation : Returns all promotion rules associated with the specified item or store category.
 * @date 04/07/2012
 */
class EbayTradingTypeGetPromotionRulesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The PromotionRuleArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An array of promotion rules associated with the item or store category specified in the request.
	 * @var EbayTradingTypePromotionRuleArrayType
	 */
	public $PromotionRuleArray;
	/**
	 * Constructor
	 * @param EbayTradingTypePromotionRuleArrayType PromotionRuleArray
	 * @return EbayTradingTypeGetPromotionRulesResponseType
	 */
	public function __construct($_PromotionRuleArray = null)
	{
		EbayTradingWsdlClass::__construct(array('PromotionRuleArray'=>$_PromotionRuleArray));
	}
	/**
	 * Set PromotionRuleArray
	 * @param PromotionRuleArrayType PromotionRuleArray
	 * @return PromotionRuleArrayType
	 */
	public function setPromotionRuleArray($_PromotionRuleArray)
	{
		return ($this->PromotionRuleArray = $_PromotionRuleArray);
	}
	/**
	 * Get PromotionRuleArray
	 * @return EbayTradingTypePromotionRuleArrayType
	 */
	public function getPromotionRuleArray()
	{
		return $this->PromotionRuleArray;
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