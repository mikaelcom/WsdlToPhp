<?php
/**
 * Class file for EbayTradingTypeGetPromotionalSaleDetailsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetPromotionalSaleDetailsResponseType
 * Documentation : Contains information about promotional sales. This call is part of the Promotional Price Display feature.
 * @date 04/07/2012
 */
class EbayTradingTypeGetPromotionalSaleDetailsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The PromotionalSaleDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information about a promotional sale or sales. If you did not specify a PromotionalSaleID in the request, then all promotional sales for the seller are returned. Promotional sales enable sellers to add discounts and/or free shipping to items.
	 * @var EbayTradingTypePromotionalSaleArrayType
	 */
	public $PromotionalSaleDetails;
	/**
	 * Constructor
	 * @param EbayTradingTypePromotionalSaleArrayType PromotionalSaleDetails
	 * @return EbayTradingTypeGetPromotionalSaleDetailsResponseType
	 */
	public function __construct($_PromotionalSaleDetails = null)
	{
		EbayTradingWsdlClass::__construct(array('PromotionalSaleDetails'=>$_PromotionalSaleDetails));
	}
	/**
	 * Set PromotionalSaleDetails
	 * @param PromotionalSaleArrayType PromotionalSaleDetails
	 * @return PromotionalSaleArrayType
	 */
	public function setPromotionalSaleDetails($_PromotionalSaleDetails)
	{
		return ($this->PromotionalSaleDetails = $_PromotionalSaleDetails);
	}
	/**
	 * Get PromotionalSaleDetails
	 * @return EbayTradingTypePromotionalSaleArrayType
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