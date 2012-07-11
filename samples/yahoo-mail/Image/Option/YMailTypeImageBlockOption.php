<?php
/**
 * Class file for YMailTypeImageBlockOption
 * @date 02/07/2012
 */
/**
 * Class YMailTypeImageBlockOption
 * @date 02/07/2012
 */
class YMailTypeImageBlockOption extends YMailWsdlClass
{
	/**
	 * Constant for value 'none'
	 * @return string 'none'
	 */
	const VALUE_NONE = 'none';
	/**
	 * Constant for value 'all'
	 * @return string 'all'
	 */
	const VALUE_ALL = 'all';
	/**
	 * Constant for value 'remote'
	 * @return string 'remote'
	 */
	const VALUE_REMOTE = 'remote';
	/**
	 * Constructor
	 * @return YMailTypeImageBlockOption
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_ALL,self::VALUE_REMOTE));
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