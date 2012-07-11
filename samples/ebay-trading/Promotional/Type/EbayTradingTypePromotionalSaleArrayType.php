<?php
/**
 * Class file for EbayTradingTypePromotionalSaleArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePromotionalSaleArrayType
 * Documentation : An array of promotional sales.
 * @date 04/07/2012
 */
class EbayTradingTypePromotionalSaleArrayType extends EbayTradingWsdlClass
{
	/**
	 * The PromotionalSale
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains promotional sale information based on the request. If you did not specify a PromotionalSaleID in the request, then all promotional sales for the seller are returned.
	 * @var EbayTradingTypePromotionalSaleType
	 */
	public $PromotionalSale;
	/**
	 * Constructor
	 * @param EbayTradingTypePromotionalSaleType PromotionalSale
	 * @return EbayTradingTypePromotionalSaleArrayType
	 */
	public function __construct($_PromotionalSale = null)
	{
		parent::__construct(array('PromotionalSale'=>$_PromotionalSale));
	}
	/**
	 * Set PromotionalSale
	 * @param PromotionalSaleType PromotionalSale
	 * @return PromotionalSaleType
	 */
	public function setPromotionalSale($_PromotionalSale)
	{
		return ($this->PromotionalSale = $_PromotionalSale);
	}
	/**
	 * Get PromotionalSale
	 * @return EbayTradingTypePromotionalSaleType
	 */
	public function getPromotionalSale()
	{
		return $this->PromotionalSale;
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