<?php
/**
 * Class file for YMailTypeUseRichText
 * @date 02/07/2012
 */
/**
 * Class YMailTypeUseRichText
 * @date 02/07/2012
 */
class YMailTypeUseRichText extends YMailWsdlClass
{
	/**
	 * Constant for value 'dynamic'
	 * @return string 'dynamic'
	 */
	const VALUE_DYNAMIC = 'dynamic';
	/**
	 * Constant for value 'plain'
	 * @return string 'plain'
	 */
	const VALUE_PLAIN = 'plain';
	/**
	 * Constructor
	 * @return YMailTypeUseRichText
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
		return in_array($_value,array(self::VALUE_DYNAMIC,self::VALUE_PLAIN));
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