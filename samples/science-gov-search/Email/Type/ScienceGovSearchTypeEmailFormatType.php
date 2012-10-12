<?php
/**
 * Class file for ScienceGovSearchTypeEmailFormatType
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeEmailFormatType
 * @date 13/10/2012
 */
class ScienceGovSearchTypeEmailFormatType extends ScienceGovSearchWsdlClass
{
	/**
	 * Constant for value 'HTML'
	 * @return string 'HTML'
	 */
	const VALUE_HTML = 'HTML';
	/**
	 * Constant for value 'TEXT'
	 * @return string 'TEXT'
	 */
	const VALUE_TEXT = 'TEXT';
	/**
	 * Constructor
	 * @return ScienceGovSearchTypeEmailFormatType
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
		return in_array($_value,array(self::VALUE_HTML,self::VALUE_TEXT));
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