<?php
/**
 * Class file for EbayTradingTypeMeasurementSystemCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMeasurementSystemCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeMeasurementSystemCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'English'
	 * Meta informations :
	 * 	- documentation : English system of measurement.
	 * @return string 'English'
	 */
	const VALUE_ENGLISH = 'English';
	/**
	 * Constant for value 'Metric'
	 * Meta informations :
	 * 	- documentation : Metric system of measurement.
	 * @return string 'Metric'
	 */
	const VALUE_METRIC = 'Metric';
	/**
	 * Constructor
	 * @return EbayTradingTypeMeasurementSystemCodeType
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
		return in_array($_value,array(self::VALUE_ENGLISH,self::VALUE_METRIC));
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