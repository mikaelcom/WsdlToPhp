<?php
/**
 * Class file for EbayShoppingTypeCharityStatusCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeCharityStatusCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeCharityStatusCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Valid'
	 * Meta informations :
	 * 	- documentation : (out) The specified nonprofit charity organization is a valid nonprofit charity organization according to the requirements of the dedicated eBay Giving Works provider.
	 * @return string 'Valid'
	 */
	const VALUE_VALID = 'Valid';
	/**
	 * Constant for value 'NoLongerValid'
	 * Meta informations :
	 * 	- documentation : (out) The specified nonprofit charity organization is no longer a valid nonprofit charity organization according to the requirements of the dedicated eBay Giving Works provider.
	 * @return string 'NoLongerValid'
	 */
	const VALUE_NOLONGERVALID = 'NoLongerValid';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypeCharityStatusCodeType
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
		return in_array($_value,array(self::VALUE_VALID,self::VALUE_NOLONGERVALID,self::VALUE_CUSTOMCODE));
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