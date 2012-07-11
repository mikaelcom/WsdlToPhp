<?php
/**
 * Class file for EbayTradingTypeBulkCatalogListerStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBulkCatalogListerStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeBulkCatalogListerStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Preapproved'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'Preapproved'
	 */
	const VALUE_PREAPPROVED = 'Preapproved';
	/**
	 * Constant for value 'Active'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'Active'
	 */
	const VALUE_ACTIVE = 'Active';
	/**
	 * Constant for value 'OnWatch'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'OnWatch'
	 */
	const VALUE_ONWATCH = 'OnWatch';
	/**
	 * Constant for value 'OnHold'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'OnHold'
	 */
	const VALUE_ONHOLD = 'OnHold';
	/**
	 * Constant for value 'Suspended'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'Suspended'
	 */
	const VALUE_SUSPENDED = 'Suspended';
	/**
	 * Constant for value 'WatchWarn'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'WatchWarn'
	 */
	const VALUE_WATCHWARN = 'WatchWarn';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeBulkCatalogListerStatusCodeType
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
		return in_array($_value,array(self::VALUE_PREAPPROVED,self::VALUE_ACTIVE,self::VALUE_ONWATCH,self::VALUE_ONHOLD,self::VALUE_SUSPENDED,self::VALUE_WATCHWARN,self::VALUE_CUSTOMCODE));
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