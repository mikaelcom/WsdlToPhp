<?php
/**
 * Class file for GGAdwordsTypeBudgetBudgetPeriod
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeBudgetBudgetPeriod
 * @date 03/07/2012
 */
class GGAdwordsTypeBudgetBudgetPeriod extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'DAILY'
	 * @return string 'DAILY'
	 */
	const VALUE_DAILY = 'DAILY';
	/**
	 * Constructor
	 * @return GGAdwordsTypeBudgetBudgetPeriod
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
		return in_array($_value,array(self::VALUE_DAILY));
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