<?php
/**
 * Class file for GGAdwordsTypeBudgetBudgetDeliveryMethod
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeBudgetBudgetDeliveryMethod
 * @date 03/07/2012
 */
class GGAdwordsTypeBudgetBudgetDeliveryMethod extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'STANDARD'
	 * Meta informations :
	 * 	- documentation : The budget server will throttle serving evenly across the entire time period.
	 * @return string 'STANDARD'
	 */
	const VALUE_STANDARD = 'STANDARD';
	/**
	 * Constant for value 'ACCELERATED'
	 * Meta informations :
	 * 	- documentation : The budget server will not throttle serving, and ads will serve as fast as possible.
	 * @return string 'ACCELERATED'
	 */
	const VALUE_ACCELERATED = 'ACCELERATED';
	/**
	 * Constructor
	 * @return GGAdwordsTypeBudgetBudgetDeliveryMethod
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
		return in_array($_value,array(self::VALUE_STANDARD,self::VALUE_ACCELERATED));
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