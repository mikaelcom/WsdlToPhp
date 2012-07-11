<?php
/**
 * Class file for XiRealTimeTypeECNTypes
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeECNTypes
 * @date 08/07/2012
 */
class XiRealTimeTypeECNTypes extends XiRealTimeWsdlClass
{
	/**
	 * Constant for value 'Island'
	 * @return string 'Island'
	 */
	const VALUE_ISLAND = 'Island';
	/**
	 * Constant for value 'INET'
	 * @return string 'INET'
	 */
	const VALUE_INET = 'INET';
	/**
	 * Constructor
	 * @return XiRealTimeTypeECNTypes
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
		return in_array($_value,array(self::VALUE_ISLAND,self::VALUE_INET));
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