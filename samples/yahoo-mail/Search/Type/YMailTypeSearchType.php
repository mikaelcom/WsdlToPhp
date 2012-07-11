<?php
/**
 * Class file for YMailTypeSearchType
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSearchType
 * @date 02/07/2012
 */
class YMailTypeSearchType extends YMailWsdlClass
{
	/**
	 * Constant for value 'body'
	 * @return string 'body'
	 */
	const VALUE_BODY = 'body';
	/**
	 * Constant for value 'header'
	 * @return string 'header'
	 */
	const VALUE_HEADER = 'header';
	/**
	 * Constant for value 'whole'
	 * @return string 'whole'
	 */
	const VALUE_WHOLE = 'whole';
	/**
	 * Constructor
	 * @return YMailTypeSearchType
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
		return in_array($_value,array(self::VALUE_BODY,self::VALUE_HEADER,self::VALUE_WHOLE));
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