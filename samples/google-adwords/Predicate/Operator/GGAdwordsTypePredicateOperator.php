<?php
/**
 * Class file for GGAdwordsTypePredicateOperator
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypePredicateOperator
 * @date 03/07/2012
 */
class GGAdwordsTypePredicateOperator extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'EQUALS'
	 * @return string 'EQUALS'
	 */
	const VALUE_EQUALS = 'EQUALS';
	/**
	 * Constant for value 'NOT_EQUALS'
	 * @return string 'NOT_EQUALS'
	 */
	const VALUE_NOT_EQUALS = 'NOT_EQUALS';
	/**
	 * Constant for value 'IN'
	 * @return string 'IN'
	 */
	const VALUE_IN = 'IN';
	/**
	 * Constant for value 'NOT_IN'
	 * @return string 'NOT_IN'
	 */
	const VALUE_NOT_IN = 'NOT_IN';
	/**
	 * Constant for value 'GREATER_THAN'
	 * @return string 'GREATER_THAN'
	 */
	const VALUE_GREATER_THAN = 'GREATER_THAN';
	/**
	 * Constant for value 'GREATER_THAN_EQUALS'
	 * @return string 'GREATER_THAN_EQUALS'
	 */
	const VALUE_GREATER_THAN_EQUALS = 'GREATER_THAN_EQUALS';
	/**
	 * Constant for value 'LESS_THAN'
	 * @return string 'LESS_THAN'
	 */
	const VALUE_LESS_THAN = 'LESS_THAN';
	/**
	 * Constant for value 'LESS_THAN_EQUALS'
	 * @return string 'LESS_THAN_EQUALS'
	 */
	const VALUE_LESS_THAN_EQUALS = 'LESS_THAN_EQUALS';
	/**
	 * Constant for value 'STARTS_WITH'
	 * @return string 'STARTS_WITH'
	 */
	const VALUE_STARTS_WITH = 'STARTS_WITH';
	/**
	 * Constant for value 'STARTS_WITH_IGNORE_CASE'
	 * @return string 'STARTS_WITH_IGNORE_CASE'
	 */
	const VALUE_STARTS_WITH_IGNORE_CASE = 'STARTS_WITH_IGNORE_CASE';
	/**
	 * Constant for value 'CONTAINS'
	 * @return string 'CONTAINS'
	 */
	const VALUE_CONTAINS = 'CONTAINS';
	/**
	 * Constant for value 'CONTAINS_IGNORE_CASE'
	 * @return string 'CONTAINS_IGNORE_CASE'
	 */
	const VALUE_CONTAINS_IGNORE_CASE = 'CONTAINS_IGNORE_CASE';
	/**
	 * Constant for value 'DOES_NOT_CONTAIN'
	 * @return string 'DOES_NOT_CONTAIN'
	 */
	const VALUE_DOES_NOT_CONTAIN = 'DOES_NOT_CONTAIN';
	/**
	 * Constant for value 'DOES_NOT_CONTAIN_IGNORE_CASE'
	 * @return string 'DOES_NOT_CONTAIN_IGNORE_CASE'
	 */
	const VALUE_DOES_NOT_CONTAIN_IGNORE_CASE = 'DOES_NOT_CONTAIN_IGNORE_CASE';
	/**
	 * Constant for value 'UNKNOWN'
	 * Meta informations :
	 * 	- documentation : <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
	 * @return string 'UNKNOWN'
	 */
	const VALUE_UNKNOWN = 'UNKNOWN';
	/**
	 * Constructor
	 * @return GGAdwordsTypePredicateOperator
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
		return in_array($_value,array(self::VALUE_EQUALS,self::VALUE_NOT_EQUALS,self::VALUE_IN,self::VALUE_NOT_IN,self::VALUE_GREATER_THAN,self::VALUE_GREATER_THAN_EQUALS,self::VALUE_LESS_THAN,self::VALUE_LESS_THAN_EQUALS,self::VALUE_STARTS_WITH,self::VALUE_STARTS_WITH_IGNORE_CASE,self::VALUE_CONTAINS,self::VALUE_CONTAINS_IGNORE_CASE,self::VALUE_DOES_NOT_CONTAIN,self::VALUE_DOES_NOT_CONTAIN_IGNORE_CASE,self::VALUE_UNKNOWN));
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