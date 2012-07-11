<?php
/**
 * Class file for EbayTradingTypeFeedbackRatingDetailCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFeedbackRatingDetailCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeFeedbackRatingDetailCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ItemAsDescribed'
	 * Meta informations :
	 * 	- documentation : Detailed seller rating in the area of "item as described."
	 * @return string 'ItemAsDescribed'
	 */
	const VALUE_ITEMASDESCRIBED = 'ItemAsDescribed';
	/**
	 * Constant for value 'Communication'
	 * Meta informations :
	 * 	- documentation : Detailed seller rating in the area of "communication."
	 * @return string 'Communication'
	 */
	const VALUE_COMMUNICATION = 'Communication';
	/**
	 * Constant for value 'ShippingTime'
	 * Meta informations :
	 * 	- documentation : Detailed seller rating in the area of "shipping time." Inapplicable to motor vehicle items.
	 * @return string 'ShippingTime'
	 */
	const VALUE_SHIPPINGTIME = 'ShippingTime';
	/**
	 * Constant for value 'ShippingAndHandlingCharges'
	 * Meta informations :
	 * 	- documentation : Detailed seller rating in the area of "charges for shipping and handling." Inapplicable to motor vehicle items.
	 * @return string 'ShippingAndHandlingCharges'
	 */
	const VALUE_SHIPPINGANDHANDLINGCHARGES = 'ShippingAndHandlingCharges';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeFeedbackRatingDetailCodeType
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
		return in_array($_value,array(self::VALUE_ITEMASDESCRIBED,self::VALUE_COMMUNICATION,self::VALUE_SHIPPINGTIME,self::VALUE_SHIPPINGANDHANDLINGCHARGES,self::VALUE_CUSTOMCODE));
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