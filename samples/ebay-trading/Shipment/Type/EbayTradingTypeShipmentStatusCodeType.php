<?php
/**
 * Class file for EbayTradingTypeShipmentStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShipmentStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeShipmentStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Active'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'Active'
	 */
	const VALUE_ACTIVE = 'Active';
	/**
	 * Constant for value 'Canceled'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'Canceled'
	 */
	const VALUE_CANCELED = 'Canceled';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeShipmentStatusCodeType
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
		return in_array($_value,array(self::VALUE_ACTIVE,self::VALUE_CANCELED,self::VALUE_CUSTOMCODE));
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