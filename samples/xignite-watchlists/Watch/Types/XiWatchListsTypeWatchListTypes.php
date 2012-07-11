<?php
/**
 * Class file for XiWatchListsTypeWatchListTypes
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeWatchListTypes
 * @date 08/07/2012
 */
class XiWatchListsTypeWatchListTypes extends XiWatchListsWsdlClass
{
	/**
	 * Constant for value 'Security'
	 * @return string 'Security'
	 */
	const VALUE_SECURITY = 'Security';
	/**
	 * Constant for value 'Currency'
	 * @return string 'Currency'
	 */
	const VALUE_CURRENCY = 'Currency';
	/**
	 * Constant for value 'InterestRates'
	 * @return string 'InterestRates'
	 */
	const VALUE_INTERESTRATES = 'InterestRates';
	/**
	 * Constant for value 'Events'
	 * @return string 'Events'
	 */
	const VALUE_EVENTS = 'Events';
	/**
	 * Constant for value 'Metals'
	 * @return string 'Metals'
	 */
	const VALUE_METALS = 'Metals';
	/**
	 * Constant for value 'Other'
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constructor
	 * @return XiWatchListsTypeWatchListTypes
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
		return in_array($_value,array(self::VALUE_SECURITY,self::VALUE_CURRENCY,self::VALUE_INTERESTRATES,self::VALUE_EVENTS,self::VALUE_METALS,self::VALUE_OTHER));
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