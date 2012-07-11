<?php
/**
 * Class file for EbayTradingTypePayoutMethodType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePayoutMethodType
 * @date 04/07/2012
 */
class EbayTradingTypePayoutMethodType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'PAYPAL'
	 * Meta informations :
	 * 	- documentation : This value indicates that the seller wants eBay to distribute payouts to their PayPal account.
	 * @return string 'PAYPAL'
	 */
	const VALUE_PAYPAL = 'PAYPAL';
	/**
	 * Constant for value 'EFT'
	 * Meta informations :
	 * 	- documentation : This value indicates that the seller wants eBay to distribute payouts to their bank account via EFT (Electronic Funds Transfer).
	 * @return string 'EFT'
	 */
	const VALUE_EFT = 'EFT';
	/**
	 * Constant for value 'MONEYBOOKERS'
	 * Meta informations :
	 * 	- documentation : This value indicates that the seller wants eBay to distribute payouts to their Moneybookers (Skrill) account.
	 * @return string 'MONEYBOOKERS'
	 */
	const VALUE_MONEYBOOKERS = 'MONEYBOOKERS';
	/**
	 * Constructor
	 * @return EbayTradingTypePayoutMethodType
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
		return in_array($_value,array(self::VALUE_PAYPAL,self::VALUE_EFT,self::VALUE_MONEYBOOKERS));
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