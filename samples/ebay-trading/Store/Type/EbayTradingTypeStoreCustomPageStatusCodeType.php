<?php
/**
 * Class file for EbayTradingTypeStoreCustomPageStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreCustomPageStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeStoreCustomPageStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Active'
	 * Meta informations :
	 * 	- documentation : The page is visible.
	 * @return string 'Active'
	 */
	const VALUE_ACTIVE = 'Active';
	/**
	 * Constant for value 'Delete'
	 * Meta informations :
	 * 	- documentation : The page is to be deleted.
	 * @return string 'Delete'
	 */
	const VALUE_DELETE = 'Delete';
	/**
	 * Constant for value 'Inactive'
	 * Meta informations :
	 * 	- documentation : The page is not visible.
	 * @return string 'Inactive'
	 */
	const VALUE_INACTIVE = 'Inactive';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeStoreCustomPageStatusCodeType
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
		return in_array($_value,array(self::VALUE_ACTIVE,self::VALUE_DELETE,self::VALUE_INACTIVE,self::VALUE_CUSTOMCODE));
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