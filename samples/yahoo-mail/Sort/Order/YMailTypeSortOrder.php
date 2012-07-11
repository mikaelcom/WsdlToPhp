<?php
/**
 * Class file for YMailTypeSortOrder
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSortOrder
 * @date 02/07/2012
 */
class YMailTypeSortOrder extends YMailWsdlClass
{
	/**
	 * Constant for value 'up'
	 * @return string 'up'
	 */
	const VALUE_UP = 'up';
	/**
	 * Constant for value 'down'
	 * @return string 'down'
	 */
	const VALUE_DOWN = 'down';
	/**
	 * Constructor
	 * @return YMailTypeSortOrder
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
		return in_array($_value,array(self::VALUE_UP,self::VALUE_DOWN));
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