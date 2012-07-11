<?php
/**
 * Class file for XiCurrenciesTypeQuoteTypes
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeQuoteTypes
 * @date 08/07/2012
 */
class XiCurrenciesTypeQuoteTypes extends XiCurrenciesWsdlClass
{
	/**
	 * Constant for value 'RealTime'
	 * @return string 'RealTime'
	 */
	const VALUE_REALTIME = 'RealTime';
	/**
	 * Constant for value 'Delayed15Minutes'
	 * @return string 'Delayed15Minutes'
	 */
	const VALUE_DELAYED15MINUTES = 'Delayed15Minutes';
	/**
	 * Constant for value 'Delayed20Minutes'
	 * @return string 'Delayed20Minutes'
	 */
	const VALUE_DELAYED20MINUTES = 'Delayed20Minutes';
	/**
	 * Constant for value 'NotAvailable'
	 * @return string 'NotAvailable'
	 */
	const VALUE_NOTAVAILABLE = 'NotAvailable';
	/**
	 * Constructor
	 * @return XiCurrenciesTypeQuoteTypes
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
		return in_array($_value,array(self::VALUE_REALTIME,self::VALUE_DELAYED15MINUTES,self::VALUE_DELAYED20MINUTES,self::VALUE_NOTAVAILABLE));
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