<?php
/**
 * Class file for XiEdgarTypeFileTypes
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeFileTypes
 * @date 08/07/2012
 */
class XiEdgarTypeFileTypes extends XiEdgarWsdlClass
{
	/**
	 * Constant for value 'Text'
	 * @return string 'Text'
	 */
	const VALUE_TEXT = 'Text';
	/**
	 * Constant for value 'HTML'
	 * @return string 'HTML'
	 */
	const VALUE_HTML = 'HTML';
	/**
	 * Constant for value 'Img'
	 * @return string 'Img'
	 */
	const VALUE_IMG = 'Img';
	/**
	 * Constant for value 'XML'
	 * @return string 'XML'
	 */
	const VALUE_XML = 'XML';
	/**
	 * Constant for value 'Unknown'
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constructor
	 * @return XiEdgarTypeFileTypes
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
		return in_array($_value,array(self::VALUE_TEXT,self::VALUE_HTML,self::VALUE_IMG,self::VALUE_XML,self::VALUE_UNKNOWN));
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