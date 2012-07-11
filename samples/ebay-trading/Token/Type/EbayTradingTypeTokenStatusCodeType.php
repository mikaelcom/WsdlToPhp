<?php
/**
 * Class file for EbayTradingTypeTokenStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTokenStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeTokenStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Active'
	 * Meta informations :
	 * 	- documentation : Token is Active
	 * @return string 'Active'
	 */
	const VALUE_ACTIVE = 'Active';
	/**
	 * Constant for value 'Expired'
	 * Meta informations :
	 * 	- documentation : Token is Expired
	 * @return string 'Expired'
	 */
	const VALUE_EXPIRED = 'Expired';
	/**
	 * Constant for value 'RevokedByeBay'
	 * Meta informations :
	 * 	- documentation : Token is revoked by eBay
	 * @return string 'RevokedByeBay'
	 */
	const VALUE_REVOKEDBYEBAY = 'RevokedByeBay';
	/**
	 * Constant for value 'RevokedByUser'
	 * Meta informations :
	 * 	- documentation : Token is revoked by user
	 * @return string 'RevokedByUser'
	 */
	const VALUE_REVOKEDBYUSER = 'RevokedByUser';
	/**
	 * Constant for value 'RevokedByApp'
	 * Meta informations :
	 * 	- documentation : Token is revoked by Application
	 * @return string 'RevokedByApp'
	 */
	const VALUE_REVOKEDBYAPP = 'RevokedByApp';
	/**
	 * Constant for value 'Invalid'
	 * Meta informations :
	 * 	- documentation : Token is Invalid
	 * @return string 'Invalid'
	 */
	const VALUE_INVALID = 'Invalid';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeTokenStatusCodeType
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
		return in_array($_value,array(self::VALUE_ACTIVE,self::VALUE_EXPIRED,self::VALUE_REVOKEDBYEBAY,self::VALUE_REVOKEDBYUSER,self::VALUE_REVOKEDBYAPP,self::VALUE_INVALID,self::VALUE_CUSTOMCODE));
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