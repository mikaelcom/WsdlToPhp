<?php
/**
 * Class file for XiSecurityTypeBondTypes
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeBondTypes
 * @date 08/07/2012
 */
class XiSecurityTypeBondTypes extends XiSecurityWsdlClass
{
	/**
	 * Constant for value 'Treasury'
	 * @return string 'Treasury'
	 */
	const VALUE_TREASURY = 'Treasury';
	/**
	 * Constructor
	 * @return XiSecurityTypeBondTypes
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
		return in_array($_value,array(self::VALUE_TREASURY));
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