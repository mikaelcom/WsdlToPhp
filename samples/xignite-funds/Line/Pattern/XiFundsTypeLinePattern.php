<?php
/**
 * Class file for XiFundsTypeLinePattern
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeLinePattern
 * @date 08/07/2012
 */
class XiFundsTypeLinePattern extends XiFundsWsdlClass
{
	/**
	 * Constant for value 'Solid'
	 * @return string 'Solid'
	 */
	const VALUE_SOLID = 'Solid';
	/**
	 * Constant for value 'Dot'
	 * @return string 'Dot'
	 */
	const VALUE_DOT = 'Dot';
	/**
	 * Constant for value 'Dash'
	 * @return string 'Dash'
	 */
	const VALUE_DASH = 'Dash';
	/**
	 * Constant for value 'DashDot'
	 * @return string 'DashDot'
	 */
	const VALUE_DASHDOT = 'DashDot';
	/**
	 * Constant for value 'DashDotDot'
	 * @return string 'DashDotDot'
	 */
	const VALUE_DASHDOTDOT = 'DashDotDot';
	/**
	 * Constructor
	 * @return XiFundsTypeLinePattern
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
		return in_array($_value,array(self::VALUE_SOLID,self::VALUE_DOT,self::VALUE_DASH,self::VALUE_DASHDOT,self::VALUE_DASHDOTDOT));
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