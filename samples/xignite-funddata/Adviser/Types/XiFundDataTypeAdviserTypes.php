<?php
/**
 * Class file for XiFundDataTypeAdviserTypes
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeAdviserTypes
 * @date 08/07/2012
 */
class XiFundDataTypeAdviserTypes extends XiFundDataWsdlClass
{
	/**
	 * Constant for value 'Adviser'
	 * @return string 'Adviser'
	 */
	const VALUE_ADVISER = 'Adviser';
	/**
	 * Constant for value 'SubAdviser'
	 * @return string 'SubAdviser'
	 */
	const VALUE_SUBADVISER = 'SubAdviser';
	/**
	 * Constructor
	 * @return XiFundDataTypeAdviserTypes
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
		return in_array($_value,array(self::VALUE_ADVISER,self::VALUE_SUBADVISER));
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