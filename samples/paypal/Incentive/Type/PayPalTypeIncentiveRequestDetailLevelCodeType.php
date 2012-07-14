<?php
/**
 * Class file for PayPalTypeIncentiveRequestDetailLevelCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeIncentiveRequestDetailLevelCodeType
 * @date 14/07/2012
 */
class PayPalTypeIncentiveRequestDetailLevelCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Aggregated'
	 * @return string 'Aggregated'
	 */
	const VALUE_AGGREGATED = 'Aggregated';
	/**
	 * Constant for value 'Detail'
	 * @return string 'Detail'
	 */
	const VALUE_DETAIL = 'Detail';
	/**
	 * Constructor
	 * @return PayPalTypeIncentiveRequestDetailLevelCodeType
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
		return in_array($_value,array(self::VALUE_AGGREGATED,self::VALUE_DETAIL));
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