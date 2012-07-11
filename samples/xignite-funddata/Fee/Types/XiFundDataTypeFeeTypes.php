<?php
/**
 * Class file for XiFundDataTypeFeeTypes
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeFeeTypes
 * @date 08/07/2012
 */
class XiFundDataTypeFeeTypes extends XiFundDataWsdlClass
{
	/**
	 * Constant for value 'First'
	 * @return string 'First'
	 */
	const VALUE_FIRST = 'First';
	/**
	 * Constant for value 'Next'
	 * @return string 'Next'
	 */
	const VALUE_NEXT = 'Next';
	/**
	 * Constant for value 'Last'
	 * @return string 'Last'
	 */
	const VALUE_LAST = 'Last';
	/**
	 * Constructor
	 * @return XiFundDataTypeFeeTypes
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
		return in_array($_value,array(self::VALUE_FIRST,self::VALUE_NEXT,self::VALUE_LAST));
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