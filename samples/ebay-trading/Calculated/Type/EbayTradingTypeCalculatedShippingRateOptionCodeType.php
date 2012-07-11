<?php
/**
 * Class file for EbayTradingTypeCalculatedShippingRateOptionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCalculatedShippingRateOptionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeCalculatedShippingRateOptionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'CombinedItemWeight'
	 * Meta informations :
	 * 	- documentation : Calculate the Actual Shipping Rate from Combined Item Weight
	 * @return string 'CombinedItemWeight'
	 */
	const VALUE_COMBINEDITEMWEIGHT = 'CombinedItemWeight';
	/**
	 * Constant for value 'IndividualItemWeight'
	 * Meta informations :
	 * 	- documentation : Calculate the Actual Shipping Rate from Individual Item Weight
	 * @return string 'IndividualItemWeight'
	 */
	const VALUE_INDIVIDUALITEMWEIGHT = 'IndividualItemWeight';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeCalculatedShippingRateOptionCodeType
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
		return in_array($_value,array(self::VALUE_COMBINEDITEMWEIGHT,self::VALUE_INDIVIDUALITEMWEIGHT,self::VALUE_CUSTOMCODE));
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