<?php
/**
 * Class file for XiInterBanksTypePeriodTypes
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypePeriodTypes
 * @date 08/07/2012
 */
class XiInterBanksTypePeriodTypes extends XiInterBanksWsdlClass
{
	/**
	 * Constant for value 'Daily'
	 * @return string 'Daily'
	 */
	const VALUE_DAILY = 'Daily';
	/**
	 * Constant for value 'Monthly'
	 * @return string 'Monthly'
	 */
	const VALUE_MONTHLY = 'Monthly';
	/**
	 * Constant for value 'Quarterly'
	 * @return string 'Quarterly'
	 */
	const VALUE_QUARTERLY = 'Quarterly';
	/**
	 * Constant for value 'Annually'
	 * @return string 'Annually'
	 */
	const VALUE_ANNUALLY = 'Annually';
	/**
	 * Constant for value 'RealTime'
	 * @return string 'RealTime'
	 */
	const VALUE_REALTIME = 'RealTime';
	/**
	 * Constant for value 'Weekly'
	 * @return string 'Weekly'
	 */
	const VALUE_WEEKLY = 'Weekly';
	/**
	 * Constructor
	 * @return XiInterBanksTypePeriodTypes
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
		return in_array($_value,array(self::VALUE_DAILY,self::VALUE_MONTHLY,self::VALUE_QUARTERLY,self::VALUE_ANNUALLY,self::VALUE_REALTIME,self::VALUE_WEEKLY));
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