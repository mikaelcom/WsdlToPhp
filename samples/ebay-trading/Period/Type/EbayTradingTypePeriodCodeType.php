<?php
/**
 * Class file for EbayTradingTypePeriodCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePeriodCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePeriodCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Days_1'
	 * @return string 'Days_1'
	 */
	const VALUE_DAYS_1 = 'Days_1';
	/**
	 * Constant for value 'Days_30'
	 * @return string 'Days_30'
	 */
	const VALUE_DAYS_30 = 'Days_30';
	/**
	 * Constant for value 'Days_180'
	 * @return string 'Days_180'
	 */
	const VALUE_DAYS_180 = 'Days_180';
	/**
	 * Constant for value 'Days_360'
	 * @return string 'Days_360'
	 */
	const VALUE_DAYS_360 = 'Days_360';
	/**
	 * Constant for value 'Days_540'
	 * @return string 'Days_540'
	 */
	const VALUE_DAYS_540 = 'Days_540';
	/**
	 * Constant for value 'CustomCode'
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePeriodCodeType
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
		return in_array($_value,array(self::VALUE_DAYS_1,self::VALUE_DAYS_30,self::VALUE_DAYS_180,self::VALUE_DAYS_360,self::VALUE_DAYS_540,self::VALUE_CUSTOMCODE));
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