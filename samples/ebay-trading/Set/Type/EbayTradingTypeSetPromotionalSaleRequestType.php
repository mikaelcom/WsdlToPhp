<?php
/**
 * Class file for EbayTradingTypeSetPromotionalSaleRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetPromotionalSaleRequestType
 * Documentation : Creates or modifies a promotional sale. Promotional sales enable sellers to apply discounts and/or free shipping across many listings.
 * @date 04/07/2012
 */
class EbayTradingTypeSetPromotionalSaleRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Action
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies adding, removing, or modifying promotional sales.
	 * @var EbayTradingTypeModifyActionCodeType
	 */
	public $Action;
	/**
	 * The PromotionalSaleDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies details about the promotional sale.
	 * @var EbayTradingTypePromotionalSaleType
	 */
	public $PromotionalSaleDetails;
	/**
	 * Constructor
	 * @param EbayTradingTypeModifyActionCodeType Action
	 * @param EbayTradingTypePromotionalSaleType PromotionalSaleDetails
	 * @return EbayTradingTypeSetPromotionalSaleRequestType
	 */
	public function __construct($_Action = null,$_PromotionalSaleDetails = null)
	{
		EbayTradingWsdlClass::__construct(array('Action'=>$_Action,'PromotionalSaleDetails'=>$_PromotionalSaleDetails));
	}
	/**
	 * Set Action
	 * @param ModifyActionCodeType Action
	 * @return ModifyActionCodeType
	 */
	public function setAction($_Action)
	{
		return ($this->Action = EbayTradingTypeModifyActionCodeType::valueIsValid($_Action)?$_Action:null);
	}
	/**
	 * Get Action
	 * @return EbayTradingTypeModifyActionCodeType
	 */
	public function getAction()
	{
		return $this->Action;
	}
	/**
	 * Set PromotionalSaleDetails
	 * @param PromotionalSaleType PromotionalSaleDetails
	 * @return PromotionalSaleType
	 */
	public function setPromotionalSaleDetails($_PromotionalSaleDetails)
	{
		return ($this->PromotionalSaleDetails = $_PromotionalSaleDetails);
	}
	/**
	 * Get PromotionalSaleDetails
	 * @return EbayTradingTypePromotionalSaleType
	 */
	public function getPromotionalSaleDetails()
	{
		return $this->PromotionalSaleDetails;
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