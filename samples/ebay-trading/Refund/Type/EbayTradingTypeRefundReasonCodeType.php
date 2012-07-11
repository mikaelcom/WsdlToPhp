<?php
/**
 * Class file for EbayTradingTypeRefundReasonCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRefundReasonCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeRefundReasonCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'CannotShipProduct'
	 * Meta informations :
	 * 	- documentation : Seller is unable to ship the product to the buyer.
	 * @return string 'CannotShipProduct'
	 */
	const VALUE_CANNOTSHIPPRODUCT = 'CannotShipProduct';
	/**
	 * Constant for value 'WrongItemShipped'
	 * Meta informations :
	 * 	- documentation : Seller shipped the wrong item to the buyer.
	 * @return string 'WrongItemShipped'
	 */
	const VALUE_WRONGITEMSHIPPED = 'WrongItemShipped';
	/**
	 * Constant for value 'ItemBadQuality'
	 * Meta informations :
	 * 	- documentation : The buyer returned the item due to its quality.
	 * @return string 'ItemBadQuality'
	 */
	const VALUE_ITEMBADQUALITY = 'ItemBadQuality';
	/**
	 * Constant for value 'ItemDamaged'
	 * Meta informations :
	 * 	- documentation : The buyer returned the item due to damage.
	 * @return string 'ItemDamaged'
	 */
	const VALUE_ITEMDAMAGED = 'ItemDamaged';
	/**
	 * Constant for value 'BuyerRemorse'
	 * Meta informations :
	 * 	- documentation : The buyer decided they did not want the item.
	 * @return string 'BuyerRemorse'
	 */
	const VALUE_BUYERREMORSE = 'BuyerRemorse';
	/**
	 * Constant for value 'Other'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeRefundReasonCodeType
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
		return in_array($_value,array(self::VALUE_CANNOTSHIPPRODUCT,self::VALUE_WRONGITEMSHIPPED,self::VALUE_ITEMBADQUALITY,self::VALUE_ITEMDAMAGED,self::VALUE_BUYERREMORSE,self::VALUE_OTHER,self::VALUE_CUSTOMCODE));
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