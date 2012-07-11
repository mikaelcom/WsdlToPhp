<?php
/**
 * Class file for EbayTradingTypeSellerAccountStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerAccountStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellerAccountStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Current'
	 * Meta informations :
	 * 	- documentation : Your account is current.
	 * @return string 'Current'
	 */
	const VALUE_CURRENT = 'Current';
	/**
	 * Constant for value 'PastDue'
	 * Meta informations :
	 * 	- documentation : Your account is past due.
	 * @return string 'PastDue'
	 */
	const VALUE_PASTDUE = 'PastDue';
	/**
	 * Constant for value 'OnHold'
	 * Meta informations :
	 * 	- documentation : Your account is on hold and risking suspension.
	 * @return string 'OnHold'
	 */
	const VALUE_ONHOLD = 'OnHold';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellerAccountStatusCodeType
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
		return in_array($_value,array(self::VALUE_CURRENT,self::VALUE_PASTDUE,self::VALUE_ONHOLD,self::VALUE_CUSTOMCODE));
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