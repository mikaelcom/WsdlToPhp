<?php
/**
 * Class file for PayPalTypeShippingServiceCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeShippingServiceCodeType
 * @date 14/07/2012
 */
class PayPalTypeShippingServiceCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'UPSGround'
	 * Meta informations :
	 * 	- documentation : UPS Ground
	 * @return string 'UPSGround'
	 */
	const VALUE_UPSGROUND = 'UPSGround';
	/**
	 * Constant for value 'UPS3rdDay'
	 * Meta informations :
	 * 	- documentation : UPS 3rd Day
	 * @return string 'UPS3rdDay'
	 */
	const VALUE_UPS3RDDAY = 'UPS3rdDay';
	/**
	 * Constant for value 'UPS2ndDay'
	 * Meta informations :
	 * 	- documentation : UPS 2nd Day
	 * @return string 'UPS2ndDay'
	 */
	const VALUE_UPS2NDDAY = 'UPS2ndDay';
	/**
	 * Constant for value 'UPSNextDay'
	 * Meta informations :
	 * 	- documentation : UPS Next Day.
	 * @return string 'UPSNextDay'
	 */
	const VALUE_UPSNEXTDAY = 'UPSNextDay';
	/**
	 * Constant for value 'USPSPriority'
	 * Meta informations :
	 * 	- documentation : USPS Priority.
	 * @return string 'USPSPriority'
	 */
	const VALUE_USPSPRIORITY = 'USPSPriority';
	/**
	 * Constant for value 'USPSParcel'
	 * Meta informations :
	 * 	- documentation : USPS Parcel.
	 * @return string 'USPSParcel'
	 */
	const VALUE_USPSPARCEL = 'USPSParcel';
	/**
	 * Constant for value 'USPSMedia'
	 * Meta informations :
	 * 	- documentation : USPS Media.
	 * @return string 'USPSMedia'
	 */
	const VALUE_USPSMEDIA = 'USPSMedia';
	/**
	 * Constant for value 'USPSFirstClass'
	 * Meta informations :
	 * 	- documentation : USPS First Class
	 * @return string 'USPSFirstClass'
	 */
	const VALUE_USPSFIRSTCLASS = 'USPSFirstClass';
	/**
	 * Constant for value 'ShippingMethodStandard'
	 * Meta informations :
	 * 	- documentation : ShippingMethodStandard - used by merchant tool only
	 * @return string 'ShippingMethodStandard'
	 */
	const VALUE_SHIPPINGMETHODSTANDARD = 'ShippingMethodStandard';
	/**
	 * Constant for value 'ShippingMethodExpress'
	 * Meta informations :
	 * 	- documentation : ShippingMethodExpress- used by merchant tool only
	 * @return string 'ShippingMethodExpress'
	 */
	const VALUE_SHIPPINGMETHODEXPRESS = 'ShippingMethodExpress';
	/**
	 * Constant for value 'ShippingMethodNextDay'
	 * Meta informations :
	 * 	- documentation : ShippingMethodNextDay- used by merchant tool only
	 * @return string 'ShippingMethodNextDay'
	 */
	const VALUE_SHIPPINGMETHODNEXTDAY = 'ShippingMethodNextDay';
	/**
	 * Constant for value 'USPSExpressMail'
	 * Meta informations :
	 * 	- documentation : USPS Express Mail
	 * @return string 'USPSExpressMail'
	 */
	const VALUE_USPSEXPRESSMAIL = 'USPSExpressMail';
	/**
	 * Constant for value 'USPSGround'
	 * Meta informations :
	 * 	- documentation : USPS Ground
	 * @return string 'USPSGround'
	 */
	const VALUE_USPSGROUND = 'USPSGround';
	/**
	 * Constant for value 'Download'
	 * Meta informations :
	 * 	- documentation : Download.
	 * @return string 'Download'
	 */
	const VALUE_DOWNLOAD = 'Download';
	/**
	 * Constant for value 'WillCall_Or_Pickup'
	 * Meta informations :
	 * 	- documentation : Will Call Or Pick Up.
	 * @return string 'WillCall_Or_Pickup'
	 */
	const VALUE_WILLCALL_OR_PICKUP = 'WillCall_Or_Pickup';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeShippingServiceCodeType
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
		return in_array($_value,array(self::VALUE_UPSGROUND,self::VALUE_UPS3RDDAY,self::VALUE_UPS2NDDAY,self::VALUE_UPSNEXTDAY,self::VALUE_USPSPRIORITY,self::VALUE_USPSPARCEL,self::VALUE_USPSMEDIA,self::VALUE_USPSFIRSTCLASS,self::VALUE_SHIPPINGMETHODSTANDARD,self::VALUE_SHIPPINGMETHODEXPRESS,self::VALUE_SHIPPINGMETHODNEXTDAY,self::VALUE_USPSEXPRESSMAIL,self::VALUE_USPSGROUND,self::VALUE_DOWNLOAD,self::VALUE_WILLCALL_OR_PICKUP,self::VALUE_CUSTOMCODE));
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