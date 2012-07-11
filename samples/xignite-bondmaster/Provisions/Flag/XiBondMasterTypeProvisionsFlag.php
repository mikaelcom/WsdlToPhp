<?php
/**
 * Class file for XiBondMasterTypeProvisionsFlag
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeProvisionsFlag
 * @date 08/07/2012
 */
class XiBondMasterTypeProvisionsFlag extends XiBondMasterWsdlClass
{
	/**
	 * Constant for value 'Any'
	 * @return string 'Any'
	 */
	const VALUE_ANY = 'Any';
	/**
	 * Constant for value 'True'
	 * @return string 'True'
	 */
	const VALUE_TRUE = 'True';
	/**
	 * Constant for value 'False'
	 * @return string 'False'
	 */
	const VALUE_FALSE = 'False';
	/**
	 * Constructor
	 * @return XiBondMasterTypeProvisionsFlag
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
		return in_array($_value,array(self::VALUE_ANY,self::VALUE_TRUE,self::VALUE_FALSE));
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