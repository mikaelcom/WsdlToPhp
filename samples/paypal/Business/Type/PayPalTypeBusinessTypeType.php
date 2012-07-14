<?php
/**
 * Class file for PayPalTypeBusinessTypeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBusinessTypeType
 * @date 14/07/2012
 */
class PayPalTypeBusinessTypeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'Individual'
	 * @return string 'Individual'
	 */
	const VALUE_INDIVIDUAL = 'Individual';
	/**
	 * Constant for value 'Proprietorship'
	 * @return string 'Proprietorship'
	 */
	const VALUE_PROPRIETORSHIP = 'Proprietorship';
	/**
	 * Constant for value 'Partnership'
	 * @return string 'Partnership'
	 */
	const VALUE_PARTNERSHIP = 'Partnership';
	/**
	 * Constant for value 'Corporation'
	 * @return string 'Corporation'
	 */
	const VALUE_CORPORATION = 'Corporation';
	/**
	 * Constant for value 'Nonprofit'
	 * @return string 'Nonprofit'
	 */
	const VALUE_NONPROFIT = 'Nonprofit';
	/**
	 * Constant for value 'Government'
	 * @return string 'Government'
	 */
	const VALUE_GOVERNMENT = 'Government';
	/**
	 * Constructor
	 * @return PayPalTypeBusinessTypeType
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
		return in_array($_value,array(self::VALUE_UNKNOWN,self::VALUE_INDIVIDUAL,self::VALUE_PROPRIETORSHIP,self::VALUE_PARTNERSHIP,self::VALUE_CORPORATION,self::VALUE_NONPROFIT,self::VALUE_GOVERNMENT));
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