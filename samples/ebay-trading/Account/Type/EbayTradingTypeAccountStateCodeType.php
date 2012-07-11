<?php
/**
 * Class file for EbayTradingTypeAccountStateCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAccountStateCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeAccountStateCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Active'
	 * Meta informations :
	 * 	- documentation : (out) The account is active.
	 * @return string 'Active'
	 */
	const VALUE_ACTIVE = 'Active';
	/**
	 * Constant for value 'Pending'
	 * Meta informations :
	 * 	- documentation : (out) The account has been created but is not yet active, pending additional information or processing by eBay.
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Constant for value 'Inactive'
	 * Meta informations :
	 * 	- documentation : (out) The account is inactive. No new seller account entries would be posted by eBay to the account.
	 * @return string 'Inactive'
	 */
	const VALUE_INACTIVE = 'Inactive';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeAccountStateCodeType
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
		return in_array($_value,array(self::VALUE_ACTIVE,self::VALUE_PENDING,self::VALUE_INACTIVE,self::VALUE_CUSTOMCODE));
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