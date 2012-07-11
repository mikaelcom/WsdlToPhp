<?php
/**
 * Class file for XiSecurityTypeBackupOptionTypes
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeBackupOptionTypes
 * @date 08/07/2012
 */
class XiSecurityTypeBackupOptionTypes extends XiSecurityWsdlClass
{
	/**
	 * Constant for value 'Option1'
	 * @return string 'Option1'
	 */
	const VALUE_OPTION1 = 'Option1';
	/**
	 * Constant for value 'Option2'
	 * @return string 'Option2'
	 */
	const VALUE_OPTION2 = 'Option2';
	/**
	 * Constant for value 'Option3'
	 * @return string 'Option3'
	 */
	const VALUE_OPTION3 = 'Option3';
	/**
	 * Constructor
	 * @return XiSecurityTypeBackupOptionTypes
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
		return in_array($_value,array(self::VALUE_OPTION1,self::VALUE_OPTION2,self::VALUE_OPTION3));
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