<?php
/**
 * Class file for EbayTradingTypeAddressTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddressTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeAddressTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Contact'
	 * Meta informations :
	 * 	- documentation : This value indicates that the address contained in the <b>NonProfitAddress</b> container is for a non-registered charity organization.
	 * @return string 'Contact'
	 */
	const VALUE_CONTACT = 'Contact';
	/**
	 * Constant for value 'Registered'
	 * Meta informations :
	 * 	- documentation : This value indicates that the address contained in the <b>NonProfitAddress</b> container is for a charity organization registered with eBay Giving Works.
	 * @return string 'Registered'
	 */
	const VALUE_REGISTERED = 'Registered';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : This value is reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeAddressTypeCodeType
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
		return in_array($_value,array(self::VALUE_CONTACT,self::VALUE_REGISTERED,self::VALUE_CUSTOMCODE));
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