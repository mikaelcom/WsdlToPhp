<?php
/**
 * Class file for EbayTradingTypeLogoTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeLogoTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeLogoTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'WinningBidderNotice'
	 * Meta informations :
	 * 	- documentation : The PayPal Winning Bidder Notice logo.
	 * @return string 'WinningBidderNotice'
	 */
	const VALUE_WINNINGBIDDERNOTICE = 'WinningBidderNotice';
	/**
	 * Constant for value 'Store'
	 * Meta informations :
	 * 	- documentation : The seller's eBay Store logo.
	 * @return string 'Store'
	 */
	const VALUE_STORE = 'Store';
	/**
	 * Constant for value 'Custom'
	 * Meta informations :
	 * 	- documentation : A custom logo specified in LogoURL.
	 * @return string 'Custom'
	 */
	const VALUE_CUSTOM = 'Custom';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeLogoTypeCodeType
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
		return in_array($_value,array(self::VALUE_WINNINGBIDDERNOTICE,self::VALUE_STORE,self::VALUE_CUSTOM,self::VALUE_CUSTOMCODE));
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