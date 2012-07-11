<?php
/**
 * Class file for XiInterBanksTypeRateTableCellType
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeRateTableCellType
 * @date 08/07/2012
 */
class XiInterBanksTypeRateTableCellType extends XiInterBanksWsdlClass
{
	/**
	 * Constant for value 'Today'
	 * @return string 'Today'
	 */
	const VALUE_TODAY = 'Today';
	/**
	 * Constant for value 'Yesterday'
	 * @return string 'Yesterday'
	 */
	const VALUE_YESTERDAY = 'Yesterday';
	/**
	 * Constant for value 'OneWeekAgo'
	 * @return string 'OneWeekAgo'
	 */
	const VALUE_ONEWEEKAGO = 'OneWeekAgo';
	/**
	 * Constant for value 'OneMonthAgo'
	 * @return string 'OneMonthAgo'
	 */
	const VALUE_ONEMONTHAGO = 'OneMonthAgo';
	/**
	 * Constructor
	 * @return XiInterBanksTypeRateTableCellType
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
		return in_array($_value,array(self::VALUE_TODAY,self::VALUE_YESTERDAY,self::VALUE_ONEWEEKAGO,self::VALUE_ONEMONTHAGO));
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