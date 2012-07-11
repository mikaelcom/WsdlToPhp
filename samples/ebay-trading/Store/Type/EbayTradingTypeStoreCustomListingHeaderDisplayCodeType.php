<?php
/**
 * Class file for EbayTradingTypeStoreCustomListingHeaderDisplayCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreCustomListingHeaderDisplayCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeStoreCustomListingHeaderDisplayCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : No custom listing header is displayed.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Full'
	 * Meta informations :
	 * 	- documentation : The full custom listing header is displayed.
	 * @return string 'Full'
	 */
	const VALUE_FULL = 'Full';
	/**
	 * Constant for value 'FullAndLeftNavigationBar'
	 * Meta informations :
	 * 	- documentation : The full custom listing header and the left navigation bar is displayed.
	 * @return string 'FullAndLeftNavigationBar'
	 */
	const VALUE_FULLANDLEFTNAVIGATIONBAR = 'FullAndLeftNavigationBar';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeStoreCustomListingHeaderDisplayCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_FULL,self::VALUE_FULLANDLEFTNAVIGATIONBAR,self::VALUE_CUSTOMCODE));
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