<?php
/**
 * Class file for EbayTradingTypeWarrantyOfferedCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeWarrantyOfferedCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeWarrantyOfferedCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'WarrantyOffered'
	 * Meta informations :
	 * 	- documentation : A warranty is offered for the item.
	 * @return string 'WarrantyOffered'
	 */
	const VALUE_WARRANTYOFFERED = 'WarrantyOffered';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeWarrantyOfferedCodeType
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
		return in_array($_value,array(self::VALUE_WARRANTYOFFERED,self::VALUE_CUSTOMCODE));
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