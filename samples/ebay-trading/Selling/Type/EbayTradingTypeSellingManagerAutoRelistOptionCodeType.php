<?php
/**
 * Class file for EbayTradingTypeSellingManagerAutoRelistOptionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerAutoRelistOptionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerAutoRelistOptionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'RelistImmediately'
	 * Meta informations :
	 * 	- documentation : Relist the item immediately.
	 * @return string 'RelistImmediately'
	 */
	const VALUE_RELISTIMMEDIATELY = 'RelistImmediately';
	/**
	 * Constant for value 'RelistAfterDaysHours'
	 * Meta informations :
	 * 	- documentation : Relist the item after a specified number of days and hours.
	 * @return string 'RelistAfterDaysHours'
	 */
	const VALUE_RELISTAFTERDAYSHOURS = 'RelistAfterDaysHours';
	/**
	 * Constant for value 'RelistAtSpecificTimeOfDay'
	 * Meta informations :
	 * 	- documentation : Relist the item at a specified time of day.
	 * @return string 'RelistAtSpecificTimeOfDay'
	 */
	const VALUE_RELISTATSPECIFICTIMEOFDAY = 'RelistAtSpecificTimeOfDay';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellingManagerAutoRelistOptionCodeType
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
		return in_array($_value,array(self::VALUE_RELISTIMMEDIATELY,self::VALUE_RELISTAFTERDAYSHOURS,self::VALUE_RELISTATSPECIFICTIMEOFDAY,self::VALUE_CUSTOMCODE));
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