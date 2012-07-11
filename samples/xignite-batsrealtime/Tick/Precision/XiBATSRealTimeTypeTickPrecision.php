<?php
/**
 * Class file for XiBATSRealTimeTypeTickPrecision
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeTypeTickPrecision
 * @date 08/07/2012
 */
class XiBATSRealTimeTypeTickPrecision extends XiBATSRealTimeWsdlClass
{
	/**
	 * Constant for value 'Tick'
	 * @return string 'Tick'
	 */
	const VALUE_TICK = 'Tick';
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
	 * Constructor
	 * @return XiBATSRealTimeTypeTickPrecision
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
		return in_array($_value,array(self::VALUE_TICK,self::VALUE_SECOND,self::VALUE_MINUTE,self::VALUE_HOUR));
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