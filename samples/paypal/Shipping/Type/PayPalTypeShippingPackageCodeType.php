<?php
/**
 * Class file for PayPalTypeShippingPackageCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeShippingPackageCodeType
 * @date 14/07/2012
 */
class PayPalTypeShippingPackageCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : None.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Letter'
	 * Meta informations :
	 * 	- documentation : Letter.
	 * @return string 'Letter'
	 */
	const VALUE_LETTER = 'Letter';
	/**
	 * Constant for value 'LargeEnvelope'
	 * Meta informations :
	 * 	- documentation : LargeEnvelope
	 * @return string 'LargeEnvelope'
	 */
	const VALUE_LARGEENVELOPE = 'LargeEnvelope';
	/**
	 * Constant for value 'USPSLargePack'
	 * Meta informations :
	 * 	- documentation : USPS Large Package/Oversize 1
	 * @return string 'USPSLargePack'
	 */
	const VALUE_USPSLARGEPACK = 'USPSLargePack';
	/**
	 * Constant for value 'VeryLargePack'
	 * Meta informations :
	 * 	- documentation : Very Large Package/Oversize 2
	 * @return string 'VeryLargePack'
	 */
	const VALUE_VERYLARGEPACK = 'VeryLargePack';
	/**
	 * Constant for value 'UPSLetter'
	 * Meta informations :
	 * 	- documentation : UPS Letter
	 * @return string 'UPSLetter'
	 */
	const VALUE_UPSLETTER = 'UPSLetter';
	/**
	 * Constant for value 'USPSFlatRateEnvelope'
	 * Meta informations :
	 * 	- documentation : USPS Flat Rate Envelope
	 * @return string 'USPSFlatRateEnvelope'
	 */
	const VALUE_USPSFLATRATEENVELOPE = 'USPSFlatRateEnvelope';
	/**
	 * Constant for value 'PackageThickEnvelope'
	 * Meta informations :
	 * 	- documentation : Package/thick envelope
	 * @return string 'PackageThickEnvelope'
	 */
	const VALUE_PACKAGETHICKENVELOPE = 'PackageThickEnvelope';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeShippingPackageCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_LETTER,self::VALUE_LARGEENVELOPE,self::VALUE_USPSLARGEPACK,self::VALUE_VERYLARGEPACK,self::VALUE_UPSLETTER,self::VALUE_USPSFLATRATEENVELOPE,self::VALUE_PACKAGETHICKENVELOPE,self::VALUE_CUSTOMCODE));
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