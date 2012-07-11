<?php
/**
 * Class file for YMailTypeShowCcBcc
 * @date 02/07/2012
 */
/**
 * Class YMailTypeShowCcBcc
 * @date 02/07/2012
 */
class YMailTypeShowCcBcc extends YMailWsdlClass
{
	/**
	 * Constant for value 'show'
	 * @return string 'show'
	 */
	const VALUE_SHOW = 'show';
	/**
	 * Constant for value 'hide'
	 * @return string 'hide'
	 */
	const VALUE_HIDE = 'hide';
	/**
	 * Constructor
	 * @return YMailTypeShowCcBcc
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
		return in_array($_value,array(self::VALUE_SHOW,self::VALUE_HIDE));
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