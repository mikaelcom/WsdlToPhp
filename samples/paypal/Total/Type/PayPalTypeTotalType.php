<?php
/**
 * Class file for PayPalTypeTotalType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeTotalType
 * @date 14/07/2012
 */
class PayPalTypeTotalType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Total'
	 * @return string 'Total'
	 */
	const VALUE_TOTAL = 'Total';
	/**
	 * Constant for value 'EstimatedTotal'
	 * @return string 'EstimatedTotal'
	 */
	const VALUE_ESTIMATEDTOTAL = 'EstimatedTotal';
	/**
	 * Constructor
	 * @return PayPalTypeTotalType
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
		return in_array($_value,array(self::VALUE_TOTAL,self::VALUE_ESTIMATEDTOTAL));
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