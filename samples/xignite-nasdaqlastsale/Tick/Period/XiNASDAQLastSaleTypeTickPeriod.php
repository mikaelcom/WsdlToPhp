<?php
/**
 * Class file for XiNASDAQLastSaleTypeTickPeriod
 * @date 08/07/2012
 */
/**
 * Class XiNASDAQLastSaleTypeTickPeriod
 * @date 08/07/2012
 */
class XiNASDAQLastSaleTypeTickPeriod extends XiNASDAQLastSaleWsdlClass
{
	/**
	 * Constant for value 'Tick'
	 * @return string 'Tick'
	 */
	const VALUE_TICK = 'Tick';
	/**
	 * Constant for value 'Millisecond'
	 * @return string 'Millisecond'
	 */
	const VALUE_MILLISECOND = 'Millisecond';
	/**
	 * Constant for value 'Second'
	 * @return string 'Second'
	 */
	const VALUE_SECOND = 'Second';
	/**
	 * Constant for value 'Minute'
	 * @return string 'Minute'
	 */
	const VALUE_MINUTE = 'Minute';
	/**
	 * Constant for value 'Hour'
	 * @return string 'Hour'
	 */
	const VALUE_HOUR = 'Hour';
	/**
	 * Constant for value 'Day'
	 * @return string 'Day'
	 */
	const VALUE_DAY = 'Day';
	/**
	 * Constant for value 'Week'
	 * @return string 'Week'
	 */
	const VALUE_WEEK = 'Week';
	/**
	 * Constant for value 'Month'
	 * @return string 'Month'
	 */
	const VALUE_MONTH = 'Month';
	/**
	 * Constructor
	 * @return XiNASDAQLastSaleTypeTickPeriod
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
		return in_array($_value,array(self::VALUE_TICK,self::VALUE_MILLISECOND,self::VALUE_SECOND,self::VALUE_MINUTE,self::VALUE_HOUR,self::VALUE_DAY,self::VALUE_WEEK,self::VALUE_MONTH));
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