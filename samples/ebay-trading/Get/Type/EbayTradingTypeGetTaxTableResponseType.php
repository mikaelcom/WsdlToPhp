<?php
/**
 * Class file for EbayTradingTypeGetTaxTableResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetTaxTableResponseType
 * Documentation : Response to GetTaxTableRequest.
 * @date 04/07/2012
 */
class EbayTradingTypeGetTaxTableResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The LastUpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The last time (in GMT) that the tax table was updated. Only returned if the user previously created a tax table and if the site has jurisdictions. LastUpdateTime is useful for synchronization. If you cache the user's tax table, you can use GetTaxTable to check if it has changed and whether you need to update the cached tax table.
	 * @var dateTime
	 */
	public $LastUpdateTime;
	/**
	 * The TaxTable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A container of tax jurisdiction information unique to a user/site combination. Empty if not set for user. If DetailLevel is not specified, information is only returned for the jurisdictions for which the user provided tax information. If DetailLevel is ReturnAll, tax information is returned for all possible jurisdictions, whether specified by the user or not. ShippingIncludedInTax and SalesTaxPercent are returned but are empty.
	 * @var EbayTradingTypeTaxTableType
	 */
	public $TaxTable;
	/**
	 * Constructor
	 * @param dateTime LastUpdateTime
	 * @param EbayTradingTypeTaxTableType TaxTable
	 * @return EbayTradingTypeGetTaxTableResponseType
	 */
	public function __construct($_LastUpdateTime = null,$_TaxTable = null)
	{
		EbayTradingWsdlClass::__construct(array('LastUpdateTime'=>$_LastUpdateTime,'TaxTable'=>$_TaxTable));
	}
	/**
	 * Set LastUpdateTime
	 * @param dateTime LastUpdateTime
	 * @return dateTime
	 */
	public function setLastUpdateTime($_LastUpdateTime)
	{
		return ($this->LastUpdateTime = $_LastUpdateTime);
	}
	/**
	 * Get LastUpdateTime
	 * @return dateTime
	 */
	public function getLastUpdateTime()
	{
		return $this->LastUpdateTime;
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