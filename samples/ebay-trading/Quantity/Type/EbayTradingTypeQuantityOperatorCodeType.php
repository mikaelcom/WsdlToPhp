<?php
/**
 * Class file for EbayTradingTypeQuantityOperatorCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeQuantityOperatorCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeQuantityOperatorCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'LessThan'
	 * Meta informations :
	 * 	- documentation : Used by QuantityOperator to specify that you are seeking quantities less than Quantity.
	 * @return string 'LessThan'
	 */
	const VALUE_LESSTHAN = 'LessThan';
	/**
	 * Constant for value 'LessThanOrEqual'
	 * Meta informations :
	 * 	- documentation : Used by QuantityOperator to specify that you are seeking quantities less than or equal to Quantity.
	 * @return string 'LessThanOrEqual'
	 */
	const VALUE_LESSTHANOREQUAL = 'LessThanOrEqual';
	/**
	 * Constant for value 'Equal'
	 * Meta informations :
	 * 	- documentation : Used by QuantityOperator to specify that you are seeking quantities equal to Quantity.
	 * @return string 'Equal'
	 */
	const VALUE_EQUAL = 'Equal';
	/**
	 * Constant for value 'GreaterThan'
	 * Meta informations :
	 * 	- documentation : Used by QuantityOperator to specify that you are seeking quantities greater than Quantity.
	 * @return string 'GreaterThan'
	 */
	const VALUE_GREATERTHAN = 'GreaterThan';
	/**
	 * Constant for value 'GreaterThanOrEqual'
	 * Meta informations :
	 * 	- documentation : Used by QuantityOperator to specify that you are seeking quantities greater than or equal to Quantity.
	 * @return string 'GreaterThanOrEqual'
	 */
	const VALUE_GREATERTHANOREQUAL = 'GreaterThanOrEqual';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeQuantityOperatorCodeType
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
		return in_array($_value,array(self::VALUE_LESSTHAN,self::VALUE_LESSTHANOREQUAL,self::VALUE_EQUAL,self::VALUE_GREATERTHAN,self::VALUE_GREATERTHANOREQUAL,self::VALUE_CUSTOMCODE));
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