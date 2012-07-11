<?php
/**
 * Class file for YMailTypeSearchSizeCheck
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSearchSizeCheck
 * @date 02/07/2012
 */
class YMailTypeSearchSizeCheck extends YMailWsdlClass
{
	/**
	 * Constant for value 'ignoresize'
	 * @return string 'ignoresize'
	 */
	const VALUE_IGNORESIZE = 'ignoresize';
	/**
	 * Constant for value 'smaller'
	 * @return string 'smaller'
	 */
	const VALUE_SMALLER = 'smaller';
	/**
	 * Constant for value 'larger'
	 * @return string 'larger'
	 */
	const VALUE_LARGER = 'larger';
	/**
	 * Constant for value 'eq'
	 * @return string 'eq'
	 */
	const VALUE_EQ = 'eq';
	/**
	 * Constructor
	 * @return YMailTypeSearchSizeCheck
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
		return in_array($_value,array(self::VALUE_IGNORESIZE,self::VALUE_SMALLER,self::VALUE_LARGER,self::VALUE_EQ));
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