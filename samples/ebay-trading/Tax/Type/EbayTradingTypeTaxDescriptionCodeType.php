<?php
/**
 * Class file for EbayTradingTypeTaxDescriptionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTaxDescriptionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeTaxDescriptionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'SalesTax'
	 * Meta informations :
	 * 	- documentation : A standard sales tax charge.
	 * @return string 'SalesTax'
	 */
	const VALUE_SALESTAX = 'SalesTax';
	/**
	 * Constant for value 'ElectronicWasteRecyclingFee'
	 * Meta informations :
	 * 	- documentation : A charge for an electronic waste recycling fee.
	 * @return string 'ElectronicWasteRecyclingFee'
	 */
	const VALUE_ELECTRONICWASTERECYCLINGFEE = 'ElectronicWasteRecyclingFee';
	/**
	 * Constant for value 'TireRecyclingFee'
	 * Meta informations :
	 * 	- documentation : A charge for a tire recycling fee.
	 * @return string 'TireRecyclingFee'
	 */
	const VALUE_TIRERECYCLINGFEE = 'TireRecyclingFee';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeTaxDescriptionCodeType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_SALESTAX,self::VALUE_ELECTRONICWASTERECYCLINGFEE,self::VALUE_TIRERECYCLINGFEE,self::VALUE_CUSTOMCODE));
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