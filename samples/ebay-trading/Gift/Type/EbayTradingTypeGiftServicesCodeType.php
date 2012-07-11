<?php
/**
 * Class file for EbayTradingTypeGiftServicesCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGiftServicesCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeGiftServicesCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'GiftExpressShipping'
	 * Meta informations :
	 * 	- documentation : The seller is offering to ship the item via an express shipping method as explained in the item description.
	 * @return string 'GiftExpressShipping'
	 */
	const VALUE_GIFTEXPRESSSHIPPING = 'GiftExpressShipping';
	/**
	 * Constant for value 'GiftShipToRecipient'
	 * Meta informations :
	 * 	- documentation : The seller is offering to ship to the gift recipient (instead of to the buyer) after payment clears.
	 * @return string 'GiftShipToRecipient'
	 */
	const VALUE_GIFTSHIPTORECIPIENT = 'GiftShipToRecipient';
	/**
	 * Constant for value 'GiftWrap'
	 * Meta informations :
	 * 	- documentation : The seller is offering to wrap the item (and optionally include a card) as explained in the item description.
	 * @return string 'GiftWrap'
	 */
	const VALUE_GIFTWRAP = 'GiftWrap';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeGiftServicesCodeType
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
		return in_array($_value,array(self::VALUE_GIFTEXPRESSSHIPPING,self::VALUE_GIFTSHIPTORECIPIENT,self::VALUE_GIFTWRAP,self::VALUE_CUSTOMCODE));
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