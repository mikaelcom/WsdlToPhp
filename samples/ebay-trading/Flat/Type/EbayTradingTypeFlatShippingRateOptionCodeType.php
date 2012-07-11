<?php
/**
 * Class file for EbayTradingTypeFlatShippingRateOptionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFlatShippingRateOptionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeFlatShippingRateOptionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ChargeAmountForEachAdditionalItem'
	 * Meta informations :
	 * 	- documentation : Charge highest shipping cost for the first item and X amount for each additional item.
	 * @return string 'ChargeAmountForEachAdditionalItem'
	 */
	const VALUE_CHARGEAMOUNTFOREACHADDITIONALITEM = 'ChargeAmountForEachAdditionalItem';
	/**
	 * Constant for value 'DeductAmountFromEachAdditionalItem'
	 * Meta informations :
	 * 	- documentation : Charge highest shipping cost for the first item and deduct X amount from the shipping cost of each additional item.
	 * @return string 'DeductAmountFromEachAdditionalItem'
	 */
	const VALUE_DEDUCTAMOUNTFROMEACHADDITIONALITEM = 'DeductAmountFromEachAdditionalItem';
	/**
	 * Constant for value 'ShipAdditionalItemsFree'
	 * Meta informations :
	 * 	- documentation : Charge highest shipping cost for the first item and ship each additional item free.
	 * @return string 'ShipAdditionalItemsFree'
	 */
	const VALUE_SHIPADDITIONALITEMSFREE = 'ShipAdditionalItemsFree';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeFlatShippingRateOptionCodeType
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
		return in_array($_value,array(self::VALUE_CHARGEAMOUNTFOREACHADDITIONALITEM,self::VALUE_DEDUCTAMOUNTFROMEACHADDITIONALITEM,self::VALUE_SHIPADDITIONALITEMSFREE,self::VALUE_CUSTOMCODE));
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