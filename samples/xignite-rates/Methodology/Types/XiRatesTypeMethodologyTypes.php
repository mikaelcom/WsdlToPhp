<?php
/**
 * Class file for XiRatesTypeMethodologyTypes
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeMethodologyTypes
 * @date 08/07/2012
 */
class XiRatesTypeMethodologyTypes extends XiRatesWsdlClass
{
	/**
	 * Constant for value 'CubicSpline'
	 * @return string 'CubicSpline'
	 */
	const VALUE_CUBICSPLINE = 'CubicSpline';
	/**
	 * Constructor
	 * @return XiRatesTypeMethodologyTypes
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
		return in_array($_value,array(self::VALUE_CUBICSPLINE));
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