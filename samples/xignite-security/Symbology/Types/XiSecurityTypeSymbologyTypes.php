<?php
/**
 * Class file for XiSecurityTypeSymbologyTypes
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeSymbologyTypes
 * @date 08/07/2012
 */
class XiSecurityTypeSymbologyTypes extends XiSecurityWsdlClass
{
	/**
	 * Constant for value 'Xignite'
	 * @return string 'Xignite'
	 */
	const VALUE_XIGNITE = 'Xignite';
	/**
	 * Constant for value 'Yahoo'
	 * @return string 'Yahoo'
	 */
	const VALUE_YAHOO = 'Yahoo';
	/**
	 * Constant for value 'Fidelity'
	 * @return string 'Fidelity'
	 */
	const VALUE_FIDELITY = 'Fidelity';
	/**
	 * Constructor
	 * @return XiSecurityTypeSymbologyTypes
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
		return in_array($_value,array(self::VALUE_XIGNITE,self::VALUE_YAHOO,self::VALUE_FIDELITY));
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