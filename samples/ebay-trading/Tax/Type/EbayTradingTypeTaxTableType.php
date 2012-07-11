<?php
/**
 * Class file for EbayTradingTypeTaxTableType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTaxTableType
 * Documentation : Sales tax details for zero or more jurisdictions (states, provinces, etc).
 * @date 04/07/2012
 */
class EbayTradingTypeTaxTableType extends EbayTradingWsdlClass
{
	/**
	 * The TaxJurisdiction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Sales tax details for zero or more jurisdictions (states, provinces, etc). <br><br> For GetTaxTable: If DetailLevel is not specified, information is returned only for the jurisdictions for which the user provided tax information. If DetailLevel is ReturnAll, tax information is returned for all possible jurisdictions, whether specified by the user or not. ShippingIncludedInTax and SalesTaxPercent are returned, but are empty.
	 * @var EbayTradingTypeTaxJurisdictionType
	 */
	public $TaxJurisdiction;
	/**
	 * Constructor
	 * @param EbayTradingTypeTaxJurisdictionType TaxJurisdiction
	 * @return EbayTradingTypeTaxTableType
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
	 * @return EbayTradingTypeTaxJurisdictionType
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