<?php
/**
 * Class file for GGAdwordsTypeOperator
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeOperator
 * @date 03/07/2012
 */
class GGAdwordsTypeOperator extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'ADD'
	 * Meta informations :
	 * 	- documentation : The ADD operator.
	 * @return string 'ADD'
	 */
	const VALUE_ADD = 'ADD';
	/**
	 * Constant for value 'REMOVE'
	 * Meta informations :
	 * 	- documentation : The REMOVE operator.
	 * @return string 'REMOVE'
	 */
	const VALUE_REMOVE = 'REMOVE';
	/**
	 * Constant for value 'SET'
	 * Meta informations :
	 * 	- documentation : The SET operator (used for updates).
	 * @return string 'SET'
	 */
	const VALUE_SET = 'SET';
	/**
	 * Constructor
	 * @return GGAdwordsTypeOperator
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
		return in_array($_value,array(self::VALUE_ADD,self::VALUE_REMOVE,self::VALUE_SET));
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