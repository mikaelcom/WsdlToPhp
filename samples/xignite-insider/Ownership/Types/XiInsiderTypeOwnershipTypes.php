<?php
/**
 * Class file for XiInsiderTypeOwnershipTypes
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeOwnershipTypes
 * @date 08/07/2012
 */
class XiInsiderTypeOwnershipTypes extends XiInsiderWsdlClass
{
	/**
	 * Constant for value 'Direct'
	 * @return string 'Direct'
	 */
	const VALUE_DIRECT = 'Direct';
	/**
	 * Constant for value 'Indirect'
	 * @return string 'Indirect'
	 */
	const VALUE_INDIRECT = 'Indirect';
	/**
	 * Constant for value 'Both'
	 * @return string 'Both'
	 */
	const VALUE_BOTH = 'Both';
	/**
	 * Constructor
	 * @return XiInsiderTypeOwnershipTypes
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
		return in_array($_value,array(self::VALUE_DIRECT,self::VALUE_INDIRECT,self::VALUE_BOTH));
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