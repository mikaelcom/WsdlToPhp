<?php
/**
 * Class file for EbayTradingTypeShippingFeatureCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShippingFeatureCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeShippingFeatureCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'DeliveryConfirmation'
	 * Meta informations :
	 * 	- documentation : Confirmation requested.
	 * @return string 'DeliveryConfirmation'
	 */
	const VALUE_DELIVERYCONFIRMATION = 'DeliveryConfirmation';
	/**
	 * Constant for value 'SignatureConfirmation'
	 * Meta informations :
	 * 	- documentation : Signature requested upon receipt.
	 * @return string 'SignatureConfirmation'
	 */
	const VALUE_SIGNATURECONFIRMATION = 'SignatureConfirmation';
	/**
	 * Constant for value 'StealthPostage'
	 * Meta informations :
	 * 	- documentation : Stealth postage.
	 * @return string 'StealthPostage'
	 */
	const VALUE_STEALTHPOSTAGE = 'StealthPostage';
	/**
	 * Constant for value 'SaturdayDelivery'
	 * Meta informations :
	 * 	- documentation : Saturday delivery.
	 * @return string 'SaturdayDelivery'
	 */
	const VALUE_SATURDAYDELIVERY = 'SaturdayDelivery';
	/**
	 * Constant for value 'Other'
	 * Meta informations :
	 * 	- documentation : Other.
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'NotDefined'
	 * Meta informations :
	 * 	- documentation : Not defined.
	 * @return string 'NotDefined'
	 */
	const VALUE_NOTDEFINED = 'NotDefined';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeShippingFeatureCodeType
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
		return in_array($_value,array(self::VALUE_DELIVERYCONFIRMATION,self::VALUE_SIGNATURECONFIRMATION,self::VALUE_STEALTHPOSTAGE,self::VALUE_SATURDAYDELIVERY,self::VALUE_OTHER,self::VALUE_NOTDEFINED,self::VALUE_CUSTOMCODE));
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