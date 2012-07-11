<?php
/**
 * Class file for XiOFACTypeAlternateNameTypes
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeAlternateNameTypes
 * @date 08/07/2012
 */
class XiOFACTypeAlternateNameTypes extends XiOFACWsdlClass
{
	/**
	 * Constant for value 'aka'
	 * @return string 'aka'
	 */
	const VALUE_AKA = 'aka';
	/**
	 * Constant for value 'fka'
	 * @return string 'fka'
	 */
	const VALUE_FKA = 'fka';
	/**
	 * Constant for value 'nka'
	 * @return string 'nka'
	 */
	const VALUE_NKA = 'nka';
	/**
	 * Constructor
	 * @return XiOFACTypeAlternateNameTypes
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
		return in_array($_value,array(self::VALUE_AKA,self::VALUE_FKA,self::VALUE_NKA));
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