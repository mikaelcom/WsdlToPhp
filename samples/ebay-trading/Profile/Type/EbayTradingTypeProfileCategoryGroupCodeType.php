<?php
/**
 * Class file for EbayTradingTypeProfileCategoryGroupCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeProfileCategoryGroupCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeProfileCategoryGroupCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Inherit'
	 * Meta informations :
	 * 	- documentation : Default value.
	 * @return string 'Inherit'
	 */
	const VALUE_INHERIT = 'Inherit';
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : None.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'ALL'
	 * Meta informations :
	 * 	- documentation : For Business Policies, the 'ALL' enumeration value represents all eBay categories except for motor vehicles.
	 * @return string 'ALL'
	 */
	const VALUE_ALL = 'ALL';
	/**
	 * Constant for value 'MOTORS_VEHICLE'
	 * Meta informations :
	 * 	- documentation : For Business Policies, the 'MOTORS_VEHICLE' enumeration value represents all motor vehicle categories.
	 * @return string 'MOTORS_VEHICLE'
	 */
	const VALUE_MOTORS_VEHICLE = 'MOTORS_VEHICLE';
	/**
	 * Constructor
	 * @return EbayTradingTypeProfileCategoryGroupCodeType
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
		return in_array($_value,array(self::VALUE_INHERIT,self::VALUE_NONE,self::VALUE_ALL,self::VALUE_MOTORS_VEHICLE));
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