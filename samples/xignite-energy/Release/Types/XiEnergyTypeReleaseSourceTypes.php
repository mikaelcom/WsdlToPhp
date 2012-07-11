<?php
/**
 * Class file for XiEnergyTypeReleaseSourceTypes
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeReleaseSourceTypes
 * @date 08/07/2012
 */
class XiEnergyTypeReleaseSourceTypes extends XiEnergyWsdlClass
{
	/**
	 * Constant for value 'All'
	 * @return string 'All'
	 */
	const VALUE_ALL = 'All';
	/**
	 * Constant for value 'SEC'
	 * @return string 'SEC'
	 */
	const VALUE_SEC = 'SEC';
	/**
	 * Constant for value 'BusinessWire'
	 * @return string 'BusinessWire'
	 */
	const VALUE_BUSINESSWIRE = 'BusinessWire';
	/**
	 * Constant for value 'PRNewsWire'
	 * @return string 'PRNewsWire'
	 */
	const VALUE_PRNEWSWIRE = 'PRNewsWire';
	/**
	 * Constant for value 'MarketWire'
	 * @return string 'MarketWire'
	 */
	const VALUE_MARKETWIRE = 'MarketWire';
	/**
	 * Constant for value 'CNW'
	 * @return string 'CNW'
	 */
	const VALUE_CNW = 'CNW';
	/**
	 * Constructor
	 * @return XiEnergyTypeReleaseSourceTypes
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
		return in_array($_value,array(self::VALUE_ALL,self::VALUE_SEC,self::VALUE_BUSINESSWIRE,self::VALUE_PRNEWSWIRE,self::VALUE_MARKETWIRE,self::VALUE_CNW));
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