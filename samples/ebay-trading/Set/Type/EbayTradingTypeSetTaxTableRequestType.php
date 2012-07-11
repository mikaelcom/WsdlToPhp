<?php
/**
 * Class file for EbayTradingTypeSetTaxTableRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetTaxTableRequestType
 * Documentation : Sets the tax table for a seller on a given site.
 * @date 04/07/2012
 */
class EbayTradingTypeSetTaxTableRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The TaxTable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A container of tax jurisdiction information unique to a user/site combination.
	 * @var EbayTradingTypeTaxTableType
	 */
	public $TaxTable;
	/**
	 * Constructor
	 * @param EbayTradingTypeTaxTableType TaxTable
	 * @return EbayTradingTypeSetTaxTableRequestType
	 */
	public function __construct($_TaxTable = null)
	{
		EbayTradingWsdlClass::__construct(array('TaxTable'=>$_TaxTable));
	}
	/**
	 * Set TaxTable
	 * @param TaxTableType TaxTable
	 * @return TaxTableType
	 */
	public function setTaxTable($_TaxTable)
	{
		return ($this->TaxTable = $_TaxTable);
	}
	/**
	 * Get TaxTable
	 * @return EbayTradingTypeTaxTableType
	 */
	public function getTaxTable()
	{
		return $this->TaxTable;
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