<?php
/**
 * Class file for YMailTypeIncludeMsgOnReply
 * @date 02/07/2012
 */
/**
 * Class YMailTypeIncludeMsgOnReply
 * @date 02/07/2012
 */
class YMailTypeIncludeMsgOnReply extends YMailWsdlClass
{
	/**
	 * Constant for value 'none'
	 * @return string 'none'
	 */
	const VALUE_NONE = 'none';
	/**
	 * Constant for value 'short'
	 * @return string 'short'
	 */
	const VALUE_SHORT = 'short';
	/**
	 * Constant for value 'full'
	 * @return string 'full'
	 */
	const VALUE_FULL = 'full';
	/**
	 * Constructor
	 * @return YMailTypeIncludeMsgOnReply
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_SHORT,self::VALUE_FULL));
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