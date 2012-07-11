<?php
/**
 * Class file for EbayTradingTypeStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Active'
	 * Meta informations :
	 * 	- documentation : (out) Indicates that the region of origin is active.
	 * @return string 'Active'
	 */
	const VALUE_ACTIVE = 'Active';
	/**
	 * Constant for value 'Inactive'
	 * Meta informations :
	 * 	- documentation : (out) Indicates that the region of origin is inactive.
	 * @return string 'Inactive'
	 */
	const VALUE_INACTIVE = 'Inactive';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeStatusCodeType
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
		return in_array($_value,array(self::VALUE_ACTIVE,self::VALUE_INACTIVE,self::VALUE_CUSTOMCODE));
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