<?php
/**
 * Class file for ScienceGovSearchTypeBooleanType
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeBooleanType
 * @date 13/10/2012
 */
class ScienceGovSearchTypeBooleanType extends ScienceGovSearchWsdlClass
{
	/**
	 * Constant for value 'AND'
	 * @return string 'AND'
	 */
	const VALUE_AND = 'AND';
	/**
	 * Constant for value 'OR'
	 * @return string 'OR'
	 */
	const VALUE_OR = 'OR';
	/**
	 * Constant for value 'NOT'
	 * @return string 'NOT'
	 */
	const VALUE_NOT = 'NOT';
	/**
	 * Constructor
	 * @return ScienceGovSearchTypeBooleanType
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
		return in_array($_value,array(self::VALUE_AND,self::VALUE_OR,self::VALUE_NOT));
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