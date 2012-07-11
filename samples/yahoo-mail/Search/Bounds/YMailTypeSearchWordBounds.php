<?php
/**
 * Class file for YMailTypeSearchWordBounds
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSearchWordBounds
 * @date 02/07/2012
 */
class YMailTypeSearchWordBounds extends YMailWsdlClass
{
	/**
	 * Constant for value 'nobounds'
	 * @return string 'nobounds'
	 */
	const VALUE_NOBOUNDS = 'nobounds';
	/**
	 * Constant for value 'whitespaceonly'
	 * @return string 'whitespaceonly'
	 */
	const VALUE_WHITESPACEONLY = 'whitespaceonly';
	/**
	 * Constant for value 'whitespacepunctuation'
	 * @return string 'whitespacepunctuation'
	 */
	const VALUE_WHITESPACEPUNCTUATION = 'whitespacepunctuation';
	/**
	 * Constructor
	 * @return YMailTypeSearchWordBounds
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
		return in_array($_value,array(self::VALUE_NOBOUNDS,self::VALUE_WHITESPACEONLY,self::VALUE_WHITESPACEPUNCTUATION));
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