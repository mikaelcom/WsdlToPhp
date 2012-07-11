<?php
/**
 * Class file for YMailTypeUnknownContactAction
 * @date 02/07/2012
 */
/**
 * Class YMailTypeUnknownContactAction
 * @date 02/07/2012
 */
class YMailTypeUnknownContactAction extends YMailWsdlClass
{
	/**
	 * Constant for value 'always'
	 * @return string 'always'
	 */
	const VALUE_ALWAYS = 'always';
	/**
	 * Constant for value 'prompt'
	 * @return string 'prompt'
	 */
	const VALUE_PROMPT = 'prompt';
	/**
	 * Constant for value 'unspecified'
	 * @return string 'unspecified'
	 */
	const VALUE_UNSPECIFIED = 'unspecified';
	/**
	 * Constructor
	 * @return YMailTypeUnknownContactAction
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
		return in_array($_value,array(self::VALUE_ALWAYS,self::VALUE_PROMPT,self::VALUE_UNSPECIFIED));
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