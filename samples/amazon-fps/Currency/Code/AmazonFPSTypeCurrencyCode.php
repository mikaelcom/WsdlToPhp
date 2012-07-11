<?php
/**
 * Class file for AmazonFPSTypeCurrencyCode
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeCurrencyCode
 * @date 10/07/2012
 */
class AmazonFPSTypeCurrencyCode extends AmazonFPSWsdlClass
{
	/**
	 * Constant for value 'USD'
	 * @return string 'USD'
	 */
	const VALUE_USD = 'USD';
	/**
	 * Constructor
	 * @return AmazonFPSTypeCurrencyCode
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
		return in_array($_value,array(self::VALUE_USD));
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