<?php
/**
 * Class file for XiHistoricalTypeQueryByTypes
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeQueryByTypes
 * @date 08/07/2012
 */
class XiHistoricalTypeQueryByTypes extends XiHistoricalWsdlClass
{
	/**
	 * Constant for value 'ExDate'
	 * @return string 'ExDate'
	 */
	const VALUE_EXDATE = 'ExDate';
	/**
	 * Constant for value 'RecordDate'
	 * @return string 'RecordDate'
	 */
	const VALUE_RECORDDATE = 'RecordDate';
	/**
	 * Constant for value 'PaymentDate'
	 * @return string 'PaymentDate'
	 */
	const VALUE_PAYMENTDATE = 'PaymentDate';
	/**
	 * Constructor
	 * @return XiHistoricalTypeQueryByTypes
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
		return in_array($_value,array(self::VALUE_EXDATE,self::VALUE_RECORDDATE,self::VALUE_PAYMENTDATE));
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