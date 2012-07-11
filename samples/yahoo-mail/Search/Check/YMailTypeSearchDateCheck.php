<?php
/**
 * Class file for YMailTypeSearchDateCheck
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSearchDateCheck
 * @date 02/07/2012
 */
class YMailTypeSearchDateCheck extends YMailWsdlClass
{
	/**
	 * Constant for value 'ignoredate'
	 * @return string 'ignoredate'
	 */
	const VALUE_IGNOREDATE = 'ignoredate';
	/**
	 * Constant for value 'before'
	 * @return string 'before'
	 */
	const VALUE_BEFORE = 'before';
	/**
	 * Constant for value 'after'
	 * @return string 'after'
	 */
	const VALUE_AFTER = 'after';
	/**
	 * Constant for value 'on'
	 * @return string 'on'
	 */
	const VALUE_ON = 'on';
	/**
	 * Constant for value 'since'
	 * @return string 'since'
	 */
	const VALUE_SINCE = 'since';
	/**
	 * Constructor
	 * @return YMailTypeSearchDateCheck
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
		return in_array($_value,array(self::VALUE_IGNOREDATE,self::VALUE_BEFORE,self::VALUE_AFTER,self::VALUE_ON,self::VALUE_SINCE));
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