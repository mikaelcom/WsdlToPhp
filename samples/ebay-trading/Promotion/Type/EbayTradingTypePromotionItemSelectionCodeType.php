<?php
/**
 * Class file for EbayTradingTypePromotionItemSelectionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePromotionItemSelectionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePromotionItemSelectionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Manual'
	 * Meta informations :
	 * 	- documentation : (out) Manual selection.
	 * @return string 'Manual'
	 */
	const VALUE_MANUAL = 'Manual';
	/**
	 * Constant for value 'Automatic'
	 * Meta informations :
	 * 	- documentation : (out) Automatic selection.
	 * @return string 'Automatic'
	 */
	const VALUE_AUTOMATIC = 'Automatic';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePromotionItemSelectionCodeType
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
		return in_array($_value,array(self::VALUE_MANUAL,self::VALUE_AUTOMATIC,self::VALUE_CUSTOMCODE));
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