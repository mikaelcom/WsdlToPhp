<?php
/**
 * Class file for PayPalTypeSolutionTypeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSolutionTypeType
 * @date 14/07/2012
 */
class PayPalTypeSolutionTypeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Mark'
	 * @return string 'Mark'
	 */
	const VALUE_MARK = 'Mark';
	/**
	 * Constant for value 'Sole'
	 * @return string 'Sole'
	 */
	const VALUE_SOLE = 'Sole';
	/**
	 * Constructor
	 * @return PayPalTypeSolutionTypeType
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
		return in_array($_value,array(self::VALUE_MARK,self::VALUE_SOLE));
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