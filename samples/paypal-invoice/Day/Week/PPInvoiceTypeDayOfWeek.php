<?php
/**
 * Class file for PPInvoiceTypeDayOfWeek
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeDayOfWeek
 * @date 02/07/2012
 */
class PPInvoiceTypeDayOfWeek extends PPInvoiceWsdlClass
{
	/**
	 * Constant for value 'NO_DAY_SPECIFIED'
	 * @return string 'NO_DAY_SPECIFIED'
	 */
	const VALUE_NO_DAY_SPECIFIED = 'NO_DAY_SPECIFIED';
	/**
	 * Constant for value 'SUNDAY'
	 * @return string 'SUNDAY'
	 */
	const VALUE_SUNDAY = 'SUNDAY';
	/**
	 * Constant for value 'MONDAY'
	 * @return string 'MONDAY'
	 */
	const VALUE_MONDAY = 'MONDAY';
	/**
	 * Constant for value 'TUESDAY'
	 * @return string 'TUESDAY'
	 */
	const VALUE_TUESDAY = 'TUESDAY';
	/**
	 * Constant for value 'WEDNESDAY'
	 * @return string 'WEDNESDAY'
	 */
	const VALUE_WEDNESDAY = 'WEDNESDAY';
	/**
	 * Constant for value 'THURSDAY'
	 * @return string 'THURSDAY'
	 */
	const VALUE_THURSDAY = 'THURSDAY';
	/**
	 * Constant for value 'FRIDAY'
	 * @return string 'FRIDAY'
	 */
	const VALUE_FRIDAY = 'FRIDAY';
	/**
	 * Constant for value 'SATURDAY'
	 * @return string 'SATURDAY'
	 */
	const VALUE_SATURDAY = 'SATURDAY';
	/**
	 * Constructor
	 * @return PPInvoiceTypeDayOfWeek
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
		return in_array($_value,array(self::VALUE_NO_DAY_SPECIFIED,self::VALUE_SUNDAY,self::VALUE_MONDAY,self::VALUE_TUESDAY,self::VALUE_WEDNESDAY,self::VALUE_THURSDAY,self::VALUE_FRIDAY,self::VALUE_SATURDAY));
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