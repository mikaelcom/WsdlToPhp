<?php
/**
 * Class file for PayPalTypeGalleryTypeCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGalleryTypeCodeType
 * @date 14/07/2012
 */
class PayPalTypeGalleryTypeCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Featured'
	 * Meta informations :
	 * 	- documentation : Indicates whether it is a featured item.
	 * @return string 'Featured'
	 */
	const VALUE_FEATURED = 'Featured';
	/**
	 * Constant for value 'Gallery'
	 * Meta informations :
	 * 	- documentation : Include in the gallery.
	 * @return string 'Gallery'
	 */
	const VALUE_GALLERY = 'Gallery';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeGalleryTypeCodeType
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
		return in_array($_value,array(self::VALUE_FEATURED,self::VALUE_GALLERY,self::VALUE_CUSTOMCODE));
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