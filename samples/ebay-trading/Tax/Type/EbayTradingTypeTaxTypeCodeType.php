<?php
/**
 * Class file for EbayTradingTypeTaxTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTaxTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeTaxTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'SalesTax'
	 * Meta informations :
	 * 	- documentation : A standard sales tax charge.
	 * @return string 'SalesTax'
	 */
	const VALUE_SALESTAX = 'SalesTax';
	/**
	 * Constant for value 'WasteRecyclingFee'
	 * Meta informations :
	 * 	- documentation : A charge for an electronic waste recycling fee.
	 * @return string 'WasteRecyclingFee'
	 */
	const VALUE_WASTERECYCLINGFEE = 'WasteRecyclingFee';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeTaxTypeCodeType
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
		return in_array($_value,array(self::VALUE_SALESTAX,self::VALUE_WASTERECYCLINGFEE,self::VALUE_CUSTOMCODE));
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