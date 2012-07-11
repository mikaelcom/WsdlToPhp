<?php
/**
 * Class file for YMailTypeRichTextSignature
 * @date 02/07/2012
 */
/**
 * Class YMailTypeRichTextSignature
 * @date 02/07/2012
 */
class YMailTypeRichTextSignature extends YMailWsdlClass
{
	/**
	 * Constant for value 'plain'
	 * @return string 'plain'
	 */
	const VALUE_PLAIN = 'plain';
	/**
	 * Constant for value 'dhtml'
	 * @return string 'dhtml'
	 */
	const VALUE_DHTML = 'dhtml';
	/**
	 * Constant for value 'plainhtml'
	 * @return string 'plainhtml'
	 */
	const VALUE_PLAINHTML = 'plainhtml';
	/**
	 * Constructor
	 * @return YMailTypeRichTextSignature
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
		return in_array($_value,array(self::VALUE_PLAIN,self::VALUE_DHTML,self::VALUE_PLAINHTML));
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