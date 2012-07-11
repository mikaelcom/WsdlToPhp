<?php
/**
 * Class file for EbayShoppingTypeTaxTableType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeTaxTableType
 * Documentation : Sales tax details for zero or more jurisdictions (states, provinces, etc).
 * @date 05/07/2012
 */
class EbayShoppingTypeTaxTableType extends EbayShoppingWsdlClass
{
	/**
	 * The TaxJurisdiction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Sales tax details for zero or more jurisdictions (states, provinces, etc). Information is only returned for the jurisdictions for which the user provided tax information. ShippingIncludedInTax and SalesTaxPercent are returned but are empty.
	 * @var EbayShoppingTypeTaxJurisdictionType
	 */
	public $TaxJurisdiction;
	/**
	 * Constructor
	 * @param EbayShoppingTypeTaxJurisdictionType TaxJurisdiction
	 * @return EbayShoppingTypeTaxTableType
	 */
	public function __construct($_TaxJurisdiction = null)
	{
		parent::__construct(array('TaxJurisdiction'=>$_TaxJurisdiction));
	}
	/**
	 * Set TaxJurisdiction
	 * @param TaxJurisdictionType TaxJurisdiction
	 * @return TaxJurisdictionType
	 */
	public function setTaxJurisdiction($_TaxJurisdiction)
	{
		return ($this->TaxJurisdiction = $_TaxJurisdiction);
	}
	/**
	 * Get TaxJurisdiction
	 * @return EbayShoppingTypeTaxJurisdictionType
	 */
	public function getTaxJurisdiction()
	{
		return $this->TaxJurisdiction;
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