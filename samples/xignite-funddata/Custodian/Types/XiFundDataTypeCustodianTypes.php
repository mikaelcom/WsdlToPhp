<?php
/**
 * Class file for XiFundDataTypeCustodianTypes
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeCustodianTypes
 * @date 08/07/2012
 */
class XiFundDataTypeCustodianTypes extends XiFundDataWsdlClass
{
	/**
	 * Constant for value 'Custodian'
	 * @return string 'Custodian'
	 */
	const VALUE_CUSTODIAN = 'Custodian';
	/**
	 * Constant for value 'SubCustodian'
	 * @return string 'SubCustodian'
	 */
	const VALUE_SUBCUSTODIAN = 'SubCustodian';
	/**
	 * Constructor
	 * @return XiFundDataTypeCustodianTypes
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
		return in_array($_value,array(self::VALUE_CUSTODIAN,self::VALUE_SUBCUSTODIAN));
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