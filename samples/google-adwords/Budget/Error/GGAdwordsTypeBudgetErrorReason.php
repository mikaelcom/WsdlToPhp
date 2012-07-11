<?php
/**
 * Class file for GGAdwordsTypeBudgetErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeBudgetErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeBudgetErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'BUDGET_ERROR'
	 * Meta informations :
	 * 	- documentation : Default budget error.
	 * @return string 'BUDGET_ERROR'
	 */
	const VALUE_BUDGET_ERROR = 'BUDGET_ERROR';
	/**
	 * Constant for value 'BUDGET_PERIOD_NOT_AVAILABLE'
	 * Meta informations :
	 * 	- documentation : Customer is not whitelisted for this budget period.
	 * @return string 'BUDGET_PERIOD_NOT_AVAILABLE'
	 */
	const VALUE_BUDGET_PERIOD_NOT_AVAILABLE = 'BUDGET_PERIOD_NOT_AVAILABLE';
	/**
	 * Constant for value 'MONEY_AMOUNT_IN_WRONG_CURRENCY'
	 * Meta informations :
	 * 	- documentation : A money amount was not in the expected currency.
	 * @return string 'MONEY_AMOUNT_IN_WRONG_CURRENCY'
	 */
	const VALUE_MONEY_AMOUNT_IN_WRONG_CURRENCY = 'MONEY_AMOUNT_IN_WRONG_CURRENCY';
	/**
	 * Constant for value 'MONEY_AMOUNT_LESS_THAN_CURRENCY_MINIMUM_CPC'
	 * Meta informations :
	 * 	- documentation : A money amount was less than the minimum CPC for currency.
	 * @return string 'MONEY_AMOUNT_LESS_THAN_CURRENCY_MINIMUM_CPC'
	 */
	const VALUE_MONEY_AMOUNT_LESS_THAN_CURRENCY_MINIMUM_CPC = 'MONEY_AMOUNT_LESS_THAN_CURRENCY_MINIMUM_CPC';
	/**
	 * Constant for value 'MONEY_AMOUNT_TOO_LARGE'
	 * Meta informations :
	 * 	- documentation : A money amount was greater than the maximum allowed.
	 * @return string 'MONEY_AMOUNT_TOO_LARGE'
	 */
	const VALUE_MONEY_AMOUNT_TOO_LARGE = 'MONEY_AMOUNT_TOO_LARGE';
	/**
	 * Constant for value 'NEGATIVE_MONEY_AMOUNT'
	 * Meta informations :
	 * 	- documentation : A money amount was negative.
	 * @return string 'NEGATIVE_MONEY_AMOUNT'
	 */
	const VALUE_NEGATIVE_MONEY_AMOUNT = 'NEGATIVE_MONEY_AMOUNT';
	/**
	 * Constant for value 'NON_MULTIPLE_OF_MINIMUM_CURRENCY_UNIT'
	 * Meta informations :
	 * 	- documentation : A money amount was not a multiple of a minimum unit.
	 * @return string 'NON_MULTIPLE_OF_MINIMUM_CURRENCY_UNIT'
	 */
	const VALUE_NON_MULTIPLE_OF_MINIMUM_CURRENCY_UNIT = 'NON_MULTIPLE_OF_MINIMUM_CURRENCY_UNIT';
	/**
	 * Constant for value 'INVALID_BUDGET_SCHEDULE'
	 * Meta informations :
	 * 	- documentation : Invalid budget schedule
	 * @return string 'INVALID_BUDGET_SCHEDULE'
	 */
	const VALUE_INVALID_BUDGET_SCHEDULE = 'INVALID_BUDGET_SCHEDULE';
	/**
	 * Constructor
	 * @return GGAdwordsTypeBudgetErrorReason
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
		return in_array($_value,array(self::VALUE_BUDGET_ERROR,self::VALUE_BUDGET_PERIOD_NOT_AVAILABLE,self::VALUE_MONEY_AMOUNT_IN_WRONG_CURRENCY,self::VALUE_MONEY_AMOUNT_LESS_THAN_CURRENCY_MINIMUM_CPC,self::VALUE_MONEY_AMOUNT_TOO_LARGE,self::VALUE_NEGATIVE_MONEY_AMOUNT,self::VALUE_NON_MULTIPLE_OF_MINIMUM_CURRENCY_UNIT,self::VALUE_INVALID_BUDGET_SCHEDULE));
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