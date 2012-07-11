<?php
/**
 * Class file for EbayTradingTypePromotionMethodCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePromotionMethodCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePromotionMethodCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'CrossSell'
	 * Meta informations :
	 * 	- documentation : Promote/present items that are related to or can be used with the specified item.
	 * @return string 'CrossSell'
	 */
	const VALUE_CROSSSELL = 'CrossSell';
	/**
	 * Constant for value 'UpSell'
	 * Meta informations :
	 * 	- documentation : Promote/present items that of higher quality or more expensive than the specified item.
	 * @return string 'UpSell'
	 */
	const VALUE_UPSELL = 'UpSell';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePromotionMethodCodeType
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
		return in_array($_value,array(self::VALUE_CROSSSELL,self::VALUE_UPSELL,self::VALUE_CUSTOMCODE));
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